<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    public function products(){
        return $this->hasMany('App\Product','format_id');
            }
}
