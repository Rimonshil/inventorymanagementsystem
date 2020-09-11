<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name','email','phone','address','photo','shop','type','account_holder','account_number','bank_name','bank_branch','city'
       ];

       public function product()
       {
           return $this->hasMany(Product::class);
       }
}
