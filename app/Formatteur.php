<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formatteur extends Model
{
    public function competances(){

    	return $this->belongsToMany('App\Competance');
    
    }
}
