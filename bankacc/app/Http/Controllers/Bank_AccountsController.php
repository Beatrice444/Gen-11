<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank_Accounts;
class Bank_AccountsController extends Controller
{
    public function ShowAddBank_AccountsForm(){
    	return view('bank_accounts.add-bank_accounts');
    }

    public function addBank_Accounts(Request $request){
    	$title=$request->title;
    	Bank_Accounts::create(['title'=>$title]);
    	return redirect()->route('bank_accounts');
    }

    public function showBank_Accounts(){
    	$bank_accounts=Bank_Accounts::all();
    	return view('bank_accounts.bank_accounts',compact('bank_accounts'));
    }

   public function destroy($id){
         Bank_Accounts::destroy($id);
         return redirect()->route('bank_accounts');
   }

   public function showEditForm($id){
   	      $bank_accounts=Bank_Accounts::find($id);
   	      return view('bank_accounts.update-bank_accounts',compact('id','bank_accounts'));
   }

   public function update(Request $request,$id){
          $title=$request->title;
          $bank_accounts=Bank_Accounts::find($id);
          $bank_accounts->update(['title'=>$title]);
          return redirect()->route('bank_accounts');
   }
}
