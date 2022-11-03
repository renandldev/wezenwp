<?php 
/**
 * 
 * Arquivo inicial do tema
 * 
 * @package wezenwp
 * 
 * @since 1.0.0
 * 
 */?>
<main id="front-content" class="full-content">
    <?php 
    if( have_posts() ):
        while( have_posts() ):
            the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>
