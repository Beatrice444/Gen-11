<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
class AdminController extends Controller
{
    public function Admin(){
        $admins=Admin::all();
        return view('admins.admin',compact('admins'));
    }
}
