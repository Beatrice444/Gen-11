<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['title','body'];

    public function inspect(){
    	return $this->belongsTo('App\Inspect');
    }
}
