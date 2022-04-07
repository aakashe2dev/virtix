<?php get_header(); ?>
    <main>
      
    <div class="banner-five-area">
        <img class="bg1" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/bg1.png" alt="">
       <div class="container-fluid">
          <div class="row align-items-center">
             <div class="col-lg-6">
                <div class="banner-five-content">
                   <span>Recent Blog</span>
                   <h1>Virtix Blog</h1>
                </div>
             </div>
             <div class="col-lg-6">
                <div class="banner-five-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/blog-ban.png" alt="Images">
                </div>
             </div>
          </div>
       </div>
    </div>
    <?php $blog_posts = new WP_Query( 
                        array( 
                            'post_type' => 'post',
                             'post_status’' => 'publish',
                              'posts_per_page' => 12
                               )
                                ); ?> 
     <div class="blog-area pt-100">
        <img class="bg5" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/bg2.png" alt="">
        <div class="container">
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
           <div class="col-lg-12 col-md-12 text-center">
            <div class="pagination-area">
               <?php wp_pagenavi(); ?>
            </div>
         </div>          
        </div>
     </div>


    </main>


    <?php get_footer(); ?>
    <script>
$(document).ready(function(){
   $(".page").toggleClass('page-numbers');
   $(".nextpostslink").toggleClass('page-numbers');
   $(".previouspostslink").toggleClass('page-numbers');
   $(".wp-pagenavi > .current").toggleClass('page-numbers');
})
       </script>