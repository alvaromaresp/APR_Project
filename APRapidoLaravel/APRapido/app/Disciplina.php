<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    public function atividades(){
        return $this->hasMany('App\Atividade');
    }
    public function ferramentas(){
        return $this->hasMany('App\Ferramenta');
    }
}
