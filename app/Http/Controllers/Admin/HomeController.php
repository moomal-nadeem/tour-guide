<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; // Add this "use" statement
use App\Models\Deal;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all deals with counts
        $counts = Deal::whereIn('status', ['New', 'Inprocess', 'waiting', 'Completed', 'Cancel', 'confirm'])
            ->selectRaw('status, COUNT(*) as count')
            ->groupBy('status')
            ->pluck('count', 'status');
    
            $counts2 = Deal::where('status', 'Completed')
            ->whereIn('paymentStatusAdmin', ['0', '1'])
            ->selectRaw('paymentStatusAdmin, COUNT(*) as count')
            ->groupBy('paymentStatusAdmin')
            ->pluck('count', 'paymentStatusAdmin');
        // Retrieve counts for each status
        $newCount = $counts['New'] ?? 0;
        $inprocessCount = $counts['Inprocess'] ?? 0;
        $waitingCount = $counts['waiting'] ?? 0;
        $completedCount = $counts['Completed'] ?? 0;
        $cancelCount = $counts['Cancel'] ?? 0; // Corrected the variable name to $cancelCount
        $confirmCount = $counts['confirm'] ?? 0;
    
        $pay = $counts2['1'] ?? 0; // Corrected to use $counts2 for 'paymentStatusAdmin' count
        $notPay = $counts2['0'] ?? 0; // Corrected variable name to $notPay
    
        return view('admin.dashboard', compact('newCount','cancelCount' ,'inprocessCount', 'waitingCount', 'completedCount', 'cancelCount', 'confirmCount', 'pay', 'notPay'));
    }
    
}
