<?php 
/**
 * 
 * Cabeçalhos para posts temporais exibidos solo
 * 
 * @package wezenwp
 * 
 * @since 1.0.0
 * 
 */?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head();?>
    </head>
    <body id="post-body" class="">
        <?php wezen_get_part( 'navbar', 'top' );?>
        <header id="single-header" class="header-full" role="banner">
            <?php the_post_thumbnail( 'full', [ 'class' => 'img-header', 'title' => get_the_title() ] );?>
        </header>
