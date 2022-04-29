    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

      <h2 class="sent-notification"></h2>

        <div class="section-title">
          <h2>Contact</h2>
          <p>
          Have questions about background screening? Our entire team receives 
          specialized training regularly to ensure you're receiving the best
           information possible. From basic questions to complex compliance inquiries, we're here to help!
          </p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" 
          
          src="https://www.google.com/maps/embed/v1/search?q=1977%20Commonwealth%20Avenue%2C%20Quezon%20City%2C%20Metro%20Manila%2C%20Philippines&key=AIzaSyAUfOBl8f7KyfP4NmevKhXGS3ZJT1wLzlY" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>1977 Commonwealth Avenue Brgy Holy Spirit</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>piggywings.ph@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>0966 493 8055</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form id="myForm" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" id="body" name="body" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="text-center"><button class="btn btn-success" onclick="sendEmail()" value="Send an Email">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script type="text/javascript">
      function sendEmail(){
        var name = $("#name");
        var email = $("#email");
        var subject = $("#subject");
        var body = $("#body");

        if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)){
          $.ajax({
            url: 'sendEmail.php',
            method: 'POST',
            dataType: 'json',
            data:{
              name: name.val(),
              email: email.val(),
              subject: subject.val(),
              body: body.val()
            },
            success: function(response){
              $('#myForm')[0].reset();
              $('.sent-notification').text("Message has been sent successfully!");

            }    
          });
        }
      }
      function isNotEmpty(caller){
        if(caller.val() ==""){
          caller.css('border','1px solid red');
          return false;
        }else{
          caller.css('border','');
          return true;
        }
      }
    </script>