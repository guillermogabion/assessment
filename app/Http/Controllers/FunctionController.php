<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderItemResource;
use App\Order;
use App\User;
use App\OrderItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FunctionController extends Controller
{
    //
    public function index()
    {
        return Order::with('user.refer')->with('order_product.product')->get();
    }

    public function getproduct()
    {
        $order = OrderItem::get();
        return OrderItemResource::collection($order);
    }

    public function counts()
    {
        $user_info = User::select('referred_by', DB::raw('count(referred_by) as total'))
            ->groupBy('referred_by')
            ->with('refer')
            ->orderBy('total', 'asc')
            ->get(['first_name']);
        return $user_info;
    }
}
