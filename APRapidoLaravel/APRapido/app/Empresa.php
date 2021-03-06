<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public function aprs(){
        return $this->hasMany('App\Apr');
    }
    public function users(){
        return $this->hasMany('App\User');
    }
    public function atividades(){
        return $this->hasMany('App\Atividade');
    }
    public function __toString()
    {
        return $this->empresa;
        //return parent::__toString(); // TODO: Change the autogenerated stub
    }
}
