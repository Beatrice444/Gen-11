<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
class ServicesController extends Controller
{
    public function Service(){
        $services=Service::all();
        return view('services.service',compact('services'));
    }  
}
