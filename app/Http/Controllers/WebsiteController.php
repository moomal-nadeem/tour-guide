<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class WebsiteController extends Controller
{
    public function index()
    {
        $data = ['name' => "moomal", 'data' => "hello Moomal"];
        $user = ['to' => 'moomalnadeem09@gmail.com'];
    
        Mail::send('mail', $data, function($msg) use ($user) {
            $msg->to($user['to']);
            $msg->subject("Hello Moomal");
            $msg->attach(public_path('favicon3.png'), [
                'as' => 'favicon3.png',
                'mime' => 'image/png',
            ]);
        });
    }
}
