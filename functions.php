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

function wezen_scripts_styles(){

    /**
     * 
     * Script padrão JQuery
     * 
     */
    wp_enqueue_script( 'JQuery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.6.1', false );
    
    /**
     * 
     * Script padrão PopperJs
     * 
     */
    wp_enqueue_script( 'PopperJs', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '2.11.6', true );

    /**
     * 
     * Carrega o CSS de acordo com o tipo de página
     * 
     */
    if( is_page() ):

        wp_enqueue_style( 'default-style', get_template_directory_uri() . '/assets/css/default.min.css', array(), '1.0.0', 'all' );

    elseif( is_home() ):

        wp_enqueue_style( 'blog-style', get_template_directory_uri() . '/assets/css/blog.min.css', array(), '1.0.0', 'all' );

    elseif( is_front_page() ):

        wp_enqueue_style( 'front-style', get_template_directory_uri() . '/assets/css/front.min.css', array(), '1.0.0', 'all' );

    elseif( is_search() ):

        wp_enqueue_style( 'search-style', get_template_directory_uri() . '/assets/css/search.min.css', array(), '1.0.0', 'all' );

    elseif( is_singular() ):

        wp_enqueue_style( 'post-style', get_template_directory_uri() . '/assets/css/post.min.css', array(), '1.0.0', 'all' );

    elseif( is_archive() || is_tag() || is_category() ):

        wp_enqueue_style( 'stack-style', get_template_directory_uri() . '/assets/css/stack.min.css', array(), '1.0.0', 'all' );

    endif;
}

// Chama o procedimento
add_action( 'wp_enqueue_scripts', 'wezen_scripts_styles' );