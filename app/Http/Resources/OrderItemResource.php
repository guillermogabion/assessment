<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\OrderResource;
use App\Category;
use App\User;
use App\Order;
use App\OrderItem;
use App\Product;
use App\UserCategory;

class OrderItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $order = Order::where('id', $this->order_id)->first();
        $product = Product::where('id', $this->product_id)->first();
        $purchase = User::where('id', $order->user_id)->first();
        $distributor = User::where('id', $purchase->referred_by)->first();
        $total_refer = User::where('referred_by', $distributor->id)->count();

        return [
            'order' => $order,
            'purchaser' => $purchase,
            'distributor' => $distributor,
            'product' => $product,
            'quantity' => $this->quantity,
            'total_refer' => $total_refer,
        ];
    }
}
