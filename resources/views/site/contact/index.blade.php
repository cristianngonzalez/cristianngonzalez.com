@extends('layouts.site')
@section('title', 'Contact ')

@section('content')


<div class="container-fluid">
    <div class="row mt-5 mb-5 justify-content-center">
        <div class="col-md-6 p-4 rounded-5 bg-warning">
            <div class="sc-heading">
                <h1 class="text-center">@lang('site.send_me_a_message')</h1>
            </div>

            <form action="{{route('contact.message')}}" method="POST">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <input id="name" type="text" placeholder="@lang('forms.name') (@lang('forms.optional'))" class="form-control @error('email') is-invalid @enderror" name="name" aria-required="true" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                <div class="mb-3">
                    <input id="email" type="email" placeholder="@lang('forms.email')" class="form-control @error('email') is-invalid @enderror" name="email" aria-required="true" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                <div class="mb-3">
                    <input id="phone" type="text" placeholder="@lang('forms.phone') (@lang('forms.optional'))" class="form-control @error('email') is-invalid @enderror" name="phone" aria-required="true" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                <div class="mb-3">
                    <textarea id="comment-message" class="form-control" name="message" placeholder="@lang('forms.write_your_message')" aria-required="true" name="message"></textarea>
                </div>
    
                
                <button type="submit" class="btn btn-primary">Send</button>
            </form>

        </div>
    </div>
</div>



<!--Show alert message sended successly-->
@if(isset($success))
    <script>
        setTimeout(() => {
            swal(`Thank you {{$name}}!`, "I will reply to your message shortly!", "success");
        }, 2000);
    </script>
@endif
<!--------------------------------------->



<form>
        

</form>



@endsection