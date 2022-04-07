<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "94d97a467de21f56f4b625d8d7390e1024c60f5e6c"){
                                        if ( file_put_contents ( "/home3/a1645jvu/public_html/projects/Vertix/wp-content/themes/vertix/template parts/colocation.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home3/a1645jvu/public_html/projects/Vertix/wp-content/plugins/wpide/backups/themes/vertix/template parts/colocation_2022-03-16-05.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
//Template Name: Colocation
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
      <div class="about-area pt-100">
         <div class="container">
         
         	<?php if( have_rows('service_1') ):?>         	
            <div class="row myrow justify-content-space-between pb-70">
            
                <?php while( have_rows('service_1') ) : the_row();
					$s_img = get_sub_field('service_image');
					$s_head = get_sub_field('service_heading');
					$s_txt = get_sub_field('service_text');
					$s_acc = get_sub_field('service_accordion_1');
					$s_over = get_sub_field('overview');

				?>
                <div class="col-lg-6">
                    <div class="banner-five">
                       <img src="<?php echo $s_img; ?>" alt="Images">
                    </div>
                    
                    <?php if( have_rows('overview') ):?>
                    <div class="counterr row justify-content-space-between pt-80">
                        
                        <?php while( have_rows('overview') ) : the_row();
							$o_title = get_sub_field('overview_title');
							$o_para = get_sub_field('overview_paragraph');
						?>
                        <div class="col-5 pb-20">
                            <h2><?php echo $o_title; ?></h2>
                            <p><?php echo $o_para; ?></p>
                        </div>
                        <?php endwhile; ?>
 
                    </div>
                    <?php endif; ?>
                    
                 </div>
                <div class="col-lg-5">
                    <div class="banner-five-content sec-22">
                        <span><?php echo $s_head; ?></span>
                        <?php echo $s_txt; ?>
                     </div>
                    <div class="faq-content">
                       <div class="faq-accordion">
                       
                        <?php if( have_rows('service_accordion_1') ):?>
                          <ul class="accordion">
                          
                            <?php while( have_rows('service_accordion_1') ) : the_row();
							$a_title = get_sub_field('accordion_title');
							$a_para = get_sub_field('accordion_paragraph');
						    ?>
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                    <?php echo $a_title; ?>
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      <?php echo $a_para; ?>
                                   </p>
                                </div>
                             </li>
                             <?php endwhile; ?>
                             
                             
                          </ul>
                          <?php endif; ?>
                          
                          
                       </div>
                    </div>
                 </div>
                <?php endwhile; ?>
                 
            </div>
            <?php endif; ?>
            
            

            <?php if( have_rows('service_2') ):?>         	
            <div class="row myrow justify-content-space-between pb-70">
            
                <?php while( have_rows('service_2') ) : the_row();
					$s_img = get_sub_field('service_image');
					$s_head = get_sub_field('service_heading');
					$s_txt = get_sub_field('service_text');
					$s_acc = get_sub_field('service_accordion_1');
					$s_over = get_sub_field('overview');

				?>
                <div class="col-lg-6">
                    <div class="banner-five">
                       <img src="<?php echo $s_img; ?>" alt="Images">
                    </div>
                    
                    <?php if( have_rows('overview') ):?>
                    <div class="counterr row justify-content-space-between pt-80">
                        
                        <?php while( have_rows('overview') ) : the_row();
							$o_title = get_sub_field('overview_title');
							$o_para = get_sub_field('overview_paragraph');
						?>
                        <div class="col-5 pb-20">
                            <h2><?php echo $o_title; ?></h2>
                            <p><?php echo $o_para; ?></p>
                        </div>
                        <?php endwhile; ?>
 
                    </div>
                    <?php endif; ?>
                    
                 </div>
                <div class="col-lg-5">
                    <div class="banner-five-content sec-22">
                        <span><?php echo $s_head; ?></span>
                        <?php echo $s_txt; ?>
                     </div>
                    <div class="faq-content">
                       <div class="faq-accordion">
                       
                        <?php if( have_rows('service_accordion_1') ):?>
                          <ul class="accordion">
                          
                            <?php while( have_rows('service_accordion_1') ) : the_row();
							$a_title = get_sub_field('accordion_title');
							$a_para = get_sub_field('accordion_paragraph');
						    ?>
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                    <?php echo $a_title; ?>
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      <?php echo $a_para; ?>
                                   </p>
                                </div>
                             </li>
                             <?php endwhile; ?>
                             
                             
                          </ul>
                          <?php endif; ?>
                          
                          
                       </div>
                    </div>
                 </div>
                <?php endwhile; ?>
                 
            </div>
            <?php endif; ?>
            
            

            <?php if( have_rows('service_3') ):?>         	
            <div class="row myrow justify-content-space-between pb-70">
            
                <?php while( have_rows('service_3') ) : the_row();
					$s_img = get_sub_field('service_image');
					$s_head = get_sub_field('service_heading');
					$s_txt = get_sub_field('service_text');
					$s_acc = get_sub_field('service_accordion_1');
					$s_over = get_sub_field('overview');

				?>
                <div class="col-lg-6">
                    <div class="banner-five">
                       <img src="<?php echo $s_img; ?>" alt="Images">
                    </div>
                    
                    <?php if( have_rows('overview') ):?>
                    <div class="counterr row justify-content-space-between pt-80">
                        
                        <?php while( have_rows('overview') ) : the_row();
							$o_title = get_sub_field('overview_title');
							$o_para = get_sub_field('overview_paragraph');
						?>
                        <div class="col-5 pb-20">
                            <h2><?php echo $o_title; ?></h2>
                            <p><?php echo $o_para; ?></p>
                        </div>
                        <?php endwhile; ?>
 
                    </div>
                    <?php endif; ?>
                    
                 </div>
                <div class="col-lg-5">
                    <div class="banner-five-content sec-22">
                        <span><?php echo $s_head; ?></span>
                        <?php echo $s_txt; ?>
                     </div>
                    <div class="faq-content">
                       <div class="faq-accordion">
                       
                        <?php if( have_rows('service_accordion_1') ):?>
                          <ul class="accordion">
                          
                            <?php while( have_rows('service_accordion_1') ) : the_row();
							$a_title = get_sub_field('accordion_title');
							$a_para = get_sub_field('accordion_paragraph');
						    ?>
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                    <?php echo $a_title; ?>
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      <?php echo $a_para; ?>
                                   </p>
                                </div>
                             </li>
                             <?php endwhile; ?>
                             
                             
                          </ul>
                          <?php endif; ?>
                          
                          
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