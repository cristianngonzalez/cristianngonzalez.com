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


    public function create(Request $req){

        $blog = new Blog;
 
        $blog->title = $req->input('title');
        $blog->article = $req->input('article');
        $blog->picture = 'Hola' /*$req->input('picture')*/;
        $blog->video = $req->input('video');

        $blog->save();

        //Return with te info of the new blog added
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
