<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('site.home.index');
});
Route::get('/home', function () {
    return view('site.home.index');
});

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'] );
Route::get('blog/{blog}', [App\Http\Controllers\BlogController::class, 'detail'] )->name('blog.detail');

Route::get('/aboutme', function () {
    return view('site.aboutme.index');
})->name('aboutme');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//------------------------------------------------------------------------------
//Admin routes

Route::get('/admin',  [App\Http\Controllers\admin\AdminController::class, 'index'] );


Route::get('/admin/emails', [App\Http\Controllers\admin\AdminController::class, 'emails'] );
//End admin routes
//------------------------------------------------------------------------------


//------------------------------------------------------------------------------
//Email routes
Route::post('/emails/send',  [App\Http\Controllers\MessagesController::class, 'sendMessage'] )->name('emails.send');
//End email routes
//------------------------------------------------------------------------------