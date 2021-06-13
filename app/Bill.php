<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function billdetails(){
        return $this->hasMany('App\Billdetail','bill_id');

    }

    public function warehouse(){
        return $this->belongsTo('App\Warehouse','warehouse_id');

    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
           }

}
