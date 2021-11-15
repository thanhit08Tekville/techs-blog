<?php get_header(); ?>
    <main id="main-extended" class="site-main" role="main">
        
        <div id="primary" class="content-area">

            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?> 
            
                <?php get_template_part( 'template-parts/content', 'page' ); ?>

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

                the_posts_pagination( array(
                    'prev_text' => esc_html__( '&lArr; Previous' , 'technology-travel-food' ),
                    'next_text' => esc_html__( '&rArr; Next', 'technology-travel-food' ),
                ));
            
            ?>
        </div>
    </main>
    
    <?php get_footer(); ?>
