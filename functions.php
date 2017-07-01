<?php
  
  /* 
     This file controls important Wordpress functions and should NOT be modified unless you
     have a special reason and know what you're doing! Typing an error here will cause the
     entire website to stop working, so be careful. If you do make a mistake, please
     see your tutor, in most cases it can be fixed. 
  */ 
  
add_action( 'wp_enqueue_scripts', 'add_theme_scripts_and_styles' );
  
function add_theme_scripts_and_styles() {

   // Register Styles
    
   wp_register_style('grid_styles', get_template_directory_uri() . '/css/vendor/grid.css');
   wp_enqueue_style('grid_styles'); 
    
   wp_register_style('custom_styles', get_template_directory_uri() . '/css/main.css');
   wp_enqueue_style('custom_styles');
  

   
   // Register Scripts
   
    wp_enqueue_script('jquery');
    
    wp_register_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array('jquery')); 
    wp_enqueue_script('modernizr');

    //wp_register_script('prefix_free', get_template_directory_uri() . '/js/vendor/prefixfree.min.js', array('jquery')); 
    //wp_enqueue_script('prefix_free');  
    
    wp_register_script('custom_scripts', get_template_directory_uri() . '/js/main.js', array('jquery')); 
    wp_enqueue_script('custom_scripts');
    
} 

/* 

  // Register Sidebar Widgets

  add_action( 'widgets_init', 'add_sidebar_widget_support' );
  
  function add_sidebar_widget_support() {
  
  	register_sidebar( array(
  		'name'          => 'Sidebar Widgets',
  		'id'            => 'sidebar-widgets',
  		'before_widget' => '<div class="widget">',
  		'after_widget'  => '</div>',
  		'before_title'  => '<h2 class="widgetTitle">',
  		'after_title'   => '</h2>',
  	) );
  
  }
  
*/