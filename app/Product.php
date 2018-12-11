<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $guarded = [];
    //
    public function order()
    {
      return $this->hasMany('App\Order');
    }
}
