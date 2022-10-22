<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Category;
use App\User;
use App\Order;
use App\OrderItem;
use App\Product;
use App\UserCategory;

class DataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // $purchaser = User::where('id', $this->user_id)->first();
    }
}
