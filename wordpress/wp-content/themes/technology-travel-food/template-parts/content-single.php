<article id="post-<?php the_id(); ?>" <?php post_class() ?>>

            <header class="entry-header">
                <a href="<?php the_permalink() ?>" class="post-title">
                    <?php the_title(); ?>
                </a>
                <section class="post-details">
                    <span class="post-detail first"> <?php echo esc_html__( 'By:' , 'technology-travel-food' ); ?> </span>             <?php the_author_posts_link(); ?>
                    <span class="post-detail"> <?php echo esc_html__( 'Date:' , 'technology-travel-food' ); ?> </span> <?php echo esc_html( get_the_date() ); ?>
                    <span class="post-detail"> <?php echo esc_html__( 'Categories:' , 'technology-travel-food' ); ?> </span> <?php the_category(','); ?>
                    <span class="post-detail"></span> <?php the_tags(); ?>
                </section>
            </header>


            <div class="entry-content-single-post">
            <?php if( the_post_thumbnail() ) : ?>
                    <img src="<?php the_post_thumbnail_url()?>">
            <?php endif; ?>
                <?php the_content( '<p>', '</p>' ); ?>
            </div>

            <?php wp_link_pages( "","","","" ); ?>

</article>
<?php comments_template(); ?>