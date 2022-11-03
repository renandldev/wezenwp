<?php 
/**
 * 
 * Arquivo que carrega as principais ativações e manipulações do tema
 * 
 * @package wezenwp
 * 
 * @since 1.0.0
 * 
 */

/**
 * 
 * Retorna o template
 * 
 * @since 1.0.0
 * 
 */
function wezen_get_template( $slug ){

    // Concatena o primeiro termo para buscar a pasta em template
    $plural = $slug . 's';

    // Cria o caminho para os arquivos
    $wezen_path = 'templates/' . $plural . '/' . $slug;

    // Condiciona o retorno para o tipo de página (Exceto rodapé, pois não possui variações).
    if( $slug == 'footer' ):

        $wezen_arg  = 'main';

    elseif( is_page() ):

        $wezen_arg = 'pages';

    elseif( is_home() ):

        $wezen_arg = 'home';

    elseif( is_front_page() ):

        $wezen_arg = 'front';

    elseif( is_search() ):

        $wezen_arg = 'search';

    elseif( is_singular() ):

        $wezen_arg = 'single';

    elseif( is_archive() || is_tag() || is_category() ):

        $wezen_arg = 'archives';

    endif;

    // Retorna o arquivo
    get_template_part( $wezen_path, $wezen_arg );

}

/**
 * 
 * Procedimento que retorna uma parte do tema
 * 
 * @since 1.0.0
 * 
 */
function wezen_get_part( $part, $arg ){

    // Transforma a parte solicitada do singular para o plural, acessando a pasta
    $plural = 'parts/' . $part . 's/' . $part;

    get_template_part( $plural, $arg );

}

/**
 * 
 * Adiciona classes ao link de menu
 * 
 */
function wezen_link_classes( $atts, $item, $args ){

    $atts[ 'class' ] = 'menu-link';

    return $atts;

}

/**
 * 
 * Chama a função
 * 
 */
add_filter( 'nav_menu_link_attributes', 'wezen_link_classes', 10, 3 );
