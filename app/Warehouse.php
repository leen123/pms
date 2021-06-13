<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    public function location(){
        return $this->belongsTo('App\Location','location_id');

    }

    public function bills(){
        return $this->hasMany('App\Bill','warehouse_id');
            }
}
