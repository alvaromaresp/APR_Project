<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesmt extends Model
{
    public function aprs(){
        return $this->hasMany('App\Apr');
    }
}
