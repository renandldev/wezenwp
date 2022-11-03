<?php 
/**
 * 
 * Formulário de busca
 * 
 * @package wezenwp
 * 
 * @since 1.0.0
 * 
 */?>
<form class="form-search" action="<?php echo esc_url( home_url( '/' ) );?>" method="get" role="search">
    <input type="text" class="input-search" placeholder="Procurando algo?" value="<?php echo get_search_query(); ?>" name="s">
    <button class="button-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>
