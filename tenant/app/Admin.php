<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
   protected $fillable = ['title','body'];

    public function booked(){
    	return $this->hasMany('App\Booked');
    }
}
