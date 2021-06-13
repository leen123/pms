<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chemicalname extends Model
{
    public function products(){
        return $this->hasMany('App\Product','chemicalname_id');
            }
}
