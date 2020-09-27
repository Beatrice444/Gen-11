<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacant extends Model
{
    protected $fillable = ['title','body'];

    public function rqs(){
    	return $this->hasMany('App\Rqs');
    }
}
