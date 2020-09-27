<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    protected $fillable = ['title','body'];

    public function tenant(){
    	return $this->hasMany('App\Tenant');
    }
}
