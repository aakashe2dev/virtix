<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "94d97a467de21f56f4b625d8d7390e106d49830446"){
                                        if ( file_put_contents ( "/home3/a1645jvu/public_html/projects/Vertix/wp-content/themes/vertix/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home3/a1645jvu/public_html/projects/Vertix/wp-content/plugins/wpide/backups/themes/vertix/footer_2022-03-22-05.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>
      <div class="contact-sec pt-100">
      <div class="container">
         <div class="inner-sec text-center">
            <span class="sp-color2">Contact Us</span>
            <h2>How can we help? We're available</h2>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias dolorum fuga.</p>
         </div>
         <div class="row pt-45">
            <div class="col-lg-4 col-6 col-md-4 col-12">
               <div class="counter-another-content">
                  <i class="fa-solid fa-location-dot"></i>
                  <h5>Address</h5>
                  <span><?php the_field('address', 'option') ?></span>
               </div>
            </div>
            <div class="col-lg-4 col-6 col-md-4 col-12">
               <div class="counter-another-content">
                  <i class="fa-solid fa-envelope"></i>
                  <h5>Email  Address</h5>
                  <span><?php the_field('email_address', 'option') ?></span>
               </div>
            </div>
            <div class="col-lg-4 col-6 col-md-4 col-12">
               <div class="counter-another-content">
                  <i class="fa-solid fa-phone"></i>
                  <h5>Phone</h5>
                  <span><?php the_field('phone_number', 'option') ?></span>
               </div>
            </div>
         </div>          
      </div>
      </div>
      
      

<footer class="footer-area footer-bg">
         <div class="container">
            <div class="footer-top pt-170 pb-70">
               <div class="row pb-100">
                  <!--<div class="row f-row">-->
                  <!--   <div class="col-lg-6">-->
                  <!--      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.279909073!2d-74.25987368715491!3d40.69767006458873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1646900442780!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
                  <!--   </div>-->
                     <div class="col-lg-6">
                        <div class="contact-form">
                        <?php echo do_shortcode('[hf_form slug="contact-form"]'); ?>
                           <!-- <form id="contactForm" novalidate="true">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <input type="text" name="name" id="name" class="form-control" required="" data-error="Please Enter Your Name" placeholder="Name">
                                       <div class="help-block with-errors"></div>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <input type="email" name="email" id="email" class="form-control" required="" data-error="Please Enter Your Email" placeholder="Email ID">
                                       <div class="help-block with-errors"></div>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <input type="text" name="phone_number" id="phone_number" required="" data-error="Please Enter Your number" class="form-control" placeholder="Phone No">
                                       <div class="help-block with-errors"></div>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <input type="text" name="msg_subject" id="msg_subject" class="form-control" required="" data-error="Please Enter Your Subject" placeholder="Company">
                                       <div class="help-block with-errors"></div>
                                    </div>
                                 </div>
                                 <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                       <textarea name="message" class="form-control" id="message" cols="30" rows="8" required="" data-error="Write your message" placeholder="Message"></textarea>
                                       <div class="help-block with-errors"></div>
                                    </div>
                                 </div>
                                 <div class="col-lg-12 col-md-12 text-center">
                                    <button type="submit" class="default-btn btn-bg-two border-radius-50 disabled" style="pointer-events: all; cursor: pointer;">
                                    SUBMIT <i class="bx bx-chevron-right"></i>
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                 </div>
                              </div>
                           </form> -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-sm-6">
                     <div class="footer-widget">
                        <div class="footer-logo">
                           <a href="<?php echo home_url();?>">
                           <img src="<?php the_field('footer_logo', 'option') ?>" alt="Images">
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-sm-6">
                     <div class="footer-widget pl-2">
                        <h3>Quick Links </h3>
                        <?php
                        wp_nav_menu(
                        array(
                        'theme_location' =>'footer-menu',
                        'menu_id' =>'footer-listm',
                        'container' => 'ul',
                        'menu_class' => 'footer-list'
                        )
                        );
                        ?>                        
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="footer-widget pl-2">
                        <h3>social Media</h3>
                        <ul class="footer-list">
                        <?php  
                        $face = get_field('facebook', 'option');
                        if($face):
                        ?>   
                        <li>
                              <a href="<?php echo $face; ?>" target="_blank">
                                 <i class="fa-brands fa-facebook-f"></i>
                              Facebook
                              </a>
                           </li>
                        <?php endif; ?>
                        <?php  
                        $insta = get_field('instagram', 'option');
                        if($insta):
                        ?>
                           <li>
                              <a href="<?php echo $insta; ?>" target="_blank">
                                 <i class="fa-brands fa-instagram"></i>
                              Instagram
                              </a>
                           </li>
                           <?php endif; ?>
                        <?php  
                        $twit = get_field('twitter', 'option');
                        if($twit):
                        ?>
                           <li>
                              <a href="<?php echo $twit; ?>" target="_blank">
                                 <i class="fa-brands fa-twitter"></i>
                              Twitter
                              </a>
                           </li>
                           <?php endif; ?>
                        <?php  
                        $linked = get_field('linkedin', 'option');
                        if($linked):
                        ?>
                           <li>
                              <a href="<?php echo $linked; ?>" target="_blank">
                                 <i class="fa-brands fa-linkedin-in"></i>
                              Linkedin
                              </a>
                           </li>
                           <?php endif; ?>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="footer-widget">
                        <h3>Our Newsletter</h3>
                        <p>Subscribe to get updates from virtix.</p>
                        <div class="newsletter-area">
                           <form class="newsletter-form" data-toggle="validator" method="POST">
                              <input type="email" class="form-control" placeholder="Email" name="EMAIL" required autocomplete="off">
                              <button class="subscribe-btn" type="submit">
                              <i class='bx bx-paper-plane'></i>
                              </button>
                              <div id="validator-newsletter" class="form-result"></div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copy-right-area">
               <div class="copy-right-text">
                  <p>© 2022 Virtix. All Rights Reserved.</p>
               </div>
            </div>
         </div>
      </footer>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.nice-select.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/meanmenu.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.ajaxchimp.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/form-validator.min.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/contact-form-script.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
      <script>
         $(document).ready(function (){
            $("#top-menu > li").toggleClass("nav-item");
            $("#top-menu > li > a").toggleClass("nav-link");
         })
      </script>
   </body>
   <?php wp_footer(); ?>
</html>