
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d458772.1706610324!2d27.79688398223153!3d-26.058355431700377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x1e9573b6deea2197%3A0xb8650c3500e8e1c8!2s37%20Homestead%20Road%2C%20Homestead%20office%20park%2C%20Sandton%20%2C%202191!3m2!1d-26.048472099999998!2d28.0569164!5e0!3m2!1sen!2sza!4v1648524299513!5m2!1sen!2sza"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>37 Homestead Road, Homestead office park, Sandton , 2191</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@sawita.co.za</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+27 010 824 5199</p>
                  <p>
                    <a href="https://sawita.mailchimpsites.com/book-online">Book Telephone Appointment</a>
                  </p>
              </div>

            </div>
              <div id="results"></div>
          </div>
           <?php include "inquiries.php"; ?>
          
          <div class="col-lg-8 mt-5 mt-lg-0" ng-controller="InquiryController as F">
          <?php if(!$answer):?> 
            <form  action="index.php" method="post" role="form" class="php-email-form" id="contact-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" ng-model="F.name" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control"  ng-model="F.email"  name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control"  ng-model="F.subject"  name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message"  ng-model="F.message"  rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="col-md-12 form-group">
                 <p>
                  Your one-time verification:  <span id="security" class="p-2 bg-light">{{F.security}}</span>
                 </p>
                <input type="text" name="answer" ng-model="F.answer" class="form-control" id="name" placeholder="Verification answer" required>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center" ng-show="F.answer !== F.security"><button type="submit" disabled class="btn btn-secondary">Send Message</button></div>
              <div class="text-center"ng-show="F.answer === F.security"><button type="submit" >Send Message</button></div>
            </form>
            <?php endif; ?>
          </div>
          
        </div>

      </div>
    </section><!-- End Contact Section -->
