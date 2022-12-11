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

Route::get('/contact', function () { return view('site.contact.index');})->name('contact');
Route::post('/contact/message', [App\Http\Controllers\MessagesController::class, 'contactMessage'] )->name('contact.message');

Auth::routes();//Default routes of laravel auth
Route::get('/inicio', function () {
    return view('site.user.login');
})->name('inicio');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/inicio', function () {
    return view('site.user.login');
})->name('inicio');

//------------------------------------------------------------------------------
//Admin routes

Route::get('/admin',  [App\Http\Controllers\admin\AdminController::class, 'blogs'] );
Route::get('/admin/blogs',  [App\Http\Controllers\admin\AdminController::class, 'blogs'] )->name('admin.blogs');
Route::get('/admin/blogs/new',  function(){ return view('admin.blog.new');} )->name('admin.blogs.new');
Route::post('/admin/blogs/create',  [App\Http\Controllers\BlogController::class, 'create']  )->name('admin.blogs.create');
Route::post('/admin/blogs/delete',  [App\Http\Controllers\BlogController::class, 'delete']  )->name('admin.blogs.delete');
Route::get('/admin/blogs/edit',  [App\Http\Controllers\BlogController::class, 'edit'] )->name('admin.blogs.edit');
Route::post('/admin/blogs/update',  [App\Http\Controllers\BlogController::class, 'update']   )->name('admin.blogs.update');

Route::get('/admin/emails', [App\Http\Controllers\admin\AdminController::class, 'emails'] );

Route::get('/admin/messages' , [App\Http\Controllers\admin\AdminController::class, 'messages'] )->name('admin.messages');
Route::get('/admin/messages/open/{message}' , [App\Http\Controllers\MessagesController::class, 'openMessage']  )->name('admin.messages.detail');

Route::get('/admin/users',  [App\Http\Controllers\admin\AdminController::class, 'users'] )->name('admin.users');
//End admin routes
//------------------------------------------------------------------------------


//------------------------------------------------------------------------------
//Email routes
Route::post('/emails/send',  [App\Http\Controllers\MessagesController::class, 'sendMessage'] )->name('emails.send');
//End email routes
//------------------------------------------------------------------------------