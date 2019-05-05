<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductController extends Controller
{
    public function show($product_id)
    {
        $product = Product::findOrFail($product_id);

        return view('product.show', [
            'product' => $product
        ]);
    }

    public function list($category_id)
    {
        $products = Product::where(['category_id' => $category_id])->get();

        return view('product.list', [
            'products' => $products
        ]);
    }
}
