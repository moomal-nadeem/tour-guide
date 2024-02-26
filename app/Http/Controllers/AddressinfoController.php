<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addressinfo;
use Illuminate\Support\Facades\Auth;
class AddressinfoController extends Controller
{
    //
    public function addressInfo(Request $req)
    {
        $validatedData = $req->validate([
            'city' => 'required',
            'code' => 'required',
            'country' => 'required',
            'address' => 'required',
            // 'img' => 'required|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the file types and max size as needed.
        ]);
    
        $d = new Addressinfo();

        $d->uID = $req->id;
        $d->code = $validatedData['code'];
        $d->city = $validatedData['city'];
        $d->country = $validatedData['country'];
        $d->address = $validatedData['address'];
        $d->save();
        // $req->session()->flash('message', 'Data uploaded and saved successfully!');
        return redirect('paymentInfo');
    }
    


    public function byIdDataAddress() {
        $user = Auth::user(); // Get the currently authenticated user
        $data = Addressinfo::find($user->id); // Retrieve the user's data
    
        return view('addressInfoEdit', ['data' => $data]);
    }
    


    public function addressInfoEdit(Request $req)
    {
        $d = Addressinfo::find($req->id);
        $city = $req->input('city');
        if (!empty($city)) {
            $d->city = $city;
        }
        $code = $req->input('code');
        if (!empty($code)) {
            $d->code = $code;
        }
 
        $country = $req->input('country');
        if (!empty($country)) {
            $d->country = $country;
        }
        $address = $req->input('address');
        if (!empty($address)) {
            $d->address = $address;
        }
        
        $d->save();
        return redirect('dashboard');
      
    }

}
