<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function state(){
        return $this->belongsTo('App\State','state_id');
            }

            public function warehouses(){
                return $this->hasMany('App\Warehouse','location_id');
                    }
}
