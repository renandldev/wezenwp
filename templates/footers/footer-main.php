<?php 
/**
 * 
 * Rodapé principal
 * 
 * @package wezenwp
 * 
 * @since 1.0.0
 * 
 */?>
        <footer id="main-footer" class="primal-footer">
            <div id="row-up" class="footer-row">
                <?php 
                wezen_get_part( 'navbar', 'footer1' );

                wezen_get_part( 'navbar', 'footer2' );

                wezen_get_part( 'navbar', 'footer3' );
                ?>
                <div class="mark-box">
                    <?php 
                    if( has_nav_menu( 'social' ) ):

                        $social_name = wp_get_nav_menu_name( 'social' );

                        print( '<h4 class="social-menu-name">' . $social_name . '</h4>' );
                        wp_nav_menu(
                            array(
                                'theme_location' => 'social',
                                'menu_id'        => 'social-section',
                                'menu_class'     => 'social inline',
                                'fallback_cb'    => false
                            )
                        );
                    endif;
                    ?>
                </div>
            </div>
            <div id="row-down" class="footer-row">

            </div>
        </footer>
        <?php 
        wp_footer();
        ?>
    </body>
</html>
