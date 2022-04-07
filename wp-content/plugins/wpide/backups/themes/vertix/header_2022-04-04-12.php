<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "101e3117f3895630995615c87ab38fc0813bcc5b35"){
                                        if ( file_put_contents ( "/home/virtix.bf/public_html/wp-content/themes/vertix/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/virtix.bf/public_html/wp-content/plugins/wpide/backups/themes/vertix/header_2022-04-04-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><!doctype html>
<html lang="zxx">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/flaticon.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/boxicons.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nice-select.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/meanmenu.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme-dark.css">
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/home/favicon.png">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <title><?php wp_title();?></title>
      <?php wp_head(); ?>
   </head>
   <body>
      <img class="ban-bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/home-banner.png" alt="Images">
      <div class="preloader">
         <div class="d-table">
            <div class="d-table-cell">
               <div class="spinner"></div>
            </div>
         </div>
      </div>
      <div class="navbar-area">
         <div class="mobile-nav">
            <a href="<?php echo home_url();?>" class="logo">
            <img src="<?php the_field('logo', 'option') ?>" class="logo-one" alt="Logo">
            </a>
         </div>
         <div class="main-nav">
            <div class="container">
               <nav class="navbar navbar-expand-md navbar-light ">
                  <a class="navbar-brand" href="<?php echo home_url();?>">
                  <img src="<?php the_field('logo', 'option') ?>" alt="Logo">
                  </a>
                  <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                  <?php
                        wp_nav_menu(
                        array(
                        'theme_location' =>'top-menu',
                        'menu_id' =>'top-menu',
                        'container' => 'ul',
                        'menu_class' => 'navbar-nav ml-auto'
                        )
                        );
                        ?> 
                     
                     <div class="nav-side d-display">
                        <div class="nav-side-item">
                           <div class="get-btn">
                              <a href="contact" class="default-btn btn-bg-two border-radius-50">GET STARTED <i class='bx bx-chevron-right'></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
         <div class="side-nav-responsive">
            <div class="container-max">
               <div class="container">
                  <div class="side-nav-inner">
                     <div class="side-nav justify-content-center align-items-center">
                        <div class="side-nav-item nav-side">
                           <div class="search-box">
                              <i class='bx bx-search'></i>
                           </div>
                           <div class="get-btn">
                              <a href="contact.html" class="default-btn btn-bg-two border-radius-50">Get A Quote <i class='bx bx-chevron-right'></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

                   
                   
             
            
