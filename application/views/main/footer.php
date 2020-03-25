 <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Contact us</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>

                    <div class="col-md-8 col-sm-8">
                        
                         <!-- CONTACT FORM HERE -->
                         <form id="contact-form" role="form" action="<?= BASE_URL;?>contact_us" method="post">
                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" placeholder="First Name" id="cf-name" name="cf_fname" required="">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" placeholder="Last Name" id="cf-email" name="cf_lname" required="">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="tel" class="form-control" placeholder="Your Phone" id="cf-number" name="cf_number" required="">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" placeholder="Your Email" id="cf-name" name="cf_email" required="">
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="6" placeholder="Your requirements" id="cf-message" name="cf_message" required=""></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="submit" value="Send Message">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="google-map">
	<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" allowfullscreen></iframe>
                         </div>
                    </div>

               </div>
          </div>
     </section>

<!-- FOOTER -->
     <footer data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-5 col-sm-12">
                         <div class="footer-thumb footer-info"> 
                              <h2>Knifemaster Gaming</h2>
                              <p>If you need any type of support or you want to ask something please feel free to contact us through our contact us form or join our <a href="https://discord.gg/2KqyQXV" target="_blank" style="color:red">discord server</a>.  Join us and support us.</p>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4"> 
                         <div class="footer-thumb" id="support_us"> 
                              <h2>Company</h2>
                              <ul class="footer-link">
                                   <li><a href="#">About Us</a></li>
                                   <li><a href="#">Join our team</a></li>
                                   <li><a href="https://www.paypal.me/kartik1005" target="_blank">Donate Us</a></li>
                                   <li><a href="https://www.paypal.me/kartik1005" target="_blank">Become a supporter</a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h2>Services</h2>
                              <ul class="footer-link">
                                   <li><a href="#">Practice Customs</a></li>
                                   <li><a href="#">Paid Customs</a></li>
                                   <li><a href="#">Elite Customs</a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h2>Find us</h2>
							  <h4>Address Line 1</h4>
                              <p>Shimla Bypass Road, Mehuwala, <br>  Dehradun, Uttrakhand 248001</p>
							  
							  <h4>Address Line 2</h4>
                              <p>Garh Road Meerut Near LLRM Medical College, <br>  Meerut, Uttar Pradesh 250004</p>
                         </div>
                    </div>                    

                    <div class="col-md-12 col-sm-12">
                         <div class="footer-bottom">
                              <div class="col-md-6 col-sm-5">
                                   <div class="copyright-text"> 
                                        <p>Copyright &copy; 2020 Knifemaster Gaming</p>
                                   </div>
                              </div>
                              <div class="col-md-6 col-sm-7">
                                   <div class="phone-contact"> 
                                        <p><span> Email US: support@knifemastergaming.in</span></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="https://www.youtube.com/channel/UCNRW3JjfEmGW0W9_R1WnElQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
										<li><a href="https://twitter.com/KnifemasterG" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.instagram.com/knife_master_gaming/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- MODAL -->
     <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <?php
			include('login_signup.php');
		?>
     </section>


     <!-- SCRIPTS -->
     <script src="<?= BASE_URL;?>js/jquery.js"></script>
     <script src="<?= BASE_URL;?>js/bootstrap.min.js"></script>
     <script src="<?= BASE_URL;?>js/jquery.stellar.min.js"></script>
     <script src="<?= BASE_URL;?>js/jquery.magnific-popup.min.js"></script>
     <script src="<?= BASE_URL;?>js/smoothscroll.js"></script>
     <script src="<?= BASE_URL;?>js/custom.js"></script>

     

</body>
</html>