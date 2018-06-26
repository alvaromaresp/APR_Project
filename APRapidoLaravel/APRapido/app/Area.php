<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'Areas';

    public function aprs(){
        return $this->hasMany('App\Apr');
    }
}
