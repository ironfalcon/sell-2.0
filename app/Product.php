<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function order()
    {
      return $this->hasMany('App\Order');
    }
}
