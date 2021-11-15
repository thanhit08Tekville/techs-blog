<?php get_header(); ?>
    <main id="main" class="site-main" role="main">
        
        <div id="primary" class="content-area">
            <?php
                //this is displayed if there is no content and no 404.php
                get_template_part( 'template-parts/content', 'none' );
            
            ?>
        </div>

        <div id="secondary">
            <?php get_sidebar(); ?>
        </div>
    </main>
    
<?php get_footer(); ?>
