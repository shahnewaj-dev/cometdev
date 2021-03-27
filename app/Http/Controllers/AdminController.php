<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function ShowLogin(){
        return view('admin.login');
    }

    public function ShowRegister(){
        return view('admin.register');
    }
    public function ShowDashBoard(){
        return view('admin.dashboard');
    }
}
