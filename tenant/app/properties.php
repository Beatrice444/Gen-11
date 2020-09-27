<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class properties extends Model
{
    protected $fillable = ['title','body'];

    public function mt(){
    	return $this->hasMany('App\mt');
    }
}
