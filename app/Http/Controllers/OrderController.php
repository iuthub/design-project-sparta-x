<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Validator;

class OrderController extends Controller
{
    public function details($product_id)
    {
        if (!Product::where('id', '=', $product_id)->exists()) {
            throw new NotFoundHttpException();
        }
        return view('order.order', [
            'product_id' => $product_id
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'contact_name' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'address' => 'required|max:255',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Order::create([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id,
            'contact_name' => $request->contact_name,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'quantity' => $request->quantity,
        ]);
    }
}
