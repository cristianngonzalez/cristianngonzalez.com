<!--Newsletter form-->
<div class="container-fluid bg-warning">
    <div class="row justify-content-center">
        <div class="col-md-9 mt-4 mb-4 p-4 rounded-5">
            <h2>@lang('forms.subscribe_to_our_newsletter')</h2>
            
            <div class="mb-3">
                    
                <form action="{{route('subscription.create')}}" method="POST" accept-charset="utf-8" class="form-submit" >
                    @csrf
                    @method('POST')
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="@lang('forms.enter_your_email')" aria-label="Enter your email" aria-describedby="emailHelp">
                        <!--Idioma del receptor del correo-->
                        <input type="hidden" name="lang" @if(isset($_GET['lang'])) value="{{$_GET['lang']}}" @else value="en" @endif>
                        <button type="submit" name="submit" id="submit" class="btn btn-primary" id="button-addon2">@lang('forms.subscribe')</button> 
                    </div>
                </form>
                    

                <div id="emailHelp" class="form-text">@lang('forms.we_will_not_share_your_email_with_anyone')</div>

               
   


            </div>
          
        </div>
    </div>
</div>
<!--End Newsletter form-->


@if(session('subscription') == 'success')
<script>
    setTimeout(() => {
        swal(`Thank you!`, "You are subscribe now!", "success");
    }, 2000);
</script>
@elseif(session('subscription') == 'error')
<script>
    setTimeout(() => {
        swal(`Oops!`, "Something went wrong!", "error");
    }, 2000);
</script>
@endif