@extends('layouts.site')
@section('title', 'Contact ')

@section('content')


<!--Show alert message sended successly-->
@if(isset($success))
    <script>
        setTimeout(() => {
            swal(`Thank you {{$name}}!`, "I will reply to your message shortly!", "success");
        }, 2000);
    </script>
@endif
<!--------------------------------------->

<style>
    .swal-button--confirm , 
    .swal-button--confirm:hover , 
    .swal-button--confirm:checked , 
    .swal-button--confirm:active , 
    .swal-button--confirm:focus{
        background: #6345ed;
        color: white;
    }
</style>

<section class="tf-section login-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <form action="{{route('contact.message')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-create-item-content">
                        <div class="form-create-item">
                            <div class="sc-heading">
                                <div class="col-12">
                                    <h3>Send Me Message</h3>
                                </div>
                            </div>
                            <form id="create-item-1" class="form-container" method="POST" action="{{ route('contact.message') }}">
                                @csrf
                                @method('POST')
                                <div class="col-12 mt-3">     
                                    <input id="name" type="text" placeholder="Name (Optional)" class="tb-my-input @error('email') is-invalid @enderror" name="name" aria-required="true" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                <div class="col-12 mt-3">     
                                    <input id="email" type="email" placeholder="Email" class="tb-my-input @error('email') is-invalid @enderror" name="email" aria-required="true" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                <div class="col-12 mt-3">     
                                    <input id="phone" type="text" placeholder="Phone (Optional)" class="tb-my-input @error('email') is-invalid @enderror" name="phone" aria-required="true" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                <div class="col-12 mt-3">     
                                    <textarea id="comment-message" name="message" placeholder="Write Message" aria-required="true" name="message"></textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="sc-button style letter style-2">Send</button>
                                </div>
                            </form>
                        </div>
                        <div class="form-background">
                            <img src="{{env('ASSETS_URL')}}assets/images/background/img-login.jpg" alt="">
                        </div>
                    </div>
                </form>

                
            </div>
        </div>
    </div>
</section>


@endsection