<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medidaspreventivas extends Model
{
    public function riscos(){
        return $this->belongsToMany('App\Riscos','riscos_medidaspreventivas','medidapreventiva_id','risco_id');
    }
}
