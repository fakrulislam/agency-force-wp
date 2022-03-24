<?php
/*************
 * Template Name: Contact page
 * Desc: Outputs about page contents
 *
 * @package  		 agencyforcewp
 * @file     		 page-contact.php
 * @version          1.0
 * @since            agencyforcewp 1.0
 * @author   		 MD FAKRUL ISLAM
 * @Author URL 	     https://fakrulislam.me
 ***************/

get_header(); ?>

<body <?php body_class(); ?> >

    <!-- Header: Primary -->
    <?php get_template_part('assets/parts/header'); ?>

    <section class="af-contact-content-section clearfix">
        <div class="af-container">

            <div class="af-contact-map">
                <?php $af_contact_hero_img = esc_url( get_theme_mod('afwp_contact_page_img', '') ); ?>
                    <?php if ( $af_contact_hero_img != null ): ?>
                        <img src="<?php echo $af_contact_hero_img; ?>">
                    <?php endif; ?>
            </div>

            <div class="af-contact-info-wrapper">
                <div class="af-contact-form-wrapper">
                    <?php
                    $af_contact_title           = esc_html( get_theme_mod('afwp_contact_form_title', '') );
                    $af_contact_desc            = esc_html( get_theme_mod('afwp_contact_form_desc', '') );
                    $af_contact_form_shortcode  = get_theme_mod('afwp_contact_form_shortcode', '');
                    $af_contact_address         = esc_html( get_theme_mod('afwp_contact_page_address', '') );
                    $af_contact_phone           = esc_html( get_theme_mod('afwp_contact_page_phone', '') );
                    $af_contact_email           = esc_html( get_theme_mod('afwp_contact_page_email', '') );
                    ?>

                    <?php if ( $af_contact_title != null ): ?>
                        <h1><?php echo $af_contact_title; ?></h1>
                    <?php endif; ?>

                    <?php if ( $af_contact_desc != null ): ?>
                        <p><?php echo $af_contact_desc; ?></p>
                    <?php endif; ?>

                    <?php if ( $af_contact_form_shortcode != null ): ?>
                        <?php echo do_shortcode( ''.$af_contact_form_shortcode.'' ); ?>
                    <?php endif; ?>
                </div>

                <div class="af-contact-info">
                    <ul>
                        <?php if ( $af_contact_address != null ): ?>
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <p><?php echo $af_contact_address; ?></p>
                            </li>
                        <?php endif; ?>

                        <?php if ( $af_contact_phone != null ): ?>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p><?php echo $af_contact_phone; ?></p>
                            </li>
                        <?php endif; ?>

                        <?php if ( $af_contact_email != null ): ?>
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p><?php echo $af_contact_email; ?></p>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section> <!-- content section -->

    <?php get_footer(); ?>
</body>

</html>
