<?php 
// Template Name: About Us
get_header(); ?>
    <main>

      <div class="banner-five-area">
         <img class="bg1" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/bg1.png" alt="">
        <div class="container-fluid">
        <?php
               $hero = get_field('banner_section');
               ?>
           <div class="row align-items-flex-start">
              <div class="col-lg-6">
                 <div class="banner-five-content pt-100">
                    <span><?php echo $hero['sub_heading'];?></span>
                    <h1><?php echo $hero['main_heading'];?></h1>
                    <p><?php echo $hero['description'];?></p>
                 </div>
              </div>
              <div class="col-lg-6">
                 <div class="banner-five-img">
                    <img src="<?php echo $hero['image'];?>" alt="Images">
                 </div>
              </div>
           </div>
        </div>
     </div>
      <div class="about-area pt-100">
         <div class="container">
         <?php
               $about = get_field('about_section');
               ?>
            <div class="text-center pb-70">
                <span class="sp-color2"><?php echo $about['sub_heading'];?></span>
                <h2><?php echo $about['main_heading'];?></h2>
             </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="banner-five-img">
                       <img src="<?php echo $about['image'];?>" alt="Images">
                    </div>
                 </div>
                <div class="col-lg-6 ttxt">
                    <div class="banner-five-content sec-22">
                    <?php echo $about['description'];?>
                    </div>
                 </div>                 
            </div>
         </div>
      </div>

      <div class="case-study-area about-bg2 pt-100 pb-70">
         <img class="bg2" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/bg2.png" alt="">
        <div class="container">
           <div class="text-center">
              <span class="sp-color2">Virtix</span>
              <h2>Why Choose VIRTIX</h2>
           </div>
           <?php 
       if( have_rows('why_choose_section', get_the_ID()) ): ?>
           <div class="row justify-content-center pt-20">
              <?php  while( have_rows('why_choose_section', get_the_ID()) ) : the_row();
                  $why_image= get_sub_field('image');
                  $why_title= get_sub_field('title');
                  $why_content= get_sub_field('description');
               ?>
              <div class="col-lg-4 col-md-6 col-12">
                 <div class="case-study-item2">
                    <img src="<?php echo $why_image;?>" alt="">
                    <div class="content">
                       <h4><?php echo $why_title;?></h4>
                       <p><?php echo $why_content;?></p>
                    </div>
                 </div>
              </div>
              <?php endwhile; ?>              
           </div>
           <?php endif; ?>
        </div>
     </div>

     
      
   </main>


   <?php get_footer(); ?>