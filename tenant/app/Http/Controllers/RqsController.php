<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rqs;
class RqsController extends Controller
{
    public function Rqs(){
    	$rqs=Rqs::all();
        return view('rqs.rqs',compact('rqs'));
    }
}
