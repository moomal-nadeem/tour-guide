<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Deal;
use App\Models\User;
use App\Models\Gfeedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\DB;


class DealController extends Controller
{
    //

    public function guideHire(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'pno' => 'required|string',
            'days' => 'required|min:0',
            'dated' => 'required|string',
            'schedule' => 'required|string',
            'total' => 'required',
            'uID' => 'required', // Make sure this is the correct validation rule
        ]);

        // Create a new Deal instance
        $deal = new Deal();

        // Assign values from the request
        $deal->name = $request->input('name');
        $deal->email = $request->input('email');
        $deal->pno = $request->input('pno');
        $deal->days = $request->input('days');
        $deal->dated = $request->input('dated');
        $deal->schedule = $request->input('schedule');
        $deal->total = $request->input('total');

        $deal->paymentStatus = 0;
        $deal->paymentStatusAdmin = 0;
        // Calculate commission and yours
        $deal->comission = $deal->total * 20 / 100;
        $deal->yours = $deal->total - $deal->comission;

        // Assign other values
        $deal->uID = $request->input('uID'); // assuming 'uID' is the correct name
        $deal->status = 'New';
        $deal->allowStatus = 'waiting';

        // Generate a unique five-digit invoice number
        $uniqueFiveDigitNumber = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
        $deal->invoice = $uniqueFiveDigitNumber;
        if ($request->hasFile('fil')) {
            $imageName = time() . '.' . $request->file('fil')->getClientOriginalExtension();
            $request->file('fil')->move(public_path('/Products'), $imageName);
            $deal->fil = $imageName;
        }
        // Save the Deal
        $deal->save();
        $usrData = User::find($deal->uID);
        if (!$usrData) {
            return response()->json(['error' => 'User not found'], 404);
        }
        $data = [
            'usrData' => $usrData,
            'deal' => $deal,
        ];
        $user = ['to' => $deal->email];
        Mail::send(
            'GDeal.NewMail',
            $data,
            function ($msg) use ($user) {
                $msg->to($user['to']);
                $msg->subject("Tour Guide Book Confirmation Email.");
            }
        );

        $user1 = ['to' => $usrData->email];
        Mail::send(
            'GDeal.NewMailUser',
            $data,
            function ($msg) use ($user1) {
                $msg->to($user1['to']);
                $msg->subject("New Deal");
            }
        );

        $user2 = ['to' => 'getyourtourguideuae2023@gmail.com'];
        Mail::send(
            'GDeal.NewMailAdmin',
            $data,
            function ($msg) use ($user2) {
                $msg->to($user2['to']);
                $msg->subject("New Deal");
            }
        );
        // Redirect back to the 'guideHiers' page with the uID parameter
        return redirect('bill/' . $deal->id);
    }
    public function bill($id)
    {
        // Find the Deal with the given ID
        $deal = Deal::find($id);

        // Check if the deal exists
        if (!$deal) {
            return response()->json(['error' => 'Deal not found'], 404);
        }

        // Find the User associated with the deal using the uID
        $usrData = User::find($deal->uID);

        // Check if the user exists
        if (!$usrData) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Pass the deal and user data to the 'bill' view
        return view('bill', ['deal' => $deal, 'usrData' => $usrData]);
    }

    // ================================================ Guide Start ==========================================
    public function GNewDeal()
    {
        $user = Auth::user(); // Get the currently authenticated user
        $datas = Deal::where('uID', $user->id)
            ->where('status', 'New')
            ->orderByDesc('created_at') // Sort by created_at in descending order
            ->paginate(10); // Retrieve the deals data
        return view('GDeal.GNewDeal', ['datas' => $datas]);
    }

    public function GAllDeal()
    {
        $user = Auth::user(); // Get the currently authenticated user
        $datas = Deal::where('uID', $user->id)
            ->orderByDesc('created_at') // Sort by created_at in descending order
            ->paginate(10); // Retrieve the deals data
        return view('GDeal.GAllDeal', ['datas' => $datas]);
    }

    public function GCancleDeal()
    {
        $user = Auth::user(); // Get the currently authenticated user
        $datas = Deal::where('uID', $user->id)
            ->where('status', 'Cancel')
            ->orderByDesc('created_at') // Sort by created_at in descending order
            ->paginate(10); // Retrieve the deals data
        return view('GDeal.GCancleDeal', ['datas' => $datas]);
    }

    public function GCompletedDeal()
    {
        $user = Auth::user(); // Get the currently authenticated user
        $datas = Deal::where('uID', $user->id)
            ->where('status', 'Completed')
            ->orderByDesc('created_at') // Sort by created_at in descending order
            ->paginate(10); // Retrieve the deals data
        return view('GDeal.GCompletedDeal', ['datas' => $datas]);
    }
    public function GConfirmDeal()
    {
        $user = Auth::user(); // Get the currently authenticated user
        $datas = Deal::where('uID', $user->id)
            ->where('status', 'confirm')
            ->orderByDesc('created_at') // Sort by created_at in descending order
            ->paginate(10); // Retrieve the deals data
        return view('GDeal.GConfirmDeal', ['datas' => $datas]);
    }
    public function GInprocessDeal()
    {
        $user = Auth::user(); // Get the currently authenticated user
        $datas = Deal::where('uID', $user->id)
            ->where('status', 'Inprocess')
            ->orderByDesc('created_at') // Sort by created_at in descending order
            ->paginate(10); // Retrieve the deals data
        return view('GDeal.GInprocessDeal', ['datas' => $datas]);
    }

    public function GNotConfirmDeal()
    {
        $user = Auth::user(); // Get the currently authenticated user
        $datas = Deal::where('uID', $user->id)
            ->where('status', 'waiting')
            ->orderByDesc('created_at') // Sort by created_at in descending order
            ->paginate(10); // Retrieve the deals data
        return view('GDeal.GNotConfirmDeal', ['datas' => $datas]);
    }


    public function GReseivedPayment()
    {
        $user = Auth::user(); // Get the currently authenticated user
        $datas = Deal::where('uID', $user->id)
            ->where('paymentStatusAdmin', 1)
            ->orderByDesc('created_at') // Sort by created_at in descending order
            ->paginate(10); // Retrieve the deals data
        return view('GDeal.GReseivedPayment', ['datas' => $datas]);
    }

    public function GRemainingPayment()
    {
        $user = Auth::user(); // Get the currently authenticated user
        $datas = Deal::where('uID', $user->id)
            ->where('paymentStatusAdmin', 0)
            ->orderByDesc('created_at') // Sort by created_at in descending order
            ->paginate(10); // Retrieve the deals data
        return view('GDeal.GRemainingPayment', ['datas' => $datas]);
    }

    public function plz($id)
    {
        return view('plz', ['id' => $id]);
    }
    public function makeProcess($id)
    {
        $deal = Deal::findOrFail($id);
        $deal->status = 'Inprocess';
        $deal->save();
        return redirect()->route('dashboard');
    }

    public function makeComplete($id)
    {
        $deal = Deal::findOrFail($id);
        $deal->status = 'Completed';
        $deal->save();
        return redirect()->route('dashboard');
    }

    public function makeCancle($id)
    {
        $deal = Deal::findOrFail($id);
        $deal->status = 'Cancel';
        $deal->save();
        return redirect()->route('dashboard');
    }
    public function dashboard()
    {
        $user = Auth::user();

        $counts = Deal::where('uID', $user->id)
            ->whereIn('status', ['New', 'confirm', 'waiting', 'Inprocess', 'Completed', 'Cancel'])
            ->selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->pluck('count', 'status');

        // Retrieve counts for each status
        $id = $counts['New'] ?? 0;
        $id2 = $counts['confirm'] ?? 0;
        $id3 = $counts['waiting'] ?? 0;
        $id4 = $counts['Inprocess'] ?? 0;
        $id5 = $counts['Completed'] ?? 0;
        $id6 = $counts['Cancel'] ?? 0; // Corrected from 'Cancle'

        // Add count for paymentStatus = 1
        $ps1 = Deal::where('uID', $user->id)
            ->where('paymentStatusAdmin', 1)
            ->count();
        $ps0 = Deal::where('uID', $user->id)
            ->where('paymentStatusAdmin', 0)
            ->count();

        $gfb = Gfeedback::where('uID', $user->id)->count();
        return view('dashboard', compact('id', 'id2', 'id3', 'id4', 'id5', 'id6', 'ps1', 'ps0', 'gfb'));
    }


    // public function DealUser($id){
    //     $deal = Deal::find($id);
    //     if (!$deal) {
    //         return response()->json(['error' => 'Deal not found'], 404);
    //     }
    //     return view('GDeal.slip', ['deal' => $deal]);
    // }

    public function DealUser($id)
    { {
            try {
                // Fetch deal data
                $deal = Deal::find($id);

                if (!$deal) {
                    return response()->json(['error' => 'Deal not found'], 404);
                }

                // instantiate and use the dompdf class
                $dompdf = new Dompdf();

                // (Optional) Setup options
                $options = new Options();
                $options->set('isHtml5ParserEnabled', true);
                $options->set('isPhpEnabled', true);

                $dompdf->setOptions($options);

                // Load the HTML view with deal data
                $html = view('GDeal.slip', ['deal' => $deal])->render();

                $dompdf->loadHtml($html);

                // (Optional) Setup the paper size and orientation
                $dompdf->setPaper('A4', 'landscape');

                // Render the HTML as PDF
                $dompdf->render();

                // Output the generated PDF to Browser
                $dompdf->stream('demo.pdf', ['Attachment' => false]);
            } catch (\Exception $e) {
                dd($e->getMessage()); // Output any error messages
            }
        }
    }

    // ==========================================================Guide End========================================

    public function moomal()
    {
        // $items = Deal::all();
        $items = 10;
        return view('admin.moomal', ['items' => $items]);
        
    }


    public function AllDealAdmin()
{
    // Fetch all deals with their corresponding users
    $items = Deal::with('user')->orderBy('created_at', 'desc')->get();

    return view('admin.AllDealAdmin', ['items' => $items]);
}


public function NewDealAdmin()
{
    // Fetch deals where status is 'New' and display in descending order
    $items = Deal::with('user')
        ->where('status', 'New')
        ->orderBy('created_at', 'desc')
        ->paginate(10);

    return view('admin.NewDealAdmin', ['items' => $items]);
}

public function InprocessDealAdmin()
{
    // Fetch deals where status is 'New' and display in descending order
    $items = Deal::with('user')
        ->where('status', 'Inprocess')
        ->orderBy('created_at', 'desc')
        ->paginate(10);

    return view('admin.InprocessDealAdmin', ['items' => $items]);
}

public function CompletedDealAdmin()
{
    // Fetch deals where status is 'New' and display in descending order
    $items = Deal::with('user')
        ->where('status', 'Completed')
        ->orderBy('created_at', 'desc')
        ->paginate(10);
    return view('admin.CompletedDealAdmin', ['items' => $items]);
}

public function CancelDealAdmin()
{
    // Fetch deals where status is 'New' and display in descending order
    $items = Deal::with('user')
        ->where('status', 'Cancel')
        ->orderBy('created_at', 'desc')
        ->paginate(10);

    return view('admin.CancelDealAdmin', ['items' => $items]);
}

public function ConfirmDealAdmin()
{
    // Fetch deals where status is 'New' and display in descending order
    $items = Deal::with('user')
        ->where('status', 'Confirm')
        ->orderBy('created_at', 'desc')
        ->paginate(10);

    return view('admin.ConfirmDealAdmin', ['items' => $items]);
}

public function NotConfirmDealAdmin()
{
    // Fetch deals where status is 'New' and display in descending order
    $items = Deal::with('user')
        ->where('status', 'waiting')
        ->orderBy('created_at', 'desc')
        ->paginate(10);

    return view('admin.NotConfirmDealAdmin', ['items' => $items]);
}



public function PaymentDoneDealAdmin()
{
    $items = DB::table('deals')
        ->where('deals.status', 'Completed')
        ->where('deals.paymentStatusAdmin', 1)
        ->join('users', 'deals.uID', '=', 'users.id')
        ->select('deals.id','deals.invoice','deals.status','deals.img','deals.paymentStatusAdmin', 'users.name', 'users.username','users.pno', 'users.email')
        ->paginate(10);

    return view('admin.PaymentDoneDealAdmin', ['items' => $items]);
}



public function PayableDealAdmin()
{
    $items = DB::table('deals')
        ->where('deals.status', 'Completed')
        ->where('deals.paymentStatusAdmin', 0)
        ->leftJoin('users', 'deals.uID', '=', 'users.id')
   
        ->select('deals.id','deals.invoice','deals.total','deals.yours','deals.comission','deals.status','deals.img','deals.paymentStatusAdmin', 'users.name','users.fullDay','users.halfDay', 'users.username','users.pno', 'users.email')
        ->paginate(10);
    return view('admin.PayableDealAdmin', ['items' => $items]);
}



// public function paybyID($id){
//     $d = Deal::find($id);
//     return view('admin.pay',['data'=>$d]);
// }

public function paybyID($id)
{
    // Fetch data from Deal and userInfo tables using join
    $data = Deal::join('paymentinfos', 'deals.uID', '=', 'paymentinfos.uID')
        ->where('deals.id', $id)
        ->select('deals.id', 'deals.uID', 'deals.yours', 'deals.fil', 'paymentinfos.appname', 'paymentinfos.accountname', 'paymentinfos.accountnumber', 'paymentinfos.paymentmethod', 'paymentinfos.accountlimit')
        ->first();
// return $data;
    return view('admin.pay', ['data' => $data]);
}

public function pay(Request $req)
{
    $id = $req->input('id');
    $d = Deal::find($id);

    if (!$d) {
        return redirect()->back()->with('error', 'Record not found');
    }

    if ($req->hasFile('img')) {
        $this->validate($req, [
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $img = $req->file('img');
        $imageName = time() . '.' . $img->getClientOriginalExtension();
        $img->move(public_path('/Products'), $imageName);
        $d->img = $imageName;
    }

    // You may want to consider checking if the paymentStatusAdmin is not already set to 1 before updating it.
    // This prevents unnecessary database queries and updates.
    if ($d->paymentStatusAdmin != 1) {
        $d->paymentStatusAdmin = 1;
        $d->save();
    }

    return redirect('admin/PayableDealAdmin');
    // return $id;
}



}

