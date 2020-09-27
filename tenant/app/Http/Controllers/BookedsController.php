<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Booked;
class BookedsController extends Controller
{
    public function Booked(){
    	$bookeds=Booked::all();
    	return view('bookeds.booked',compact('bookeds'));
    }
}
