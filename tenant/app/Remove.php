<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remove extends Model
{
    protected $fillable = ['title','body'];

    public function notify(){
    	return $this->hasMany('App\Notify');
    }
}
