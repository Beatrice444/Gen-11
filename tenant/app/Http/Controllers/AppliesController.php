<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Apply;
class AppliesController extends Controller
{
    public function Apply(){
    	$applies=Apply::all();
    	return view('applies.apply',compact('applies'));
    }
    public function save(Request $request){
    	$title = $request->title;
    	$body = $request->body;

    	return alert('room applied');
    }
}
