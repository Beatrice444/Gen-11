<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Messages;
class MessagesController extends Controller
{
    public function Messages(){
        $messages=Messages::all();
        return view('messages.message',compact('messages'));
    }}
