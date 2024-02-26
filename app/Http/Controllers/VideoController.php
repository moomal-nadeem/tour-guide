<?php

namespace App\Http\Controllers;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    //
    public function video(Request $req) 
{
$d = new Video();
$d->uID = $req->id;
$d->video = $req->input('video');
$d->save();
return redirect('video');
// return "hello";
}

public function videoList()
{
    $user = Auth::user();
    $items = Video::where('uID', $user->id)->paginate(5); // Apply where clause first and then paginate
    return view('video', ['items' => $items]);
}


public function deleteVideo($id){
    $d = Video::find($id);
    $d->delete();
    return redirect('video');
}
}
