<?php

namespace App\Http\Controllers\Admin;
use App\Models\Chartacc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class ChartaccController extends Controller
{
    //

    public function createChartAcc(Request $req){
       
        $d = new Chartacc;
        $d->ChartName = $req->input('ChartName');
        $d->Type = $req->input('Type');
        $d->Status = $req->input('Status');
        $d->Trid = $req->input('Trid');
        $d->save();
        return View::make('admin.accounts');
        // return $req->input();
    }
    public function showChartName()
{
    $chartData = Chartacc::select('id', 'ChartName')->get();
    // return $chartData;
    return view('admin.GroupReg', compact('chartData'));
}
}
