<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notify extends Model
{
    protected $fillable = ['title','body'];

    public function remove(){
    	return $this->hasMany('App\Remove');
    }
}
