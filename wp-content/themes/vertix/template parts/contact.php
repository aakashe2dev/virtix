<?php
//Template Name: Contact
get_header(); ?>
    <main>

      <div class="contact-form-area pt-100">
        <img class="bg1" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/bg1.png" alt="">
        <div class="container">
           <div class="row pt-45">
              <div class="col-lg-6">
                 <div class="contact-info mr-20">
                    <?php the_content(); ?>
                    <ul>
                        <li>
                            <div class="content">
                                <i class="fa-solid fa-location-dot"></i>
                               <h5>Address</h5>
                               <span><?php the_field('address', 'option') ?></span>
                            </div>
                        </li>
                       <li>
                          <div class="content">
                            <i class="fa-solid fa-envelope"></i>
                             <h5>Email  Address</h5>
                             <a href="mailto:<?php the_field('email_address', 'option') ?>"><?php the_field('email_address', 'option') ?></span></a>
                          </div>
                       </li>
                       <li>
                        <div class="content">
                            <i class="fa-solid fa-phone"></i>
                           <h5>Phone Number</h5>
                           <a href="tel:963 563 8526"><?php the_field('phone_number', 'option') ?></a>
                        </div>
                     </li>
                    </ul>
                 </div>
              </div>
              <div class="col-lg-6">
                <div class="contact-form form-for-contact">
                    <div class="form-heading">
                        <h4>Send Us A Message</h4>
                    </div>
                    <?php echo do_shortcode('[hf_form slug="contact-form"]'); ?>
                   <!-- <form id="contactForm" novalidate="true"> -->
                      <!-- <div class="row">
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
                      </div> -->
                   <!-- </form> -->
                </div>
             </div>
           </div>
        </div>
     </div>

   </main>


   <?php get_footer("1"); ?>