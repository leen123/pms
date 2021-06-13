<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderdetails(){
        return $this->hasMany('App\Orderdetail','order_id');
            }
            public function user(){
                return $this->belongsTo('App\User','user_id');
                    }
}
