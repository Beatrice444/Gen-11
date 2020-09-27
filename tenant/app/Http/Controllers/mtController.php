<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\mt;
class mtController extends Controller
{
    public function mt(){
        $mts=mt::all();
        return view('mts.mt',compact('mts'));
    }
}
