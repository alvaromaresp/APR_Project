<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Naturezariscos extends Model
{
    public function aprs(){
        return $this->belongsToMany('App\Apr','apr_naturezariscos');
    }
}
