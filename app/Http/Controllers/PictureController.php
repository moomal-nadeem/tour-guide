<?php

namespace App\Http\Controllers;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PictureController extends Controller
{
    //
 public function picture(Request $req) 
{
$d = new Picture();
$d->uID = $req->id;
if ($req->hasFile('img')) {
    $imageName = time().'.'.$req->file('img')->getClientOriginalExtension();
    $req->file('img')->move(public_path('/Products'), $imageName);
    $d->img = $imageName;
}
$d->save();
return redirect('picture');
// return "hello";
}

public function pictureList()
{
    $user = Auth::user();
    $items = Picture::where('uID', $user->id)->paginate(5); // Apply where clause first and then paginate
    return view('picture', ['items' => $items]);
}


public function deletePicture($id){
    $d = Picture::find($id);
    $d->delete();
    return redirect('picture');
}

}
