<article id="post-<?php the_id(); ?>" class="article-page <?php get_post_class(); ?>">

            <header class="entry-header">
            <a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
            </header>

            <div class="entry-content">
                <?php the_content( '<p>', '</p>' ); ?>
            </div>
</article>