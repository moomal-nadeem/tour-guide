<?php

namespace App\Http\Controllers\Admin;
use App\Models\Groupreg;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class GroupregController extends Controller
{
    //

    public function createGroupReg(Request $req){
       
        $d = new Groupreg;
        $d->ChartID = $req->input('ChartID');
        $d->GroupName = $req->input('GroupName');
        $d->Status = $req->input('Status');
        $d->save();
        return View::make('admin.accounts');
        // return $req->input();
    }
}
