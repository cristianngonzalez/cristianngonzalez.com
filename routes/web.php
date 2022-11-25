<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('site.home.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
