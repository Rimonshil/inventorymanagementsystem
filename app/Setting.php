<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'company_name','company_email','company_phone','company_address','company_logo','company_city','company_country','company_zipcode'
       ];
}
