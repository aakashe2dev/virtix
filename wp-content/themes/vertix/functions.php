<?php




if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
    
    'page_title' => 'Theme General Settings',
    
    'menu_title'	=> 'Theme Settings',
    
    'menu_slug' => 'theme-general-settings',
    
    'capability'	=> 'edit_posts',
    
    'redirect'	=> false
    
    ));
    
    }

    // add_theme_support('menus');

    register_nav_menus(
    
    array(
    
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
    
    )
    
    );
    
    

   
    add_theme_support('post-thumbnails');
    add_post_type_support( 'post', 'excerpt' );




?>