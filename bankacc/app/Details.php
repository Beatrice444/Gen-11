<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class details extends Model
{
    protected $fillable = ['title','body'];

    public function bank_accounts(){
    	return $this->belongsTo('App\Bank_Accounts');
    }
}
