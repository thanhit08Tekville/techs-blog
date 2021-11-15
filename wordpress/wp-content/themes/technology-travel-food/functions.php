<?Php

function technologytravelfood_theme_setup(){

//add theme support features
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );

//Register Menu Locations
register_nav_menus( [
    'main-menu'=> esc_html__('Main Menu', 'technology-travel-food'),
    
    ] );

}

add_action( 'after_setup_theme', 'technologytravelfood_theme_setup' );

//Load in our CSS
function technologytravelfood_enqueue_styles(){

    wp_enqueue_style( 'technology-travel-food-theme-main-css', get_stylesheet_directory_uri().'/style.css',[], time(), 'all' );
    wp_enqueue_script( 'technology-travel-food-theme-mobile-menu-script', get_stylesheet_directory_uri().'/menu-script.js', [], time(), TRUE );

}
add_action( 'wp_enqueue_scripts', 'technologytravelfood_enqueue_styles' );

//enable dashicons for icons (menu on mobile)
function technologytravelfood_menu_icons_front_end() {
    wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'technologytravelfood_menu_icons_front_end' );


//Register sidebar widget areas
function technologytravelfood_widget_init(){
    register_sidebar([
        'name'         =>  esc_html__( 'Main Sidebar',  'technology-travel-food' ),
        'id'           => 'main-sidebar',
        'description'  =>  esc_html__( 'The main sidebar area', 'technology-travel-food' ),
        'before_widget'=> ' <section class="widget"> ',
        'after_widget' => ' </section> ',
        'before_title' => '<h2 class="widget-title">',
        'after_title'  => '</h2><hr/>'


    ]);

    register_sidebar([
        'name'         =>  esc_html__( 'Top Hero Widget Area',  'technology-travel-food' ),
        'id'           => 'advertisement-sidebar',
        'description'  =>  esc_html__( 'The top hero widget area. You may show Ads here.', 'technology-travel-food' ),
        'before_widget'=> ' <section class="widget-advertisement top-hero"> ',
        'after_widget' => ' </section> ',
        'before_title' => '<h2 class="widget-title">',
        'after_title'  => '</h2>'


    ]);

}
add_action( 'widgets_init', 'technologytravelfood_widget_init' );

//excerpt modifications
function technologytravelfood_excerpt_more( $more ) {
    if( is_admin() ){ return $more; }
    return '...';
}
add_filter( 'excerpt_more', 'technologytravelfood_excerpt_more' );


//

function technologytravelfood_theme_abc(){
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
}
add_action( 'wp_enqueue_scripts', 'technologytravelfood_theme_abc' );