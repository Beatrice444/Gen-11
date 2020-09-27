<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Properties;
class propertiesController extends Controller
{
    public function properties(){
        $properties=Properties::all();
        return view('properties.property',compact('properties'));
    }
    public function store(Request $request){
    	$properties->validate([
    	    'name' => 'required',
    	    'detail' => 'required',
    	]);
    	Properties::create($request->all());
    	return ('sucess');
    }
}
