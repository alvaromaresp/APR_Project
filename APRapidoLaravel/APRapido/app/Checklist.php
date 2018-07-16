<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    public function aprs(){
        return $this->belongsToMany('App\Apr','apr_checklist');
    } 
}
