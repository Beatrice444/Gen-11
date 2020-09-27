<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspect extends Model
{
    protected $fillable = ['title','body'];

    public function document(){
    	return $this->hasMany('App\Document');
    }
}
