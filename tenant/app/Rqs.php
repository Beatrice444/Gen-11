<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rqs extends Model
{
    protected $fillable = ['title','body'];

    public function vacant(){
    	return $this->belongsTo('App\Vacant');
    }
}
