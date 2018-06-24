<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{

    protected $table = "checklists";

    public function aprs(){
        return $this->belongsToMany('App\Apr','apr_checklist');
    }
    public function apr_checklists(){
        return $this->hasMany('App\Apr_checklist');
    }
}
