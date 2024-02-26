<?php

namespace App\Http\Controllers;
use Mail;
use App\Models\Deal;
class CmailController extends Controller
{
    public function ConfirmMail($id)
    {
    $deal = Deal::findOrFail($id);
    $userData = $deal->user;
    $deal->status = 'confirm';
    $deal->save();
        $data = [
            'deal' => $deal, 
            'userData'=> $userData
        ];
        $user = ['to' => 'getyourtourguideuae2023@gmail.com'];
        Mail::send('GDeal.ConfirmMail', $data, function($msg) use ($user) {
            $msg->to($user['to']);
            $msg->subject("Deal confirmation email");
        }
    
    );
    return redirect()->route('dashboard');
}
    

public function NotConfirmMail($id)
    {
    $deal = Deal::findOrFail($id);
    $userData = $deal->user;
 
        $deal->status = 'waiting';
        $deal->save();
        $data = [
            'deal' => $deal, 
            'userData'=> $userData
        ];

        $user = ['to' => 'getyourtourguideuae2023@gmail.com'];
        Mail::send('GDeal.NotConfirmMail', $data, function($msg) use ($user) {
            $msg->to($user['to']);
            $msg->subject("No deal confirmation email");
        }
         
    );
    
    return redirect()->route('dashboard');
}

    
    
}
