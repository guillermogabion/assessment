<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //
    public function get_product()
    {
        $this->belongsTo(Product::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
