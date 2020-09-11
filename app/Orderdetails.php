<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetails extends Model
{
    protected $fillable =
    [
       'order_id','product_id','quantity','unitcost','total',
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
