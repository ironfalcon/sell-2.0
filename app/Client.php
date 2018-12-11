<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $guarded = [];
    //
    public function order()
    {
      return $this->hasOne('App\Order');
    }
}
