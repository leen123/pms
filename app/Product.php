<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function format(){
        return $this->belongsTo('App\Format','format_id');
            }
            public function shelf(){
                return $this->belongsTo('App\Shelf','shelf_id');
                    }
                    public function caliber(){
                        return $this->belongsTo('App\Caliber','caliber_id');
                            }
                            public function chemicalname(){
                                return $this->belongsTo('App\Chemicalname','chemicalname_id');
                                    }
                                    public function orderdetails(){
                                        return $this->hasMany('App\Orderdetail','product_id');
                                            }
}
