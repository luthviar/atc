<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionTraining extends Model
{
    public function type(){
    	return $this->belongsTo('SectionTrainingType','id_type');
    }
}
