<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impressao extends Model
{
    protected $table = 'impressao';
    public function aprs(){
        return $this->belongsTo('App\Apr','apr');
    }
    public function users(){
        return $this->belongsTo('App\User','user');
    }
    public function areas(){
        return $this->belongsTo('App\Area','area');
    }
    public function sesmts(){
        return $this->belongsTo('App\Sesmt','sesmt');
    }
    public function coordenas(){
        return $this->belongsTo('App\Coordena','coordena');
    }
}
