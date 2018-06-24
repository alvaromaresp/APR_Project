<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{

    protected $table = 'disciplina';

    public function atividades(){
        return $this->hasMany('App\Atividade');
    }
    public function ferramentas(){
        return $this->hasMany('App\Ferramenta');
    }
}
