<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($category_id = null)
    {
        $categories = Category::all()->take(6);
        $products = Product::all()->take(6);
        if ($category_id != null) {
            $products = Product::where(['category_id' => $category_id])->get();
        }

        return view('home', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
