<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordena extends Model
{
    public function aprs(){
        return $this->hasMany('App\Apr');
    }
}
