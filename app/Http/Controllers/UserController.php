<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Calendar;
use App\Models\Picture;
use App\Models\Gfeedback;
use App\Models\Video;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function guides()
    {
        // Step 1: Eager Load Userinfo Relationship
        $users = User::with('userinfo')
            // Step 2: Filter Users by Status
            ->where('status1', 'allow')
            // Step 3: Join Users and Userinfos Tables
            ->join('userinfos', 'users.id', '=', 'userinfos.uID')
            // Step 4: Order Users by Project
            ->orderByRaw('userinfos.project IS NULL, CAST(userinfos.project AS SIGNED) DESC')
            // Step 5: Paginate Users
            ->paginate(12);

    
        return view('guides', ['items' => $users]);
        // return ['items' => $users, 'disabledDates' => $disabledDates];
    }
    

    public function editUserInfo(Request $req)
    {
        $d = User::find($req->id);
        $pno = $req->input('pno');
        if (!empty($pno)) {
            $d->pno = $pno;
        }
        $status2 = $req->input('status2');
        if (!empty($status2)) {
            $d->status2 = $status2;
        }
    
        // Update image if provided
        if ($req->hasFile('img')) {
            $img = $req->file('img');
            $imageName = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('/Products'), $imageName);
            $d->img = $imageName;
        }

          // Update image if provided
          if ($req->hasFile('cover')) {
            $cover = $req->file('cover');
            $imageName1 = time() . '.' . $cover->getClientOriginalExtension();
            $cover->move(public_path('/Products'), $imageName1);
            $d->cover = $imageName1;
        }

             // Update image if provided
             if ($req->hasFile('licence')) {
                $licence = $req->file('licence');
                $imageName2 = time() . '.' . $licence->getClientOriginalExtension();
                $licence->move(public_path('/Products'), $imageName2);
                $d->licence = $imageName2;
            }
    
        $d->save();
        return redirect('userInfo');
      
    }

    public function byIdDataUser() {
        $user = Auth::user(); // Get the currently authenticated user
        $data = User::find($user->id); // Retrieve the user's data
        return view('CompleteProfileEdit', ['data' => $data]);
    }
    


    public function editUserInfoEdit(Request $req)
    {
        $d = User::find($req->id);
        $username = $req->input('username');
        if (!empty($username)) {
            $d->username = $username;
        }
        $cnic = $req->input('cnic');
        if (!empty($cnic)) {
            $d->cnic = $cnic;
        }
        $fullDay = $req->input('fullDay');
        if (!empty($fullDay)) {
            $d->fullDay = $fullDay;
        }

        $halfDay = $req->input('halfDay');
        if (!empty($halfDay)) {
            $d->halfDay = $halfDay;
        }

        $d = User::find($req->id);
        $pno = $req->input('pno');
        if (!empty($pno)) {
            $d->pno = $pno;
        }
        $status2 = $req->input('status2');
        if (!empty($status2)) {
            $d->status2 = $status2;
        }
    
        // Update image if provided
        if ($req->hasFile('img')) {
            $img = $req->file('img');
            $imageName = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('/Products'), $imageName);
            $d->img = $imageName;
        }

          // Update image if provided
          if ($req->hasFile('cover')) {
            $cover = $req->file('cover');
            $imageName1 = time() . '.' . $cover->getClientOriginalExtension();
            $cover->move(public_path('/Products'), $imageName1);
            $d->cover = $imageName1;
        }

             // Update image if provided
             if ($req->hasFile('licence')) {
                $licence = $req->file('licence');
                $imageName2 = time() . '.' . $licence->getClientOriginalExtension();
                $licence->move(public_path('/Products'), $imageName2);
                $d->licence = $imageName2;
            }
    
        $d->save();
        return redirect('dashboard');
      
    }

    public function guideVisit($id)
{
    $user = User::with('userinfo')
        ->where('status1', 'allow')
        ->join('userinfos', 'users.id', '=', 'userinfos.uID')
        ->where('userinfos.uID', $id)
        ->first();

    $pictures = Picture::where('uID', $id)->get();
    $videos = Video::where('uID', $id)->get();
    $feedback = Gfeedback::where('uID', $id)->orderBy('dated', 'desc')->get();

    $items = Calendar::where('uID', $id)->get();
    $disabledDates = $items->map(function ($item) {
        return [
            'from' => $item->dated,
            'to' => $item->dated,
        ];
    })->toArray();

    return view('guideVisit', ['item' => $user, 'disabledDates' => $disabledDates, 'pictures' => $pictures, 'videos' => $videos, 'feedback' => $feedback]);
}

public function fetchforBill(Request $request, $id)
{
    // Find the user by ID
    $user = User::find($id);

    // Check if the user exists
    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }

    // Retrieve halfDay and fullDay values
    $halfDay = $user->halfDay;
    $fullDay = $user->fullDay;

    // Pass the $id, $halfDay, and $fullDay to the Blade view
    return view('guideHire', ['id' => $id, 'halfDay' => $halfDay, 'fullDay' => $fullDay]);
}


public function AllGuideAdmin()
{
    $users = User::with(['userinfo','paymentinfo', 'addressinfo'])->get();
    return view('admin.AllGuideAdmin', ['users' => $users]);
}


public function NotConfirmDealAdmin()
{
    // Fetch deals where status is 'New' and display in descending order
    $items = User::with('user')
        ->where('status1', 'allow')
        ->orderBy('created_at', 'desc')
        ->get();

    return view('admin.NotConfirmDealAdmin', ['items' => $items]);
}


public function AllowGuideAdmin()
{
    // Fetch users where status1 is 'allow' and display in descending order
    $users = User::where('status1', 'allow')
    ->paginate(10);

    return view('admin.AllowGuideAdmin', ['users' => $users]);
}

public function BlockGuideAdmin()
{
    // Fetch users where status1 is 'allow' and display in descending order
    $users = User::where('status1', 'block')
    ->paginate(10);

    return view('admin.BlockGuideAdmin', ['users' => $users]);
}


public function makeAllow($id)
{
    $deal = User::findOrFail($id);
    $deal->status1 = 'allow';
    $deal->save();
    return redirect()->route('admin.BlockGuideAdmin');
}

public function makeBlock($id)
{
    $deal = User::findOrFail($id);
    $deal->status1 = 'block';
    $deal->save();
    return redirect()->route('admin.AllowGuideAdmin');
}

public function AvailableGuides()
{
    $users = User::where('status2', 'Online')
    ->paginate(10);

return view('admin.AvailableGuides', ['users' => $users]);
}

public function NotAvailableGuides()
{
    $users = User::where('status2', 'Offline')
    ->paginate(10);
    return view('admin.NotAvailableGuides', ['users' => $users]);
}


}
