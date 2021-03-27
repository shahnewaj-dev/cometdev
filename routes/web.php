<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('test-mail','App\Http\Controllers\TestMailController@sendMail')->name('mail.send');


Route::get('admin/login','App\Http\Controllers\AdminController@ShowLogin')->name('show.login');
Route::get('admin/register','App\Http\Controllers\AdminController@ShowRegister')->name('show.register');
Route::get('admin/dashboard','App\Http\Controllers\AdminController@ShowDashBoard')->name('show.dashboard');

Route::post('admin/login','App\Http\Controllers\Auth\LoginController@login')->name('admin.login');

