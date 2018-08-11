<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apr extends Model
{
    public function atividades(){
        return $this->belongsToMany('App\Atividade','atividade_apr');
    }
    public function naturezasriscos(){
        return $this->belongsToMany('App\Naturezariscos','apr_naturezariscos');
    }
    public function checklists(){
        return $this->belongsToMany('App\Checklist','apr_checklists');
    }
    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }
    public function impressoes(){
        return $this->hasMany('App\Impressao');
    }

}
