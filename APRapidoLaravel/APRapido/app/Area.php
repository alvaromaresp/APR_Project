<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
<<<<<<< HEAD
    protected $table = 'Areas';

=======
>>>>>>> fea3f598ee1c38faad7e96b66924f9c371670905
    public function aprs(){
        return $this->hasMany('App\Apr');
    }
}
