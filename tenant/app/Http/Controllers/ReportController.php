<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Report;
class ReportController extends Controller
{
    public function Report(){
        $report=Report::all();
        return view('report.report',compact('report'));
    }
}
