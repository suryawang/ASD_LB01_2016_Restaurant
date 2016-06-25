<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    public function getHeader(){
        return $this->belongsTo('App\HeaderTransaction');
    }
    public function food(){
        return $this->belongsTo('App\Food');
    }
}
