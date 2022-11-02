<?php 
/**
 * 
 * Barra de navegação principal
 * 
 * @package wezenwp
 * 
 * @since 1.0.0
 */?>
<nav id="top-navbar" class="navbar-top">
    <div class="top-container">
        <?php 
        if( has_nav_menu( 'superior' ) ):
            wp_nav_menu( array(
                'theme_location' => 'superior',
                'menu_id'        => 'top-menu',
                'menu_class'     => 'menu-top',
                'fallback_cb'    => false,
                'container'      => false
             ) 
            );
        endif;
        ?>
    </div>
</nav>
