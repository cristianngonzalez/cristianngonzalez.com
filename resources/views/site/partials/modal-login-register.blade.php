<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-login-register">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="modal-login-register" tabindex="-1" aria-labelledby="modal-login-register" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="container mt-4 mb-4">

                <div class="row">
                    <div class="col-6" id="btn-modal-register">
                        <h4 class="text-center">Register</h4>
                    </div>
                    <div class="col-6" id="btn-modal-login">
                        <h4 class="text-center">Login</h4>
                    </div>
                </div>

                <!--Register Form-------------------------------->
                <form id="create-item-1" class="form-container" action="./contact/contact-process.php" method="post" accept-charset="utf-8" novalidate="novalidate">
                    <div class="row mt-4">

                        
                        <div class="col-12 mt-3">
                            <input type="email" id="name" class="tb-my-input" name="name" tabindex="2" placeholder="Your Name" value="" aria-required="true" required="">                  
                        </div>

                        <div class="col-12 mt-3">
                            <input type="email" id="email" class="tb-my-input" name="email" tabindex="2" placeholder="Email Address" value="" aria-required="true" required="">                  
                        </div>
                        
                        <div class="col-12 mt-3">
                            <input type="password" id="name" class="tb-my-input" name="password" tabindex="1" placeholder="Password" value="" aria-required="true" required="">                    
                        </div>
                        <div class="col-12 mt-3">
                            <input type="password" id="name" class="tb-my-input" name="repeat-password" tabindex="1" placeholder="Confirm Password" value="" aria-required="true" required="">                    
                        </div>
                        
                        <div class="col-12 mt-3">
                            <button name="submit" type="submit" id="comment-reply" class="sc-button style letter style-2"><span>Register</span></button>
                        </div>

                    </div>
                </form>
                <!--End Register Form-------------------------------->

                <!--Login Form-------------------------------->
                <form id="create-item-1" class="form-container" action="./contact/contact-process.php" method="post" accept-charset="utf-8" novalidate="novalidate">
                    <div class="row mt-4">

                        
                        <div class="col-12">
                            <input type="email" id="email" class="tb-my-input" name="email" tabindex="2" placeholder="Email Address" value="" aria-required="true" required="">                  
                        </div>
                        <div class="col-12 mt-3">
                            <input type="password" id="name" class="tb-my-input" name="name" tabindex="1" placeholder="Password" value="" aria-required="true" required="">                    
                        </div>
                        <div class="col-12 mt-3">
                            <button name="submit" type="submit" id="comment-reply" class="sc-button style letter style-2"><span>Login</span> </button>
                        </div>

                    </div>
                </form>
                <!--End Login Form-------------------------------->

            </div>

        </div>
    </div>
  </div>


  <style>
    #modal-login-register .modal-content{
      background: var(--color-4);
    }
  </style>


<script>

    $('#btn-modal-login').click(() => {
        
    })

</script>