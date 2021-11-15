<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
    <?php
    wp_head(); 
    ?>
</head>
<body <?php body_class() ?>>
<?php 
    if( function_exists( 'wp_body_open' ) ) :
        wp_body_open();
    else:
        // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedHooknameFound
        do_action( 'wp_body_open' );
    endif;
?>



<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'technology-travel-food' ); ?></a>

    <header id="masthead" class="site-header" role="banner">

        <div class="site-branding">

            <p class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) );?>" rel="home">
                <?php the_custom_logo(); ?>
                <?php bloginfo( 'name' )?>
            </a>
            </p>
            <p class="site-description"><?php bloginfo('description'); ?></p>

        </div>

        <a id="menu-mobile" href="#">
        </a>
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php
            $args=[
                'theme_location'=>'main-menu',

            ]; 
            wp_nav_menu( $args );
            ?>
        </nav>

    </header>

    <div id="content" class="site-content">

