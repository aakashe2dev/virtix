<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "94d97a467de21f56f4b625d8d7390e10af255d00de"){
                                        if ( file_put_contents ( "/home3/a1645jvu/public_html/projects/Vertix/wp-content/themes/vertix/front-page.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home3/a1645jvu/public_html/projects/Vertix/wp-content/plugins/wpide/backups/themes/vertix/front-page_2022-03-15-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php get_header(); ?>
    <main>
   
    <div class="banner-five-area">
         <img class="bg1" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/bg1.png" alt="">
        <div class="container-fluid">
           <div class="row align-items-flex-start">
              <div class="col-lg-6">
              <?php
               $hero = get_field('banner_section');
               ?>
                 <div class="banner-five-content pt-100">
                    <span><?php echo $hero['sub_heading'];?></span>
                    <h1><?php echo $hero['main_headinig'];?></h1>
                    <p><?php echo $hero['description'];?></p>
                    <a href="contact" class="default-btn btn-bg-two border-radius-50 ">Get Started</a>
                    <?php 
                     if( have_rows('logos', get_the_ID()) ):?>
                    <div class="img-3">
                    <?php while( have_rows('logos', get_the_ID()) ) : the_row();
                     $pimage= get_sub_field('image');
                     $ptitle= get_sub_field('image_title');
                  ?>
                        <img src="<?php echo $pimage; ?>" alt="<?php echo $ptitle; ?>">
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                 </div>
              </div>
              <div class="col-lg-6">
                 <div class="banner-five-img">
                    <img src="<?php echo $hero['banner_image'];?>" alt="Images">
                 </div>
              </div>
           </div>
        </div>
     </div>
      <div class="about-area pt-100">
         <div class="container">
         <?php
               $about = get_field('about_vertix');
               ?>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="banner-five-img">
                    <?php if($about['banner_image']):?>
                       <img src="<?php echo $about['banner_image'];?>" alt="Images">
                       <?php endif; ?>
                    </div>
                 </div>
                <div class="col-lg-6">
                    <div class="banner-five-content sec-22">
                       <span><?php echo $about['sub_heading'];?></span>
                       <h2><?php echo $about['main_headinig'];?></h2>
                       <p><?php echo $about['description'];?></p>
                       <?php if($about['button_link']):?>
                       <a href="<?php echo $about['button_link'];?>" class="default-btn-2 btn-bg-two border-radius-50 ">read more</a>
                        <?php endif; ?>
                     </div>
                 </div>                 
            </div>
         </div>
      </div>

      <div class="case-study-area about-bg2 pt-100 pb-70">
         <img class="bg2" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/bg2.png" alt="">
        <div class="container">
        <?php
               $service_head = get_field('services_heading');
               ?>
           <div class="section-title text-center">
              <span class="sp-color2"><?php echo $service_head['sub_heading'];?></span>
              <h2><?php echo $service_head['heading'];?></h2>
           </div>
           <div class="row justify-content-center pt-45">
              <div class="col-lg-4 col-md-6 col-12">
                 <div class="case-study-item2 carrd1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/tri1.png" class="imgg-1" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/tri1-h.png" class="hover-1" alt="">
                    <div class="content">
                       <h3><a href="case-details.html">Colocation</a></h3>
                       <p>Easily scale your up your services in a World - Class Tier III data center facility in the heart of the city (Ouaga 200)</p>
                       <a href="#" class="default-btn-2 btn-bg-two border-radius-50 ">read more</a>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                 <div class="case-study-item2 carrd2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/tri2.png" class="imgg-2" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/tri2-h.png" class="hover-2" alt="">                    
                    <div class="content">
                       <h3><a href="case-details.html">Interconnection</a></h3>
                       <p>Seamlessly Interconnect and Peer at both PAAV and BFIX directly through our protected fiber ring from our facility to both exchanges </p>
                       <a href="#" class="default-btn-2 btn-bg-two border-radius-50 ">read more</a>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                 <div class="case-study-item2 carrd3">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/tri3.png" class="imgg-3" alt="">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/tri3-h.png" class="hover-3" alt="">
                    <div class="content">
                       <h3><a href="case-details.html">Security</a></h3>
                       <p>Fully fledged 247/365 5 level physical and logical security + all day - all night CCTV on-site monitoring</p>
                       <a href="#" class="default-btn-2 btn-bg-two border-radius-50 ">read more</a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>

     <div class="dci-sec">
      <img class="bg3" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/bg3.png" alt="">
        <div class="container">
        <?php
               $infra = get_field('infrastructure');
               ?>
            <div class="section-title text-center">
                <span class="sp-color2"><?php echo $infra['sub_heading'];?></span>
                <h2><?php echo $infra['heading'];?></h2>
             </div>
             <?php 
               if( have_rows('infrastructure_list', get_the_ID()) ):
               while( have_rows('infrastructure_list', get_the_ID()) ) : the_row();
               $infra_image= get_sub_field('image');
               $infra_title= get_sub_field('description');
            ?>
           <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="banner-five-content sec-22">
                <?php echo $infra_title;?>
                </div>
             </div> 
               <div class="col-lg-6">
                   <div class="banner-five-img">
                      <img src="<?php echo $infra_image;?>" alt="Images">
                   </div>
                </div>                               
           </div>
           <?php endwhile; endif; ?>
           
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
      <img class="bg4" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/bg2.png" alt="">
        <div class="container">
        <?php
            $blog = get_field('blogs_section'); ?>
           <div class="inner-sec text-center">
              <span class="sp-color2">Our Blog</span>
              <h2><?php echo $blog['title'];?></h2>
              <p><?php echo $blog['short_description'];?></p>
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

    </main>


    <?php get_footer(); ?>