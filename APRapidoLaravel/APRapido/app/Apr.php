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
        return $this->belongsToMany('App\Checklist','apr_checklist');
    }
    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function sesmt(){
        return $this->belongsTo('App\Sesmt');
    }
    public function coordena(){
        return $this->belongsTo('App\Coordena');
    }
    public function area(){
        return $this->belongsTo('App\Area');
    }
    public function apr_checklists(){
        return $this->hasMany('App\Apr_checklist');
    }
}
