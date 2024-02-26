<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Paymentinfo;
class PaymentinfoController extends Controller
{
    //

    public function paymentInfo(Request $req)
    {
        $validatedData = $req->validate([
            'appname' => 'required',
            'accountname' => 'required',
            'accountnumber' => 'required',
            'paymentmethod' => 'required',
            'accountlimit' => 'required',
            // 'img' => 'required|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the file types and max size as needed.
        ]);
    
        $d = new Paymentinfo();

        $d->uID = $req->id;
        $d->accountname = $validatedData['accountname'];
        $d->appname = $validatedData['appname'];
        $d->accountnumber = $validatedData['accountnumber'];
        $d->paymentmethod = $validatedData['paymentmethod'];
        $d->accountlimit = $validatedData['accountlimit'];
        $d->save();
        // $req->session()->flash('message', 'Data uploaded and saved successfully!');
        return redirect('dashboard');
    }


    public function byIdDataPayment() {
        $user = Auth::user(); // Get the currently authenticated user
        $data = Paymentinfo::find($user->id); // Retrieve the user's data
    
        return view('paymentInfoEdit', ['data' => $data]);
    }
    


    public function paymentInfoEdit(Request $req)
    {
        $d = Paymentinfo::find($req->id);
        $appname = $req->input('appname');
        if (!empty($appname)) {
            $d->appname = $appname;
        }
        $accountname = $req->input('accountname');
        if (!empty($accountname)) {
            $d->accountname = $accountname;
        }
 
        $accountnumber = $req->input('accountnumber');
        if (!empty($accountnumber)) {
            $d->accountnumber = $accountnumber;
        }
        $paymentmethod = $req->input('paymentmethod');
        if (!empty($paymentmethod)) {
            $d->paymentmethod = $paymentmethod;
        }
        $accountlimit = $req->input('accountlimit');
        if (!empty($accountlimit)) {
            $d->accountlimit = $accountlimit;
        }
        
        $d->save();
        return redirect('dashboard');
      
    }

}
