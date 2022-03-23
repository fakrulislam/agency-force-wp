<?php
/*************
 * Template Name: Service page
 * Desc: Outputs service page contents
 *
 * @package  		 agencyforcewp
 * @file     		 service.php
 * @version          1.0
 * @since            agencyforcewp 1.0
 * @author   		 MD FAKRUL ISLAM
 * @Author URL 	     https://fakrulislam.me
 ***************/

get_header(); ?>

<body <?php body_class(); ?> >

    <!-- Header: Transparent-->
    <?php get_template_part('assets/parts/header-transparent'); ?>

    <!-- hero section-->
    <section class="af-primary-hero-section">
        <div class="af-container">
            <?php $servicepage_title = esc_html( get_theme_mod('afwp_servicepage_title', '') );
                if ( $servicepage_title != null ): ?>
            <h1><?php echo $servicepage_title; ?></h1>
        <?php else: ?>
            <h1><?php the_title(); ?></h1>
        <?php endif; ?>
        </div>
    </section>

    <!-- service box section -->
    <?php get_template_part('assets/parts/service-box'); ?>

    <!-- Service icon box section -->
    <?php $af_servicepage_iconboxes = get_theme_mod('afwp_servicepage_iconbox');
    if ( $af_servicepage_iconboxes != null ): ?>
        <section class="af-service-icon-box-section">
            <div class="af-container">
                <div class="af-service-icon-box-wrapper clearfix">

                    <?php foreach ($af_servicepage_iconboxes as $af_service_iconbox): ?>
                        <div class="af-service-icon-box-item">
                            <?php if ( $af_service_iconbox['afwp_servicepage_iconbox_icon'] != null ): ?>
                                <img src="<?php echo esc_url($af_service_iconbox['afwp_servicepage_iconbox_icon']); ?>">
                            <?php endif; ?>

                            <?php if ( $af_service_iconbox['afwp_servicepage_iconbox_title'] != null ): ?>
                                <h3><?php echo esc_html($af_service_iconbox['afwp_servicepage_iconbox_title']); ?></h3>
                            <?php endif; ?>

                            <?php if ( $af_service_iconbox['afwp_servicepage_iconbox_desc'] != null ): ?>
                                <p><?php echo esc_html($af_service_iconbox['afwp_servicepage_iconbox_desc']); ?></p>
                            <?php endif; ?>
                        </div> <!-- icon box -->
                    <?php endforeach; ?>

                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- feature sections (top & bottom) -->
    <?php get_template_part('assets/parts/feature-sections'); ?>

    <!-- footer callout -->
    <?php get_template_part('assets/parts/footer-callout'); ?>

    <?php get_footer(); ?>
</body>

</html>
