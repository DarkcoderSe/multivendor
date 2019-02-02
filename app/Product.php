<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function Category(){
        return $this->belongsTo('App\Category');
    }
    public function Brand(){
        return $this->belongsTo('App\Brand');
    }
}
