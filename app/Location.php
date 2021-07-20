<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $guarded = ['id','created_at','updated_at'];

    public function state(){
        return $this->belongsTo('App\State','state_id');
            }

            public function warehouses(){
                return $this->hasMany('App\Warehouse','location_id');
                    }
     public function pharmacies(){
                return $this->hasMany('App\Pharmacy','location_id');

            }

          public function users(){
                return $this->hasMany('App\User','location_id');
                    }


}
