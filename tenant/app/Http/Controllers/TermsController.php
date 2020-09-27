<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Term;
class TermsController extends Controller
{
    public function Term(){
        $terms=Term::all();
        return view('terms.term',compact('terms'));
    }  
}
