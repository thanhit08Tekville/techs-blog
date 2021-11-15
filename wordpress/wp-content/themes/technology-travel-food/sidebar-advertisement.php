<?php

if( !is_active_sidebar( 'advertisement-sidebar' ) ){
    return;
}

?>

<aside id="secondary-advertisement" class="widget-area" role="complementary">
<?php dynamic_sidebar( 'advertisement-sidebar' ); ?>
</aside>
