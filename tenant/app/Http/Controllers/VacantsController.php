<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vacant;
class VacantsController extends Controller
{
    public function Vacant(){
        $vacants=Vacant::all();
        return view('vacants.vacant',compact('vacants'));
    }
    public function save(Request $request){
    	$title = $request->title;
    	$body = $request->body;

    	return view('removes.update-remove');
    }  
}
