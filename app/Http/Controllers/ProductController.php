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
}
