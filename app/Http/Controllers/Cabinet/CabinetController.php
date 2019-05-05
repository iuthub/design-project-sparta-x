<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.05.2019
 * Time: 11:05
 */

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Order;

class CabinetController extends Controller
{
    public function myOrders() {
        $orders = Order::all()->where('user_id', auth()->id());

        return view('cabinet.my-orders', [
            'orders' => $orders
        ]);
    }
}