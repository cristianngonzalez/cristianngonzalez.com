<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;

class AdminController extends Controller{
    //

    public function blogs(){
        $blogs = Blog::all();
        return view('admin.blog.index' , compact('blogs') );
    }


    public function emails(){
        return view('admin.emails.index');
    }

}
