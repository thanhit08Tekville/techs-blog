<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package technology-travel-food
 */

?>

</div> <!--- content --->
    <footer id="colophon" class="site-footer" role="contentinfo">


    <a href="<?php echo esc_url( __( 'https://wordpress.org', 'technology-travel-food' ) ) ?>">
    <?php /* translators: %s : WordPress */
    printf( esc_html__( 'Powered by %s', 'technology-travel-food' ) , '<strong>WordPress</strong>' );?>
    </a>
    <a href="<?php echo esc_url( __( 'https://website.bidhantech.in', 'technology-travel-food' ) ) ?>">
    <?php /* translators: %s : technology-travel-food */
    printf( esc_html__( '| Theme by %s', 'technology-travel-food' ) , '<strong>BidhanTech</strong>' );?>
    </a>


    </footer>
</div><!--- #page --->
<?php wp_footer(); ?>


</body>
</html>
