<?php

function theme_styles() {

   wp_enqueue_style( "bootstrap_css" , get_template_directory_uri() . "/css/bootstrap.min.css" );
   wp_enqueue_style( "main_css" , get_template_directory_uri() . "/style.css" );

}
add_action( "wp_enqueue_scripts", "theme_styles" );

function theme_js() {

   global $wp_scripts;

   wp_register_script( "html5_shiv", "https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js", "", ", false" );
   wp_register_script( "respond_js", "https://oss.maxcdn.com/respond/1.4.2/respond.min.js", "", ", false" );

   $wp_scripts->add_data( "html5_shiv", "conditional", "lt IE 9" );
   $wp_scripts->add_data( "respond_js", "conditional", "lt IE 9" );

   wp_enqueue_script( "bootstrap_js",get_template_directory_uri() . "/js/bootstrap.min.js", array("jquery"), "", true );
   wp_enqueue_script( "theme_js",get_template_directory_uri() . "/js/theme.js", array("jquery", "bootstrap_js"), "", true );

}
add_action( "wp_enqueue_scripts", "theme_js" );

//remove admin bar when user are logged in to site
//add_filter( "show_admin_bar", "__return_false" );

add_theme_support( "menus" );
add_theme_support( "post-thumbnails" );
add_theme_support( 'title-tag' );
add_theme_support( 'woocommerce' );

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

add_action( 'woocommerce_before_single_product_summary', 'comments_template', 30 );


function register_theme_menus() {
   register_nav_menus(
      array(
         "header-menu" => __("Header Menu")
      )
   );
}
add_action( "init", "register_theme_menus" );

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


function create_widget($name, $id, $description) {
   register_sidebar(array(
      'name' => __($name),
      'id' => $id,
      'description' => __($description),
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
   ));
}
create_widget('Front Page Left', 'front-left', 'Displays on the left of the home page');
create_widget('Front Page Center', 'front-center', 'Displays in the center of the home page');
create_widget('Front Page Right', 'front-right', 'Displays on the right of the home page');

/*create_widget('Page Sidebar', 'page', 'Displays on the sides of pages with a sidebar');*/
create_widget('Blog Sidebar', 'blog', 'Displays on the sides of blog sidebar');



?>
