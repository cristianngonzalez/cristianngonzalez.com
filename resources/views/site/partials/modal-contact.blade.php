<!-- Button trigger modal -->

              
<!-- Modal -->
<div class="modal fade" id="contact-modal" tabindex="-1" aria-labelledby="contact-modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="container-fluid">


        <form id="create-item-1" class="form-container" action="./contact/contact-process.php" method="post" accept-charset="utf-8" novalidate="novalidate">
        
          <div class="row">
            <div class="col-12">
              <div class="sc-heading mt-4">
                  <h3>Send Me Message</h3>
              </div>
            </div>
            <div class="col-12">
              <input type="text" id="name" class="tb-my-input" name="name" tabindex="1" placeholder="Your Full Name" value="" aria-required="true" required="">                    
            </div>
            <div class="col-12 mt-3">
              <input type="email" id="email" class="tb-my-input" name="email" tabindex="2" placeholder="Email Address" value="" aria-required="true" required="">                  
            </div>
            <div class="col-12 mt-3">
              <textarea id="comment-message" name="message" tabindex="4" placeholder="Write Message" aria-required="true"></textarea>                      
            </div>
            <div class="col-12 mt-3">
              <button name="submit" type="submit" id="comment-reply" class="sc-button style letter style-2"><span>Send Message</span> </button>
            </div>

            <div class="col-12 mt-3 mb-4">
              <button type="button" id="comment-reply" class="sc-button style letter style-2" data-dismiss="modal"><span>Cancel</span> </button>
            </div>

          </div>

        </form>

      </div>
                    
    </div>
  </div>
</div>

<style>
  #contact-modal .modal-content{
    background: var(--color-4);
  }
</style>