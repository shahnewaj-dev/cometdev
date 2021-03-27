<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function sendMail(){
        $Mail_details = [
            'title'  => 'This is a test mail',
            'content' => '20% discount for every product',
            'cell' => '01779435375',
            'name' => 'sajib'
        ];
        Mail::to('sajib35375@gmail.com')->send(new TestMail($Mail_details));
    }
}
