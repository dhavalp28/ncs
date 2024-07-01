<?php include "header.php"; ?>
<style>
.nice-select{
   width: 100%;
    margin-bottom: 20px;
    line-height:63px;
    height:63px;
}
.nice-select::after{
   right: 10px;
}
</style>
<main>

<!-- contact area start -->
<section class="tp-section-area p-relative z-index-1 tp-section-spacing">
   <div class="tp-section-bg include-bg" data-background="assets/img/contact/contact-bg.png"></div>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-xl-8">
            <div class="tp-section-wrapper-2 text-center">
               <span class="tp-section-subtitle-2 subtitle-mb-9">GET TO KNOW US</span>
               <h3 class="tp-section-title-2 font-70">Have a project in mind? Let’s talk.</h3>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- contact area end -->

<div class="contact__item-area contact__translate-2">
   <div class="container">
      <div class="row">
         <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="contact__item text-center mb-30 transition-3 white-bg">
               <div class="contact__icon">
                  <img src="assets/img/contact/icon/contact-icon-1.png" alt="">
               </div>
               <div class="contact__content">
                  <span class="contact-item-subtitle">Contact</span>
                  <p><a href="mailto:hi@novusha.com">hi@novusha.com</a></p>
                  <p><a href="tel:+919662370774">+91 96623 70774</a></p>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="contact__item text-center mb-30 transition-3 white-bg">
               <div class="contact__icon">
                  <img src="assets/img/contact/icon/contact-icon-3.png" alt="">
               </div>
               <div class="contact__content">
                  <span class="contact-item-subtitle">Location</span>
                  <p><a href="https://maps.app.goo.gl/xgdg5MeVfFfZ6Ufh9" target="_blank">A-306 Wall Street II, Opp. Orient Club, near Gujarat College, Ahmedabad, Gujarat 380006 | India</a></p>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="contact__item text-center mb-30 transition-3 white-bg">
               <div class="contact__icon">
                  <img src="assets/img/contact/icon/contact-icon-2.png" alt="">
               </div>
               <div class="contact__content">
                  <span class="contact-item-subtitle">Social Media</span>
                  <p>Follow on social media</p>
                  <div class="contact__social">
                     <a href="https://www.facebook.com/people/Next-Wavee/61558461765719/?sk=videos&video_upload_notif=1&notif_id=1713868974471891&notif_t=video_processed&ref=notif" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                     <a href="https://www.instagram.com/next_wavee/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                     <a href="https://twitter.com/next_wavee" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                     <a href="https://www.linkedin.com/company/next-wavee/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                     <a href="https://www.youtube.com/channel/UCxpSvKhzKcRa9kgOXb5Bi2w" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- contact form area start -->
<section class="contact__form-area pt-90">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="contact__form-2">
               <h3 class="contact__form-2-title">Schedule a Demo</h3>
               <form id="home-contact-form" action="#" method="POST">
                  <div class="row">
                     <div class="col-md-6">
                           <div class="contact__input-2">
                              <input name="name" type="text" placeholder="Enter your name*" required>
                              <div class="error-message" id="name-error"></div>
                              <input name="page" type="hidden" value="Contact Page" required>
                           </div>
                     </div>
                     <div class="col-md-6">
                           <div class="contact__input-2">
                              <input name="email" type="email" placeholder="Enter your email*" required>
                              <div class="error-message" id="email-error"></div>
                           </div>
                     </div>
                     <div class="col-md-6">
                           <div class="contact__input-2">
                              <input name="phone" type="text" placeholder="Mobile no*" required>
                              <div class="error-message" id="phone-error"></div>
                           </div>
                     </div>
                     <div class="col-md-6">
                           <div class="contact__input-2">
                              <input name="company" type="text" placeholder="Company">
                           </div>
                     </div>
                     
                     <div class="col-md-6">
                           <div class="contact__input-2">
                              <input name="lbl" placeholder="Team size" disabled type="text">
                           </div>
                     </div>

                     
                     <div class="col-md-6">
                           <div class="contact__input-2">
                              <select name="team_size">
                                 <option value="0-5">0-5</option>
                                 <option value="5-20">5-20</option>
                                 <option value="20-50">20-50</option>
                                 <option value="50+">50+</option>
                              </select>
                           </div>
                     </div>

                     <div class="col-md-12">
                           <div class="contact__input-2">
                              <textarea name="message" placeholder="Your message*" required></textarea>
                              <div class="error-message" id="message-error"></div>
                           </div>
                     </div>
                     <div class="col-md-12">
                           <div class="contact__agree d-flex align-items-start mb-25">
                              <input class="e-check-input" type="checkbox" id="e-agree" required>
                              <label class="e-check-label" for="e-agree">I am bound by the terms of the Service I accept Privacy Policy.</label>
                              <div class="error-message" id="agree-error"></div>
                           </div>
                     </div>
                     <div class="col-md-5">
                           <div class="contact__btn-2">
                              <button type="submit" class="tp-btn">Send Message</button>
                           </div>
                     </div>
                     <div class="col-md-7">
                           <div class="contact__form-call float-md-end">
                              <span>Call for Consultation</span>
                              <p><a href="tel:2236-384-870"><i class="fa-solid fa-phone-flip"></i> +2236 384 870</a></p>
                           </div>
                     </div>
                  </div>
               </form>
               <p class="ajax-response"></p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- contact form area end -->

<!-- contact location area start -->
<section class="contact__location-area pt-50">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.9876241674338!2d72.56557577482435!3d23.024226616267384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e845629340001%3A0x3d819a9a3515bf59!2sA%2C%20306%2C%20Wall%20Street%202%2C%20near%20Gujarat%20College%20Road%2C%20Ellisbridge%2C%20Ahmedabad%2C%20Gujarat%20380006!5e0!3m2!1sen!2sin!4v1716142943978!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
</section>
<!-- contact location area end -->

</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#home-contact-form').on('submit', function(e) {
        e.preventDefault();

        // Remove existing error messages
        $('.error-message').html('');

        var isValid = true;

        var name = $('input[name="name"]').val().trim();
        var email = $('input[name="email"]').val().trim();
        var phone = $('input[name="phone"]').val().trim();
        var message = $('textarea[name="message"]').val().trim();
        var team_size = $('select[name="team_size"]').val().trim();
        var agree = $('#e-agree').is(':checked');

        if (name.length < 2) {
            isValid = false;
            $('#name-error').html('Name must be at least 2 characters long.').css('color', 'red');
        }

        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            isValid = false;
            $('#email-error').html('Please enter a valid email address.').css('color', 'red');
        }

        if (phone.length < 10) {
            isValid = false;
            $('#phone-error').html('Phone number must be at least 10 characters long.').css('color', 'red');
        }

        if (message.length < 10) {
            isValid = false;
            $('#message-error').html('Message must be at least 10 characters long.').css('color', 'red');
        }

        if (!agree) {
            isValid = false;
            $('#agree-error').html('You must accept the terms and conditions.').css('color', 'red');
        }

        if (isValid) {
            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: 'process_form.php',
                data: formData,
                success: function(response) {
                  alert("Thank you for connecting with us. Our team will reach out to you soon.");
                  $('#home-contact-form')[0].reset(); 
                },
                error: function() {
                    $('.ajax-response').html('<p>An error has occurred</p>');
                }
            });
        }
    });
});
</script>
<?php include "footer.php"; ?>
