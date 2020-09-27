<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['title','body'];

    public function change(){
    	return $this->belongsTo('App\Change');
    }
}
