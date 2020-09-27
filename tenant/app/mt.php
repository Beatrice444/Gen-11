<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mt extends Model
{
    protected $fillable = ['title','body'];

    public function properties(){
    	return $this->hasMany('App\properties');
    }
}
