<?php

namespace App\Http\Controllers;
use App\Models\Gfeedback;
use Illuminate\Http\Request;
use App\Models\Deal;

use App\Models\UserInfo;
use Illuminate\Support\Facades\Auth;
class GfeedbackController extends Controller
{
    //

public function Gfeedback()
{
    $user = Auth::user();
    $items = Gfeedback::where('uID', $user->id)->paginate(6); // Apply where clause first and then paginate
    return view('Gfeedback', ['items' => $items]);
}



public function FeedbackGuide(Request $req)
{
    // Check if a deal with the specified invoice exists
    $deal = Deal::where('invoice', $req->input('invoice'))->first();

    // Check if a deal with the specified invoice was found
    if ($deal) {
        // Check if the invoice is unique in the 'gfeedbacks' table
        $existingFeedback = Gfeedback::where('invoice', $req->input('invoice'))->first();
        if ($existingFeedback) {
            return "Invoice already exists in gfeedbacks table.";
        }

        // Create a new instance of the 'Gfeedback' model
        $gfeedback = new Gfeedback();

        // Set values based on the 'Deal' model
        $gfeedback->des = $req->input('des');
        $gfeedback->invoice = $req->input('invoice');
        $gfeedback->name = $deal->name;  // Fetch name from the 'Deal' model
        $gfeedback->uID = $deal->uID;    // Fetch uID from the 'Deal' model
        $gfeedback->dID = $deal->dID; 
        // Check if an image file is uploaded
        if ($req->hasFile('img')) {
            $imageName = time().'.'.$req->file('img')->getClientOriginalExtension();
            $req->file('img')->move(public_path('/Products'), $imageName);
            $gfeedback->img = $imageName;
        }

        // Save the data in the 'gfeedbacks' table
        $gfeedback->save();

        // Increment the 'project' field in the 'usersinfo' table
        Userinfo::where('uID', $deal->uID)->increment('project');

        // Optionally, you can flash a message to the session
        // $req->session()->flash('message', 'Data uploaded and saved successfully!');

        // Return a success message or handle further logic
        return redirect('/');
        
    } else {
        // Deal with the case where no deal with the specified invoice was found
        return "Deal not found for the provided invoice.";
    }
}
}
