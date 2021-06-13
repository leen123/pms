<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caliber extends Model
{
    public function products(){
        return $this->hasMany('App\Product','caliber_id');
            }
}
