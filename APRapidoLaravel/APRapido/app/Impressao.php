<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impressao extends Model
{
    public function aprs(){
        return $this->belongsTo('App\Apr');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function area(){
        return $this->belongsTo('App\Area');
    }
    public function sesmt(){
        return $this->belongsTo('App\Sesmt');
    }
    public function coordena(){
        return $this->belongsTo('App\Coordena');
    }
}
