<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title','body'];

    public function term(){
    	return $this->belongsTo('App\Term');
    }
}
