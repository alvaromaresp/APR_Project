<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apr_checklist extends Model
{
    public function apr(){
        return $this->belongsTo('App\Apr');
    }
    public function checklist(){
        return $this->belongsTo('App\Checklist');
    }
}
