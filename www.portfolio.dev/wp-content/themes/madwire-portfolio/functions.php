<?php

add_theme_support( "menus" );
add_theme_support( "post-thumbnails" );
add_theme_support( 'title-tag' );

function wpm_excerpt_length() {
   return 16;
}
add_filter( "excerpt_length", "wpm_excerpt_length", 999  );

function register_theme_menus() {
   register_nav_menus(
      array(
         "primary-menu"  => __("Primary Menu")
      )
   );
}

add_action( "init", "register_theme_menus" );

// required to add widgets
function wpm_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

wpm_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
wpm_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

function wpm_theme_styles() {
   wp_enqueue_style( "foundation_css", get_template_directory_uri() . "/css/foundation.css" );
   //wp_enqueue_style( "normalize_css", get_template_directory_uri() . "/css/normalize.css" );
   wp_enqueue_style( "googlefont_css", "http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic" );
   wp_enqueue_style( "main_css", get_template_directory_uri() . "/style.css" );

}

add_action( "wp_enqueue_scripts", "wpm_theme_styles" );


function wpm_theme_js() {
   wp_enqueue_script( "modernizr_js" , get_template_directory_uri() . "/js/modernizr.js", " ", " ", false );
   wp_enqueue_script( "foundation_js" , get_template_directory_uri() . "/js/foundation.min.js", array("jquery"), " ", true ); //true outputs at bottom
   wp_enqueue_script( "main_js" , get_template_directory_uri() . "/js/app.js", array("jquery", "foundation_js"), " ", true );
}

add_action( "wp_enqueue_scripts", "wpm_theme_js" );

/* Woocommerce */

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


 ?>
