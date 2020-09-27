<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notification;
class NotificationController extends Controller
{
    public function Notification(){
        $notification=Notification::all();
        return view('notifications.notification',compact('notification'));
    }
}
