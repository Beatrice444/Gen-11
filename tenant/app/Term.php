<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $fillable = ['title','body'];

    public function service(){
    	return $this->hasMany('App\Service');
    }
}
