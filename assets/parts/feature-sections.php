<?php
/*
 * Image Feature Section
 * Outputs image features section contents in home & service pages
 *
 * @version 1.0
 * @since agencyforcewp 1.0
 */
 ?>
<!-- feature (top) section -->
<section class="af-feature-section-top clearfix <?php if ( is_page_template('page-service.php') ): echo 'af-service-page-feature-section-top'; endif; ?>">
    <div class="af-container">
        <div class="af-feature-top-wrapper">
            <?php
                $imagebox_1_img         = esc_url( get_theme_mod('afwp_home_imagebox_1_img', '') );
                $imagebox_1_title       = esc_html( get_theme_mod('afwp_home_imagebox_1_title', '') );
                $imagebox_1_subtitle    = esc_html( get_theme_mod('afwp_home_imagebox_1_subtitle', '') );
                $imagebox_1_desc        = esc_html( get_theme_mod('afwp_home_imagebox_1_desc', '') );
                $imagebox_1_btntext     = esc_html( get_theme_mod('afwp_home_imagebox_1_btntext', '') );
                $imagebox_1_btnurl      = esc_url( get_theme_mod('afwp_home_imagebox_1_btnurl', '') );
            ?>
            <div class="af-feature-top-img af-floatleft">
                <?php if ( $imagebox_1_img != null ): ?>
                    <img src="<?php echo $imagebox_1_img; ?>" alt="<?php echo $imagebox_1_title; ?>">
                <?php endif; ?>
            </div>
            <div class="af-feature-top-content af-floatleft">
                <?php if ( $imagebox_1_title != null ): ?>
                    <h2><?php echo $imagebox_1_title; ?></h2>
                <?php endif; ?>

                <?php if ( $imagebox_1_subtitle != null ): ?>
                    <h6><?php echo $imagebox_1_subtitle; ?></h6>
                <?php endif; ?>

                <?php if ( $imagebox_1_desc != null ): ?>
                    <p><?php echo $imagebox_1_desc; ?></p>
                <?php endif; ?>

                <?php if ( $imagebox_1_btntext != null && $imagebox_1_btnurl != null ): ?>
                    <a href="<?php echo $imagebox_1_btnurl; ?>" target="_self"><?php echo $imagebox_1_btntext; ?></a>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<!-- feature (bottom) section -->
<section class="af-feature-section-bottom clearfix <?php if ( is_page_template('page-service.php') ): echo 'af-service-page-feature-section-bottom'; endif; ?>">
    <div class="af-container">
        <?php
            $imagebox_2_img             = esc_url( get_theme_mod('afwp_home_imagebox_2_img', '') );
            $imagebox_2_title           = esc_html( get_theme_mod('afwp_home_imagebox_2_title', '') );
            $imagebox_2_desc            = esc_html( get_theme_mod('afwp_home_imagebox_2_desc', '') );
            $imagebox_2_iconboxes       = get_theme_mod('afwp_home_imagebox_2_iconbox', '');
        ?>
        <div class="af-feature-bottom-wrapper">
            <div class="af-feature-bottom-content af-floatleft">
                <?php if ( $imagebox_2_title != null ): ?>
                    <h2><?php echo $imagebox_2_title; ?></h2>
                <?php endif; ?>

                <?php if ( $imagebox_2_desc != null ): ?>
                    <p><?php echo $imagebox_2_desc; ?></p>
                <?php endif; ?>

                <!-- icon box loop-->
                <?php if ( $imagebox_2_iconboxes != null ): ?>
                    <?php foreach ( $imagebox_2_iconboxes as $icon_box ) : ?>
                        <div class="af-icon-box-wrapper">
                            <div class="af-icon-box-img af-floatleft">
                                <?php if ( $icon_box['afwp_home_imagebox_2_iconbox_img'] != null ): ?>
                                    <img src="<?php echo esc_url( $icon_box['afwp_home_imagebox_2_iconbox_img'] ); ?>" alt="<?php echo $imagebox_2_title; ?>">
                                <?php endif; ?>
                            </div>
                            <div class="af-icon-box-content">
                                <?php if ( $icon_box['afwp_home_imagebox_2_iconbox_title'] != null ): ?>
                                    <h4><?php echo esc_html( $icon_box['afwp_home_imagebox_2_iconbox_title'] ); ?></h4>
                                <?php endif; ?>

                                <?php if ( $icon_box['afwp_home_imagebox_2_iconbox_desc'] != null ): ?>
                                    <p><?php echo esc_html( $icon_box['afwp_home_imagebox_2_iconbox_desc'] ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="af-feature-bottom-img af-floatleft">
                <?php if ( $imagebox_2_img != null ): ?>
                    <img src="<?php echo $imagebox_2_img; ?>" alt="<?php echo $imagebox_2_title; ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
