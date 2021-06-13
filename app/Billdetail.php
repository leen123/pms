<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billdetail extends Model
{
    public function product(){
        return $this->belongsTo('App\Product','product_id');
            }

            public function bill(){
                return $this->belongsTo('App\Bill','bill_id');
                    }
}
