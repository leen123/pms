<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function state(){
        return $this->belongsTo('App\State','state_id');
            }

            public function pharmacies(){
                return $this->hasMany('App\Pharmacy','location_id');
                    }
}
