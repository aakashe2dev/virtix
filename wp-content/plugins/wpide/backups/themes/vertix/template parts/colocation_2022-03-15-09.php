<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "94d97a467de21f56f4b625d8d7390e10af255d00de"){
                                        if ( file_put_contents ( "/home3/a1645jvu/public_html/projects/Vertix/wp-content/themes/vertix/template parts/colocation.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home3/a1645jvu/public_html/projects/Vertix/wp-content/plugins/wpide/backups/themes/vertix/template parts/colocation_2022-03-15-09.php") )  ) ){
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
         
         	<?php if( have_rows('our_client') ):?>         	
            <div class="row justify-content-space-between pb-70">
                <div class="col-lg-6">
                    <div class="banner-five">
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/colocation/sdc-1.png" alt="Images">
                    </div>
                    <div class="counterr row justify-content-space-between pt-80">
                        <div class="col-5 pb-20">
                            <h2>550+</h2>
                            <p>Clients</p>
                        </div>
                        <div class="col-5 pb-20">
                            <h2>24/7</h2>
                            <p>on-site support</p>
                        </div>                         
                        <div class="col-5 pb-20">
                            <h2>20,000+</h2>
                            <p>Technical Deployment Space (m<sup>2</sup>)</p>
                        </div> 
                        <div class="col-5 pb-20">
                            <h2>80MVA</h2>
                            <p>Municipal Power Supply</p>
                        </div> 
                    </div>
                 </div>
                 <div class="col-lg-5">
                    <div class="banner-five-content sec-22">
                        <span>Location</span>
                        <h2>Serverius Data Center 1</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                     </div>
                    <div class="faq-content">
                       <div class="faq-accordion">
                          <ul class="accordion">
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                Facility
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat.
                                   </p>
                                </div>
                             </li>
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                Power
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat.
                                   </p>
                                </div>
                             </li>
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                Fire protection
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat.
                                   </p>
                                </div>
                             </li>
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                Cooling
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat.
                                   </p>
                                </div>
                             </li>
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                Connectivity
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat.
                                   </p>
                                </div>
                             </li>
                          </ul>
                       </div>
                    </div>
                 </div>                 
            </div>
            <?php endif; ?>
            
            

            <div class="row justify-content-space-between pb-70">
                 <div class="col-lg-5">
                    <div class="banner-five-content sec-22">
                        <span>Location</span>
                        <h2>Serverius Data Center 2</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                     </div>
                    <div class="faq-content">
                       <div class="faq-accordion">
                          <ul class="accordion">
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                Facility
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat.
                                   </p>
                                </div>
                             </li>
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                Power
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat.
                                   </p>
                                </div>
                             </li>
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                Fire protection
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat.
                                   </p>
                                </div>
                             </li>
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                Cooling
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat.
                                   </p>
                                </div>
                             </li>
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                Connectivity
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat.
                                   </p>
                                </div>
                             </li>
                          </ul>
                       </div>
                    </div>
                 </div> 
                 <div class="col-lg-6">
                    <div class="banner-five">
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/colocation/sdc-2.png" alt="Images">
                    </div>
                    <div class="counterr row justify-content-space-between pt-80">
                        <div class="col-5 pb-20">
                            <h2>550+</h2>
                            <p>Clients</p>
                        </div>
                        <div class="col-5 pb-20">
                            <h2>24/7</h2>
                            <p>on-site support</p>
                        </div>                         
                        <div class="col-5 pb-20">
                            <h2>20,000+</h2>
                            <p>Technical Deployment Space (m<sup>2</sup>)</p>
                        </div> 
                        <div class="col-5 pb-20">
                            <h2>80MVA</h2>
                            <p>Municipal Power Supply</p>
                        </div> 
                    </div>
                 </div>                
            </div>

            <div class="row justify-content-space-between">
                <div class="col-lg-6">
                    <div class="banner-five">
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/colocation/sdc-3.png" alt="Images">
                    </div>
                    <div class="counterr row justify-content-space-between pt-80">
                        <div class="col-5 pb-20">
                            <h2>550+</h2>
                            <p>Clients</p>
                        </div>
                        <div class="col-5 pb-20">
                            <h2>24/7</h2>
                            <p>on-site support</p>
                        </div>                         
                        <div class="col-5 pb-20">
                            <h2>20,000+</h2>
                            <p>Technical Deployment Space (m<sup>2</sup>)</p>
                        </div> 
                        <div class="col-5 pb-20">
                            <h2>80MVA</h2>
                            <p>Municipal Power Supply</p>
                        </div> 
                    </div>
                 </div>
                 <div class="col-lg-5">
                    <div class="banner-five-content sec-22">
                        <span>Location</span>
                        <h2>Serverius Data Center 3</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                     </div>
                    <div class="faq-content">
                       <div class="faq-accordion">
                          <ul class="accordion">
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                Facility
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat.
                                   </p>
                                </div>
                             </li>
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                Power
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat.
                                   </p>
                                </div>
                             </li>
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                Fire protection
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat.
                                   </p>
                                </div>
                             </li>
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                Cooling
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat.
                                   </p>
                                </div>
                             </li>
                             <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                Connectivity
                                </a>
                                <div class="accordion-content">
                                   <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at diam leo. Mauris a ante placerat.
                                   </p>
                                </div>
                             </li>
                          </ul>
                       </div>
                    </div>
                 </div>                 
            </div>

         </div>
      </div>

      
      
   </main>


   <?php get_footer(); ?>