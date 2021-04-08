<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//frontend
Route::get('blog',[App\Http\Controllers\PostShowController::class,'postShow'])->name('post.show');

//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('test-mail','App\Http\Controllers\TestMailController@sendMail')->name('mail.send');


Route::get('admin/login','App\Http\Controllers\AdminController@ShowLogin')->name('show.login');
Route::get('admin/register','App\Http\Controllers\AdminController@ShowRegister')->name('show.register');
Route::get('admin/dashboard','App\Http\Controllers\AdminController@ShowDashBoard')->name('show.dashboard');

Route::post('admin/login','App\Http\Controllers\Auth\LoginController@login')->name('admin.login');
Route::post('admin/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('admin.logout');
Route::post('admin/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('admin.register');

//category route

Route::get('admin/category', [App\Http\Controllers\CategoryController::class, 'categoryShow'])->name('category.post');
Route::post('category/store', [App\Http\Controllers\CategoryController::class, 'categoryStore'])->name('category.store');
Route::get('category/show', [App\Http\Controllers\CategoryController::class, 'categoryAllShow'])->name('category.show');
Route::get('category/status/active/{id}', [App\Http\Controllers\CategoryController::class, 'categoryActiveStatus'])->name('category.status.active');
Route::get('category/status/inactive/{id}', [App\Http\Controllers\CategoryController::class, 'categoryInactiveStatus'])->name('category.status.inactive');
Route::get('category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'categoryDelete'])->name('category.delete');
Route::get('category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'categoryEdit'])->name('category.edit');
Route::post('category/update', [App\Http\Controllers\CategoryController::class, 'categoryUpdate'])->name('category.update');


//tag route

Route::get('tag', [App\Http\Controllers\TagController::class, 'index'])->name('tag.index');
Route::post('tag/store', [App\Http\Controllers\TagController::class, 'store'])->name('tag.store');
Route::get('tag/edit/{id}', [App\Http\Controllers\TagController::class, 'edit'])->name('tag.edit');
Route::post('tag/update/{id}', [App\Http\Controllers\TagController::class, 'update'])->name('tag.update');
Route::get('tag/delete/{id}', [App\Http\Controllers\TagController::class, 'delete'])->name('tag.delete');

//post Route
Route::get('admin/post', [App\Http\Controllers\PostController::class, 'postShow'])->name('admin.post');
Route::get('admin/create', [App\Http\Controllers\PostController::class, 'postCreate'])->name('admin.create');
Route::post('post/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('post/trash', [App\Http\Controllers\PostController::class, 'postTrash'])->name('post.trash');
Route::get('post/trash/update/{id}', [App\Http\Controllers\PostController::class, 'postTrashUpdate'])->name('post.trash.update');
Route::get('post/trash/delete/{id}', [App\Http\Controllers\PostController::class, 'postTrashDelete'])->name('post.trash.delete');


