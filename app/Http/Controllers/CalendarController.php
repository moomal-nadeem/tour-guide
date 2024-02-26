<?php

namespace App\Http\Controllers;
use App\Models\Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CalendarController extends Controller
{
    //

    public function calendar(Request $req) 
    {
    $d = new Calendar();
    $d->uID = $req->id;
    $d->dated = $req->input('dated');
    $d->save();
    return redirect('calendar');
    // return "hello";
    }


    public function dateList()
    {
        $user = Auth::user();
        $items = Calendar::where('uID', $user->id)->get(); // Retrieve the data and convert it to a collection
        $disabledDates = $items->map(function ($item) {
            return [
                'from' => $item->dated, // Format the date as needed
                'to' => $item->dated, // Use the same date for 'from' and 'to'
            ];
        })->toArray();
        // return ['disabledDates' => $disabledDates];
        return view('calendar', ['disabledDates' => $disabledDates]);
    }




    public function dateListGuide()
    {
        $user = Auth::user();
        $items = Calendar::where('uID', $user->id)->get(); // Retrieve the data and convert it to a collection
        $disabledDates = $items->map(function ($item) {
            return [
                'from' => $item->dated, // Format the date as needed
                'to' => $item->dated, // Use the same date for 'from' and 'to'
            ];
        })->toArray();
    
        return view('guides', ['disabledDates' => $disabledDates]);
    }
}
