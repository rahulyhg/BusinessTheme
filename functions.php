<?php
  
/* 
   Add HTML5 supprt for the search bar
*/ 
  
add_theme_support( 'html5', array('search-form') );


  
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

add_action( 'wp_enqueue_scripts', 'add_theme_scripts_and_styles' ); 

 

// Register Sidebar Widgets

function add_sidebar_widget_support() {

	register_sidebar( array(
		'name'          => 'Sidebar Widgets',
		'id'            => 'sidebar-widgets',
		'before_widget' => '<div class="sidebarWrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="sidebarTitle">',
		'after_title'   => '</h2>',
	) );

}

add_action( 'widgets_init', 'add_sidebar_widget_support' );
 


//Register Menu's
function register_footer_menus() {
  register_nav_menus(
    array(
      'header-main' => __( 'Main Menu' ),
      'footer-first' => __( 'First Footer Menu' ),
      'footer-second' => __( 'Second Footer Menu' ),
      'footer-third' => __( 'Third Footer Menu' )
    )
  );
}
add_action( 'init', 'register_footer_menus' );