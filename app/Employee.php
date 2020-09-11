<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
     'name','email','phone','address','photo','vacation','salary','city','experience'
    ];

    public function salary()
    {
        return $this->hasOne(Salary::class);
    }
    public function attendence()
    {
        return $this->belongsTo(Attendence::class);

    }
}
