<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\ProductImages;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'category_id' => 'required'
        ]);
        $product = Product::add($request->all());
        $product->description = $request->input('description');
        $product->save();
//        dd($product);
        foreach ($request->images as $image) {
            $filename = $image->store('images');
            ProductImages::create([
                'product_id' => $product->id,
                'title' => $filename,
                'alt' => $product->title,
            ]);

        }
        return redirect()->route('products.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);

        $categories=Category::all();
        return view('admin.products.edit', compact(
            'product',
                    'categories'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title'=>'required',
            'price'=>'required',
            'category_id'=>'required'
        ]);
        $product=Product::find($id);
        $product->edit($request->all());
        $product->description=$request->get('description');
        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product_image = ProductImages::where('product_id', $product->id)->get();

        foreach($product_image as $image)
        {
            $image->removeImage();
        }

        $product->delete();
        return redirect()->back();
    }

    public function edit_image($id)
    {
        $product_image = ProductImages::find($id);
        return view('admin.products.edit_image', ['product_image' => $product_image]);


    }

    public function update_image(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
        ]);
        $product_image = ProductImages::find($request->get('id'));
        $product_image->title = $product_image->uploadImage($request->file('image'));
        $product_image->save();
        return redirect()->back();
    }

    public function delete_image(Request $request)
    {

        $product_image = ProductImages::find($request->get('id'));
        $product_image->removeImage();
        $product_image->delete();
        return redirect()->back();
    }

    public function add_image(Request $request)
    {

        $this->validate($request, [
            'images'=>'required'
        ]);
        $product = Product::find($request->get('product_id'));
        foreach ($request->images as $image) {
            $filename = $image->store('images');
            ProductImages::create([
                'product_id' => $product->id,
                'title' => $filename,
                'alt' => $product->title,
            ]);

        }
        return redirect()->back();
    }

}
