<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tenant;
class TenantController extends Controller
{
    public function Tenant(){
        $tenants=Tenant::all();
        return view('tenants.tenant',compact('tenants'));
    }
}
