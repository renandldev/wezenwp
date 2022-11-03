<?php 
/**
 * 
 * Seção 2 de navegação do Rodapé
 * 
 * @package wezenwp
 * 
 * @since 1.0.0
 * 
 */?>
<nav id="sec-2" class="nav-section-footer">
    <?php 
    if( has_nav_menu( 'footer2' ) ):

        $name_of_section = wp_get_nav_menu_name( 'footer2' );

        print( '<h4 class="name-menu-footer">' . $name_of_section . '</h4>' );

        wp_nav_menu(
            array(
              'theme_location' => 'footer2',
              'menu_id'        => 'second-menu',
              'menu_class'     => 'menu-footer',
              'fallback_cb'    => false  
            )
        );

    endif;
    ?>
</nav>
