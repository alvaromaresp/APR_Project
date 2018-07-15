<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    protected $table = 'areas';

    public function aprs(){
        return $this->hasMany('App\Apr');
    }
}
