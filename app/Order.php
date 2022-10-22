<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function order_item()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }
    public function order_product()
    {
        return $this->hasMany(OrderItem::class);
    }
}
