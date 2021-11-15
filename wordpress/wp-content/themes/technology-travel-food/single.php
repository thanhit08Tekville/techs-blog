<?php get_header(); ?>
    <main id="main" class="site-main" role="main">
        
        <div id="primary" class="content-area">

            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?> 
            
                <?php get_template_part( 'template-parts/content', 'single' ); ?>

            <?php
            endwhile;
            else:
            ?>

            <?php
                //this is displayed if there is no content and no 404.php
                get_template_part( 'template-parts/content', 'none' );
            
            ?>

            <?php
            
                endif;
            
            ?>
        </div>

        <div id="secondary">
            <?php get_sidebar(); ?>
        </div>
    <main>
    
    <?php get_footer(); ?>
