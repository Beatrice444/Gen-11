<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Change extends Model
{
    protected $fillable = ['title','body'];

    public function notification(){
    	return $this->belongsTo('App\Notification');
    }
}
