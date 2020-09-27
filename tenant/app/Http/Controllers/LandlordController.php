<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Landlord;
class LandlordController extends Controller
{
    public function Landlord(){
        $landlords=Landlord::all();
        return view('landlords.landlord',compact('landlords'));
    }
}
