<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['title','body'];

    public function messages(){
    	return $this->hasMany('App\Messages');
    }
}
