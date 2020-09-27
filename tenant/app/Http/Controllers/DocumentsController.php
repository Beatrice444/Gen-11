<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Document;
class DocumentsController extends Controller
{
    public function Document(){
        $documents=Document::all();
        return view('documents.document',compact('documents'));
    }  
}