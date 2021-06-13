<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    public function products(){
        return $this->hasMany('App\Product','shelf_id');
            }
}
