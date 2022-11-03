<?php 
/**
 * 
 * Barra de navegação de catgorias
 * 
 * @package wezenwp
 * 
 * @since 1.0.0
 * 
 */?>
<nav class="small-part-content">
    <?php 
    if( has_nav_menu( 'side' ) ):

        $menu_name = wp_get_nav_menu_name( 'side' );

        print( '<h3 class="side-menu-name">'. $menu_name . '</h3>' );

        wp_nav_menu(
            array(
                'theme_location' => 'side',
                'menu_id'        => 'side-menu',
                'menu_class'     => 'menu-side',
                'fallback_cb'    => false
            )
        );
    endif;
    ?>
</nav>