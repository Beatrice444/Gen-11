<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Remove;
class RemoveController extends Controller
{
    public function Remove(){
        $remove=Remove::all();
        return view('removes.remove',compact('remove'));
    }
    public function destroy($id){
        Remove::destroy($id);
        return redirect()->route('admin');
    }
    public function Edit(){
        return view('removes.update-remove');
    }
    public function store(Request $request){
    	$remove->validate([
    	    'name' => 'required',
    	    'detail' => 'required',
    	]);
    	Remove::create($request->all());
    	return ('sucess');
    } 
}
