<?php 
//Template Name: Services
get_header(); ?>
    <main>
      <div class="banner-five-area">
         <img class="bg1" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/bg1.png" alt="">
        <div class="container-fluid">
        <?php
               $hero = get_field('banner_section');
               ?>
           <div class="row align-items-flex-start main-ser-ban">
              <div class="col-lg-6">
                 <div class="banner-five-content pt-100">
                    <span><?php echo $hero['sub_heading'];?></span>
                    <h1><?php echo $hero['main_heading'];?></h1>
                    <p><?php echo $hero['description'];?></p>
                    <?php if($hero['link']): ?>
                    <a href="<?php echo $hero['link'];?>" class="default-btn btn-bg-two border-radius-50 ">Get Started</a>
                     <?php endif; ?>
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
     <?php 
       if( have_rows('services_section', get_the_ID()) ): ?>
      <div class="service-area pt-100">
         <div class="container">
         <?php  while( have_rows('services_section', get_the_ID()) ) : the_row();
                  $s_image= get_sub_field('image');
                  $s_subtitle= get_sub_field('sub_heading');
                  $s_title= get_sub_field('title');
                  $s_content= get_sub_field('description');
                  $s_link= get_sub_field('link');
               ?>
            <div class="row align-items-center justify-content-space-between">
               <div class="col-lg-6">
                  <div class="banner-five-content sec-22">
                     <span><?php echo $s_subtitle;?></span>
                     <h2><?php echo $s_title;?></h2>
                     <p><?php echo $s_content;?></p>
                     <?php if($s_link):?>
                     <a href="<?php echo $s_link;?>" class="default-btn-2 btn-bg-two border-radius-50 ">read more</a>
                        <?php endif; ?>
                  </div>
               </div> 
                <div class="col-lg-6">
                    <div class="banner-five-img">
                       <img src="<?php echo $s_image;?>" alt="Images">
                    </div>
                 </div>                                
            </div>
            <?php endwhile; ?>
            <!-- <div class="row align-items-center justify-content-space-between">
                <div class="col-lg-6">
                    <div class="banner-five-content sec-22">
                       <span>Service</span>
                       <h2>Interconnection</h2>
                       <p>Easily choose from a variety of Telecom networks, Service providers and Internet exchange points (IXP's) presently in our facility with the flexibility of our structured Meet-Me-Room (MMR) conveniently establish a point-to-point cable connectivity with your preferred service provider.</p>
                       <a href="#" class="default-btn-2 btn-bg-two border-radius-50 ">read more</a>
                    </div>
                 </div> 
                <div class="col-lg-6">
                    <div class="banner-five-img">
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/s2.png" alt="Images">
                    </div>
                 </div>                                
            </div>
            <div class="row align-items-center justify-content-space-between">
                <div class="col-lg-6">
                    <div class="banner-five-content sec-22">
                       <span>Service</span>
                       <h2>Customer Support </h2>
                       <p>Our world class technical support personals are here to provide local assistance with your onsite infrastructural needs 24/7/365, our services are geared to solve customer specific needs including cabinet setup.</p>
                       <a href="#" class="default-btn-2 btn-bg-two border-radius-50 ">read more</a>
                    </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="banner-five-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/s3.png" alt="Images">
                     </div>
                  </div>                 
            </div> -->
         </div>
         <?php endif; ?>
      </div>


 
      
   </main>


   <?php get_footer(); ?>