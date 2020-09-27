<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = ['title','body'];

    public function landlord(){
    	return $this->hasMany('App\Landlord');
    }
}
