<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderTransaction extends Model
{
    public function getDetail(){
        return $this->hasMany('App\DetailTransaction', 'transaction_id');
    }
}
