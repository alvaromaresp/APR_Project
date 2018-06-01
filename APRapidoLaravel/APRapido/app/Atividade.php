<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{

    public function aprs(){
        return $this->belongsToMany('App\Apr','atividade_apr');
    }
    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }
    public function disciplina(){
        return $this->belongsTo('App\Disciplina');
    }
    public function ferramentas(){
        return $this->belongsToMany('App\Ferramenta','atividade_ferramenta');
    }

}
