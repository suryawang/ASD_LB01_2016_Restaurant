<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{
    use SoftDeletes;
    
    public function hasDetail(){
        return $this->hasMany('App\DetailTransaction', 'food_id');
    }

}
