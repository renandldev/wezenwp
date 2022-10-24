<?php 
/**
 * 
 * Arquivo de manipulação do WordPress
 * 
 * @package wezenwp
 * 
 * @since 1.0.0
 * 
 */

// Retorna o arquivo de ativação principal
require_once get_template_directory() . '/inc/wezen-activate.php';

/**
 * 
 * saída de elementos para HTML5
 * 
 */
add_theme_support(
    'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
        'navigation-widgets',
    )
);

/**
 * 
 * Adiciona Embeds responsivos
 * 
 */
add_theme_support( 'responsive-embeds' );

/**
 * 
 * Registra os menus de navegação
 * 
 */
function wezen_register_menus(){

    $locals = array( 
        'superior' => __( 'Barra de navegação superior', 'wezenwp' ),
        'side'     => __( 'Navegação lateral de categorias', 'wezenwp' ),
        'social'   => __( 'Ícones de redes sociais', 'wezenwp' ),
        'footer1'  => __( 'Seção 1 do Rodapé', 'wezenwp' ),
        'footer2'  => __( 'Seção 2 do Rodapé', 'wezenwp' ),
        'footer3'  => __( 'Seção 3 do Rodapé', 'wezenwp' )
    );

    // Inicia o registro
    register_nav_menus( $locals );
 
}

/**
 * 
 * Chama o procedimento de ativação de menus
 * 
 */
add_action( 'init', 'wezen_register_menus' );
