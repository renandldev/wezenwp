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
    <div class="full-container">
        <a href="<?php echo esc_url( home_url( '/' ) );?>" class="logo-site">
            <img src="<?php echo get_template_directory_uri() . '/assets/imgs/logotipo-renan.svg';?>" alt="<?php echo wp_title();?>">
        </a>
        <?php 
        wezen_get_part( 'form', 'search' );
        ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavAltMarkup" class="menu-container">
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
    </div>
</nav>
 