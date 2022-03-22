<?php
/*
 * Load Site scripts - CSS & jQuery
 */
function afwp_scripts() {
    // comment reply js
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
	// font awesome
	wp_enqueue_script( 'afwp_fontawesome', '//use.fontawesome.com/d83818647f.js', false, null, false );
    // OWL carousel
    wp_enqueue_script( 'afwp_owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true );
    // Video modal
    wp_enqueue_script( 'afwp_video_modal', get_template_directory_uri() . '/assets/js/modal-video.min.js', array('jquery'), null, true );
    // html5-boilerplate
    wp_enqueue_script( 'afwp_html5_boilerplate', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.11.2.min.js', array('jquery'), null, true );
    // Site main js
    wp_enqueue_script( 'afwp_mainjs', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );

	/* Css styles */
    // html5-boilerplate - normalize
    wp_enqueue_style( 'afwp_normalize', get_template_directory_uri() . '/assets/css/normalize.css');
    // google fonts
	wp_enqueue_style( 'afwp_googlefonts','//fonts.googleapis.com/css?family=Work+Sans|Sofia|Trirong','all' );
	// theme main styles
    wp_enqueue_style( 'afwp_main_style', get_template_directory_uri() . '/style.css','all' );
    // responsive styles
    wp_enqueue_style( 'afwp_responsive_style', get_template_directory_uri() . '/assets/css/responsive.css');
    // video modal
    wp_enqueue_style( 'afwp_video_modal', get_template_directory_uri() . '/assets/css/modal-video.min.css');
    // owl carouse
    wp_enqueue_style( 'afwp_owl_style', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');

}
add_action( 'wp_enqueue_scripts', 'afwp_scripts' );
