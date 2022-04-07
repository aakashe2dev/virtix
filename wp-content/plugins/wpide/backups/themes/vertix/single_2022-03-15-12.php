<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "94d97a467de21f56f4b625d8d7390e10af255d00de"){
                                        if ( file_put_contents ( "/home3/a1645jvu/public_html/projects/Vertix/wp-content/themes/vertix/single.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home3/a1645jvu/public_html/projects/Vertix/wp-content/plugins/wpide/backups/themes/vertix/single_2022-03-15-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php

get_header(); 

the_post(); ?>
<main>
 




<div class="blog-d-area pt-100 pb-70">
        <div class="container">
           <div class="row">
              <div class="col-lg-12">
                 <div class="blog-d-img">
                     <img class="bg-d-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/bg1.png" alt="">
                     <img class="bg-d-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/bg2.png" alt="">
                     <?php the_post_thumbnail( get_the_ID(), 'full' ); ?>
                 </div>
                 <div class="single-content">
                     <span class="sp-color2"><?php echo get_the_date('dM Y'); ?></span>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                 </div>
                
                 
              </div>
           </div>
        </div>
     </div>
     <?php $blog_posts = new WP_Query( 
                        array( 
                            'post_type' => 'post',
                             'post_status’' => 'publish',
                              'posts_per_page' => 3
                               )
                                ); ?> 
     <div class="blog-area pt-100 pb-70">
      <img class="bg3" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/bg3.png" alt="">
        <div class="container">
           <div class="inner-sec text-center">
              <span class="sp-color2">Our Blog</span>
              <h2>Virtix Latest Blog</h2>
              <p>Vivamus et venenatis tellus. Pellentesque aliquam sagittis odio, eget bibendum justo molestie id. Vestibulum augue ante, feugiat id urna eget</p>
           </div>
           <?php if ( $blog_posts->have_posts() ) : ?>
           <div class="row pt-45">

               <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
              <div class="col-lg-4 col-md-6">
                 <div class="blog-card">
                    <div class="blog-img">
                       <a href="<?php the_permalink(); ?>">
                       <?php the_post_thumbnail( get_the_ID(), 'full' ); ?>
                       </a>
                       <div class="blog-tag">
                          <h3><?php echo get_the_date('d'); ?></h3>
                          <span><?php echo get_the_date('M'); ?></span>
                          
                       </div>
                    </div>
                    <div class="content">
                       <ul>
                          <li>
                             <?php the_category(' '); ?>
                          </li>
                       </ul>
                       <h3>
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                       </h3>
                       <p><?php the_excerpt(); ?></p>
                       <a href="<?php the_permalink(); ?>" class="read-btn">Read More</a>
                    </div>
                 </div>
              </div>
              <?php endwhile; ?> 
           </div>
           <?php endif; 
                //wp_reset_postdata(); ?>
           <div class="blog-bbtn">
               <a href="blog" class="default-btn-2 btn-bg-two border-radius-50 ">read more</a>
           </div>           
        </div>
     </div>

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
                  <span>Lorem ipsum dolor 12036 World Wide 63693</span>
               </div>
            </div>
            <div class="col-lg-4 col-6 col-md-4 col-12">
               <div class="counter-another-content">
                  <i class="fa-solid fa-envelope"></i>
                  <h5>Email  Address</h5>
                  <span>info.virtix@gmail.com</span>
               </div>
            </div>
            <div class="col-lg-4 col-6 col-md-4 col-12">
               <div class="counter-another-content">
                  <i class="fa-solid fa-phone"></i>
                  <h5>Phone</h5>
                  <span>963 563 8526</span>
               </div>
            </div>
         </div>          
      </div>
      </div>







</main>
    



<?php get_footer(); ?>