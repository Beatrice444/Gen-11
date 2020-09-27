<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Change;

class ChangeController extends Controller
{
    public function Change(){
        $change=Change::all();
        return view('change.change',compact('change'));
    }
}
