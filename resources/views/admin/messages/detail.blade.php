@extends('admin.layouts.admin')
@section('title', 'Blogs ')

@section('content')


<div class="h-100 p-4">
    <p class="h1">Message</p>

    <p class="h5">{{$message->name}}</p>
    <p class="h5">{{$message->phone}}</p>
    <p class="h5">{{$message->email}}</p>
    <p>{{$message->message}}</p>

</div>


@endsection