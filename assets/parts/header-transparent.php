<?php
/*
 * Transparent Header
 * Outputs transparent header contents (logo, menu, button)
 *
 * @version 1.0
 * @since agencyforcewp 1.0
 */
 ?>
<section class="af-header-transparent-section">
    <div class="af-container">
        <div class="af-header-trnsparent">
            <div class="af-logo af-floatleft">
                <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                    the_custom_logo();
                } ?>
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
                <?php
                    $btn_text = get_theme_mod( 'afwp_header_button_text', '' );
                    $btn_url  = get_theme_mod( 'afwp_header_button_url', '' );
                    if ( $btn_text != null && $btn_url != null ): ?>
                        <a href="<?php echo esc_url($btn_url);?>"><?php echo $btn_text; ?></a>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
