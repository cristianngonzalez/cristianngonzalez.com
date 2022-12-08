@extends('admin.index')
@section('title', 'Home ')

@section('content')

{{dd($blog)}}

<div class="h-100 p-4">
    <p class="h1">Edit Blog</p>


    <form class="grid" action="{{route('admin.blogs.create')}}" method="POST">
        @csrf
        @method('POST')

        <div class="row mb-4">
            <div class="cell-md-12">
                <label for="title" class="w-100">Title</label>
                <input class="w-100" type="text" name="title" placeholder="Title" value="{{$blog->title}}" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="cell-md-6">
                <label for="video" class="w-100" value="{{$blog->video}}">Video</label>
                <input class="w-100" type="text" name="video" required>
            </div>
            <div class="cell-md-6">
                <label for="picture" class="w-100">Picture</label>
                <input class="w-100" type="file" name="picture">
            </div>
        </div>
        <div class="row mb-4">
            <div class="cell-12">
                <label for="title" class="w-100">Article</label>
                <textarea class="w-100" name="article" id="" cols="30" rows="10" value="{{$blog->article}}" required></textarea>
            </div>
        </div>

        <div class="row">
            <input type="submit" value="Create">
        </div>
        
    </form>

</div>

@endsection