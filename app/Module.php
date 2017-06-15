<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function training(){
    	return $this->hasMany('App\Training','id_module','id');
    }
}
