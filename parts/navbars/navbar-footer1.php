<?php 
/**
 * 
 * Seção 1 de navegação do Rodapé
 * 
 * @package wezenwp
 * 
 * @since 1.0.0
 * 
 */?>
<nav id="sec-1" class="nav-section-footer">
    <?php 
    if( has_nav_menu( 'footer1' ) ):

        $name_of_section = wp_get_nav_menu_name( 'footer1' );

        print( '<h4 class="name-menu-footer">' . $name_of_section . '</h4>' );

        wp_nav_menu(
            array(
              'theme_location' => 'footer1',
              'menu_id'        => 'first-menu',
              'menu_class'     => 'menu-footer',
              'fallback_cb'    => false  
            )
        );

    endif;
    ?>
</nav>
