<?php 
/**
 * 
 * Cabeçalhos para posts temporais exibidos solo
 * 
 * @package wezenwp
 * 
 * @since 1.0.0
 * 
 */?>
<main id="post-content" class="grand-part-content">
    <?php 
    if( have_posts() ):
        while( have_posts() ):
            the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>
<?php 
wezen_get_part( 'navbar', 'sidebar' );

