<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $guarded = [];
    //
    public function client()
    {
      return $this->belongsTo('App\Client');
    }

    public function product()
    {
      return $this->belongsTo('App\Product');
    }
}
