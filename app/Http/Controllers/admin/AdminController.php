<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller{
    //

    public function index(){
        return view('admin.blog.index');
    }


    public function emails(){
        return view('admin.emails.index');
    }

}
