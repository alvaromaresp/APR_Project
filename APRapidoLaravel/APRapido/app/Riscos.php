<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riscos extends Model
{
    public function ferramentas(){
        return $this->belongsToMany('App\Ferramenta','ferramentas_riscos');
    }
    public function medidaspreventivas(){
        return $this->belongsToMany('App\Medidaspreventivas','riscos_medidaspreventivas','risco_id','medidapreventiva_id');
    }
}
