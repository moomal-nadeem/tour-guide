<?php

namespace App\Http\Controllers;
use App\Models\Userinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserinfoController extends Controller
{
    //

    public function userInfo(Request $req)
    {
        $validatedData = $req->validate([
            'language' => 'required',
            // 'img' => 'required|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the file types and max size as needed.
        ]);
    
        $d = new Userinfo();

        $d->uID = $req->id;
        $d->project = 0;
        $d->language = $validatedData['language'];
        $d->save();
        // $req->session()->flash('message', 'Data uploaded and saved successfully!');
        return redirect('addressInfo');
    }
    
    public function byIdDataLang() {
        $user = Auth::user(); // Get the currently authenticated user
        $data = Userinfo::find($user->id); // Retrieve the user's data
    
        return view('userInfoEdit', ['data' => $data]);
    }

    public function userInfoEdit(Request $req)
    {
        $d = Userinfo::find($req->id);
        $language = $req->input('language');
        if (!empty($language)) {
            $d->language = $language;
        }
        $d->save();
        return redirect('dashboard');
      
    }

  
}
