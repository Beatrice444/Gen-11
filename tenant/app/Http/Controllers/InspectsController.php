<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inspect;
class InspectsController extends Controller
{
    public function Inspect(){
    	$inspects=Inspect::all();
    	return view('inspects.inspect',compact('inspects'));
    }
}
