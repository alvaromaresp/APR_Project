<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesmt extends Model
{
    public function impressao(){
        return $this->hasMany('App\Impressao');
    }
}
