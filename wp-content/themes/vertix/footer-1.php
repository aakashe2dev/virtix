<footer class="footer-area footer-bg">
         <div class="container">
            <div class="footer-top pt-170 pb-70">
               <div class="row pb-100">
                  <div class="row f-row full-map">
                     <div class="col-lg-12">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1409800.1696549254!2d-1.546440034827425!3d12.578321163542055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebdbefaa7f581%3A0x4002774dc0c9bbb!2sPalais%20de%20Sport%2C%20Ouaga%202000%2C%20Ouagadougou%2C%20Burkina%20Faso!5e0!3m2!1sen!2sin!4v1649073102202!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-sm-6">
                     <div class="footer-widget">
                        <div class="footer-logo">
                           <a href="index.html">
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
                        <div class="newsletter-form">
                           <!--<form class="newsletter-form" data-toggle="validator" method="POST">-->
                           <!--   <input type="email" class="form-control" placeholder="Email" name="EMAIL" required autocomplete="off">-->
                           <!--   <button class="subscribe-btn" type="submit">-->
                           <!--   <i class='bx bx-paper-plane'></i>-->
                           <!--   </button>-->
                           <!--   <div id="validator-newsletter" class="form-result"></div>-->
                           <!--</form>-->
                           <?php echo do_shortcode('[hf_form slug="newsletter"]'); ?>
                           </div>
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
      <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/assets/js/owl.carousel.min.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.magnific-popup.min.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.nice-select.min.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/assets/js/wow.min.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/assets/js/meanmenu.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.ajaxchimp.min.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/assets/js/form-validator.min.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/assets/js/contact-form-script.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/assets/js/custom.js"></script>
       <script>
         $(document).ready(function (){
            $("#top-menu > li").toggleClass("nav-item");
            $("#top-menu > li > a").toggleClass("nav-link");
         })
      </script>
   </body>
   <?php wp_footer(); ?>
</html>