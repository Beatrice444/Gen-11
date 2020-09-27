<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notify;
class NotifyController extends Controller
{
    public function notify(){
        $notify=Notify::all();
        return view('notifies.notify',compact('notify'));
    }
}
