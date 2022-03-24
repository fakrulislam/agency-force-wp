<?php
/*
 * Header: Primary
 * Outputs primary header contents
 *
 * @version 1.0
 * @since agencyforcewp 1.0
 */
 ?>
<section class="af-header-primary-section">
    <div class="af-container">
        <div class="af-header-trnsparent">
            <div class="af-logo af-floatleft">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" >
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="agency force" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                </a>
            </div>
            <div class="af-navigation af-floatleft">
                <div class="af-nav" id="afnav">
                    <?php /* Primary navigation */
                        wp_nav_menu( array(
                          'theme_location' => 'primary-menu',
                          'depth' => 1,
                          'container' => false,
                          'fallback_cb' => ''
                          )
                        );
                    ?>
                </div>
                <a href="javascript:void(0);" class="af-mobile-toggle-icon" onclick="afToggleIcon()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="af-header-button af-floatright">
                <a href="#">Let's Talk</a>
            </div>
        </div>
    </div>
</section> <!-- header section -->
