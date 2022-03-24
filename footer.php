<section class="af-footer-top-border"></section>
<section class="af-footer-section">
    <div class="af-container">
        <div class="af-footer-top clearfix">
            <?php dynamic_sidebar('agencyforcewp_footer_widget1'); ?>
            <?php dynamic_sidebar('agencyforcewp_footer_widget2'); ?>
            <?php dynamic_sidebar('agencyforcewp_footer_widget3'); ?>
            <?php dynamic_sidebar('agencyforcewp_footer_widget4'); ?>
        </div>

        <div class="af-footer-bottom clearfix">
            <div class="af-footer-social-links">
                <?php
                $footer_fb          = esc_url( get_theme_mod('afwp_footer_social_fb', '') );
                $footer_twitter     = esc_url( get_theme_mod('afwp_footer_social_twitter', '') );
                $footer_instagram   = esc_url( get_theme_mod('afwp_footer_social_instagram', '') );
                $footer_copyright   = esc_html( get_theme_mod('afwp_footer_copyright', '') );
                ?>

                <?php if ( $footer_fb != null ): ?>
                    <a href="<?php echo $footer_fb; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="facebook"></a>
                <?php endif; ?>

                <?php if ( $footer_twitter != null ): ?>
                    <a href="<?php echo $footer_fb; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.svg" alt="twitter"></a>
                <?php endif; ?>

                <?php if ( $footer_instagram != null ): ?>
                    <a href="<?php echo $footer_instagram; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="instagram"></a>
                <?php endif; ?>

            </div>
            <div class="af-footer-copyright">
                <?php if ( $footer_copyright != null ): ?>
                    <p><?php echo $footer_copyright; ?></p>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section> <!-- footer section-->

<?php wp_footer();?>
