<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank_Accounts;
use App\Details;
class DetailsController extends Controller
{
    public function showDetails($id){
        $bank_accounts = Bank_Accounts::find($id);
        $details = $bank_accounts->details;
        return view('details.details',compact('details', 'id'));
    }

    public function showAddForm($id){
      return view('details.add-details', compact('id'));

    }

    public function saveDetails(Request $request,$id){
           $title = $request->title;
           $body = $request->body;

           $bank_accounts=Bank_Accounts::find($id);
           $bank_accounts->details()->create(['title'=>$title,'body'=>$body]);

           return redirect()->route('details', $id);
    }

    public function destroy($details_id,$bank_accounts_id){
           Details::destroy($details_id);
           return redirect()->route('details',$bank_accounts_id);
    }
    
    public function showEditForm($details_id,$bank_accounts_id){
      $details = Details::find($details_id);
      return view('details.edit-details',compact('details','bank_accounts_id'));

    }

    public function UpdateDetails(Request $request,$details_id,$bank_accounts_id){
         $title = $request->title;
         $body = $request->body;

         $details = Details::find($details_id);
         $details->update(['title'=>$title,'body'=>$body]);
         return redirect()->route('details',$bank_accounts_id);

    }
    public function showSpecific($id){
         $details = Details::find($id);
         return view('details.details-specific',compact('details'));
    }
}
    

    


