<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bank_accounts extends Model
{
    protected $fillable = ['title'];

    public function details(){
    	return $this->hasMany('App\Details');
    }
}
