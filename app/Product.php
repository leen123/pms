<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function type(){
        return $this->belongsTo('App\Type','type_id');
            }

   public function factory(){
     return $this->belongsTo('App\Factory','factory_id');
        }

   public function billdetails(){
     return $this->hasMany('App\Billdetail','product_id');
          }
}
