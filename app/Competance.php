<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competance extends Model
{
    public function formatteurs(){

    	return $this->belongsToMany('App\Formatteur');

    }
}
