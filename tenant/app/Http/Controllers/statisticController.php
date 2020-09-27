<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\statistic;
class statisticController extends Controller
{
    public function statistic(){
        $statistics=statistic::all();
        return view('statistics.statistic',compact('statistics'));
    }
}
