<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    public function products(){
        return $this->hasMany('App\Product','pharmacy_id');
            }

      public function location(){
                return $this->belongsTo('App\Location','location_id');
                    }
}
