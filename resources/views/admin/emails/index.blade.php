@extends('admin.layouts.admin')
@section('title', 'Emails')

@section('content')

<div class="container">
    <div class="row mt-4">
        <div class="col-12">
            <h1>Send new email</h1>
        </div>
    </div>





    <form action="" class="row" method="POST" action="{{route('emails.send')}}">
        @csrf @method('POST')
        <div class="col-12">
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="name">
                <label for="name">Name</label>
            </div>
        </div>
        <div class="col-12 mt-2">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email">
                <label for="email">Receiver</label>
            </div>
        </div>
        <div class="col-12 mt-2">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="message" name="message" style="height: 100px"></textarea>
                <label for="message">Message</label>
            </div>
        </div>
        <div class="col-12 mt-2">
            <input type="submit" class="btn btn-primary" value="Enviar">
        </div>
    </form>
        



</div>

@endsection