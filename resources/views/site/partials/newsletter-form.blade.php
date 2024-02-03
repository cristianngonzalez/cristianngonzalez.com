<!--Newsletter form-->
<div class="container-fluid bg-warning">
    <div class="row justify-content-center">
        <div class="col-md-9 mt-4 mb-4 p-4 rounded-5">
            <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
            <form action="">
                <div class="mb-3">
                    
                    <form action="{{route('subscription.create')}}" method="POST" accept-charset="utf-8" class="form-submit" >
                        @csrf
                        @method('POST')
                        <div class="input-group mb-3">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="emailHelp">
                          <button type="submit" name="submit" id="submit" class="btn btn-primary" id="button-addon2">Subscribe</button> 
                        </div>
                    </form>
                    

                    <div id="emailHelp" class="form-text">We will never share your email with anyone else.</div>

                    
                </div>
            </form>
        </div>
    </div>
</div>
<!--End Newsletter form-->


@if(isset($subscription))
<script>
    setTimeout(() => {
        swal(`Thank you!`, "You are subscribe now!", "success");
    }, 2000);
</script>
@endif