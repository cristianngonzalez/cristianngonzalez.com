<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller{
    //
    public function index(){

        $blogs = Blog::all();


        return view('site.blog.index' , compact('blogs') );
    }


    public function detail(Blog $blog){
        return view('site.blog.detail', compact('blog'));
    }

}
