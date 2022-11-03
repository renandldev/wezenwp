<?php 
/**
 * 
 * Seção 3 de navegação do Rodapé
 * 
 * @package wezenwp
 * 
 * @since 1.0.0
 * 
 */?>
<nav id="sec-3" class="nav-section-footer">
    <?php 
    if( has_nav_menu( 'footer3' ) ):

        $name_of_section = wp_get_nav_menu_name( 'footer3' );

        print( '<h4 class="name-menu-footer">' . $name_of_section . '</h4>' );

        wp_nav_menu(
            array(
              'theme_location' => 'footer3',
              'menu_id'        => 'third-menu',
              'menu_class'     => 'menu-footer',
              'fallback_cb'    => false  
            )
        );

    endif;
    ?>
</nav>
