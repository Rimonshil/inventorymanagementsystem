<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = 
    [
    'product_name','cat_id','sup_id','product_code','product_garage','product_route','product_image','buy_date',
    'expire_date','buying_price','selling_price'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function orderdetails()
    {
        return $this->belongsTo(Orderdetails::class);
    }
    
  
}
