<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Models\Blog;


class BlogController extends Controller{
    
    public function index(){
        $blogs = Blog::all();

        return view('site.blog.index' , compact('blogs') );
    }


    public function detail(Blog $blog){
        return view('site.blog.detail', compact('blog'));
    }


    public function set(Request $req){
        $file = $req->file('picture-file');
        $file_name = Str::uuid()->toString();

        $file->storeAs('' , $file_name . "." . $file->extension() , 'public');

        Blog::create([
            'title' => $req->input('title') ,
            'article' => $req->input('article') ,
            'picture' => $file_name . "." . $file->extension() ,
            'video' => $req->input('video'),
            'published' => true
        ]);

        return view('admin.blog.new' , array('newblog' => $req->input('title')) );
    }

    public function delete(Request $req){

        $id = $req->input('id');
        $blog=Blog::where('id',$id)->delete();

        return redirect()->to('/admin/blogs');
    }

    public function edit(Blog $blog){
        return view('admin.blog.edit' , compact('blog'));
    }

    public function update(Request $req){
        
        echo('Update');
    }

}
