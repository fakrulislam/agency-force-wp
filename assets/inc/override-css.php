<?php
/*
 * 	This file contains dynamic css
 *  Override theme main style.css
 *
 *	@version 1.0
 *	@since agencyforcewp 1.0
 */
function afwp_override_css(){
    /*
     * Outputs an unique background image for service box
     *
     * Store all service-boxes as an array to $home_service_bx variable.
     * Than access each value/service-box of the array via foreach loop.
     *
     * Note: "$box_id" adds an unique css class to each service-box
     * Ex: service-box-item-bg0, service-box-item-bg1 & so on.
     */
    $home_service_box = get_theme_mod( 'afwp_homepage_service_box', '' );
    if ( $home_service_box != null ):
        $box_id = 0;
        foreach ( $home_service_box as $service_box ) :
            $bg_url = $service_box['afwp_homepage_service_box_bg_img'];
            $service_box_bg	=
        		'<style type="text/css">
                    .service-box-item-bg'.$box_id.'{
                        Background-image: url('.$bg_url.');
                        background-repeat: no-repeat;
                        background-position: top right;
                        background-size: 80px 80px;
                    }
                </style>';
                echo $service_box_bg;
                $box_id++;
        endforeach;
    endif;
}
add_action( 'wp_head', 'afwp_override_css' );
