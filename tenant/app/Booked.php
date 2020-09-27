<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booked extends Model
{
    protected $fillable = ['title','body'];

    public function apply(){
    	return $this->hasMany('App\Apply');
    }
}
