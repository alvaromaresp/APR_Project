<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ferramenta extends Model
{
    public function atividades(){
        return $this->belongsToMany('App\Atividades','atividade_ferramenta');
    }
    public function disciplina(){
        return $this->belongsTo('App\Disciplina');
    }
    public function riscos(){
        return $this->belongsToMany('App\Riscos','ferramenta_riscos');
    }
}
