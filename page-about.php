<?php
/*************
 * Template Name: About page
 * Desc: Outputs about page contents
 *
 * @package  		 agencyforcewp
 * @file     		 home.php
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
            <?php $aboutpage_title = esc_html( get_theme_mod('afwp_aboutpage_title', '') );
                if ( $aboutpage_title != null ): ?>
            <h1><?php echo $aboutpage_title; ?></h1>
        <?php else: ?>
            <h1><?php the_title(); ?></h1>
        <?php endif; ?>
        </div>
    </section>

    <!-- video section -->
    <section class="af-about-video-section clearfix">
        <div class="af-container">
            <div class="af-video-content-wrapper">
                <?php
                    $afwp_video_heading     = esc_html( get_theme_mod('afwp_aboutpage_video_heading', '') );
                    $afwp_video_subheading  = esc_html( get_theme_mod('afwp_aboutpage_video_subheading', '') );
                    $afwp_video_desc        = esc_html( get_theme_mod('afwp_aboutpage_video_desc', '') );
                    $afwp_video_img         = esc_html( get_theme_mod('afwp_aboutpage_video_img', '') );
                    $afwp_video_id          = esc_html( get_theme_mod('afwp_aboutpage_video_id', '') );
                ?>
                <div class="af-about-video-content af-floatleft">
                    <?php if ( $afwp_video_heading != null ): ?>
                        <h2><?php echo $afwp_video_heading; ?></h2>
                    <?php endif; ?>

                    <?php if ( $afwp_video_subheading != null ): ?>
                        <p class="af-video-subtitle"><?php echo $afwp_video_subheading; ?></p>
                    <?php endif; ?>

                    <?php if ( $afwp_video_desc != null ): ?>
                        <p><?php echo $afwp_video_desc; ?></p>
                    <?php endif; ?>
                </div>

                <div class="af-about-video af-floatright">
                    <?php if ( $afwp_video_img != null && $afwp_video_id != null ): ?>
                        <a href="#" class="video-thumb js-modal-btn" data-video-id="<?php echo $afwp_video_id; ?>">
                            <img src="<?php echo esc_url( $afwp_video_img ); ?>"/>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- icon box section -->
    <section class="af-icon-box-section">
        <div class="af-container">
            <div class="af-icon-box-content-wrapper clearfix">
                <?php $afwp_iconboxes = get_theme_mod('afwp_aboutpage_iconbox', '');
                    if ( $afwp_iconboxes != null ): ?>
                    <?php foreach ( $afwp_iconboxes as $iconbox ) : ?>
                        <div class="af-icon-box af-floatleft">
                            <?php if ( $iconbox['afwp_iconbox_icon'] != null ): ?>
                                <div class="af-iconbox-img">
                                    <img src="<?php echo esc_url( $iconbox['afwp_iconbox_icon'] ); ?>">
                                </div>
                            <?php endif; ?>
                            <div class="af-iconbox-content">
                                <?php if ( $iconbox['afwp_iconbox_title'] != null ): ?>
                                    <h3><?php echo esc_html( $iconbox['afwp_iconbox_title'] ); ?></h3>
                                <?php endif; ?>

                                <?php if ( $iconbox['afwp_iconbox_desc'] != null ): ?>
                                    <p><?php echo esc_html( $iconbox['afwp_iconbox_desc'] ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div> <!-- single icon box -->
                    <?php endforeach; ?>
            <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Carousel slider section -->
    <?php $afwp_aboutpage_carousel = get_theme_mod('afwp_aboutpage_carousel', '');
        if ( $afwp_aboutpage_carousel != null ): ?>
        <section class="af-project-slider-section">
            <div class="af-container">
                <div class="af-project-slider-content-wrapper clearfix">
                    <div class="owl-project owl-carousel">
                        <?php foreach ( $afwp_aboutpage_carousel as $afwp_carousel_item ) : ?>
                            <div class="af-project-slide-item item">
                                <div class="af-project-slide-content">
                                    <?php if ( $afwp_carousel_item['afwp_about_carousel_title'] != null ): ?>
                                        <h2><?php echo esc_html($afwp_carousel_item['afwp_about_carousel_title']); ?></h2>
                                    <?php endif; ?>

                                    <?php if ( $afwp_carousel_item['afwp_about_carousel_desc'] != null ): ?>
                                        <p><?php echo esc_html( $afwp_carousel_item['afwp_about_carousel_desc'] ); ?></p>
                                    <?php endif; ?>

                                    <?php if ( $afwp_carousel_item['afwp_about_carousel_btntext'] != null && $afwp_carousel_item['afwp_about_carousel_btnurl'] != null ): ?>
                                        <?php $carousel_btn_target = $afwp_carousel_item['afwp_about_carousel_btntarget']? '_blank' : '_self'; ?>
                                        <a href="<?php echo esc_url( $afwp_carousel_item['afwp_about_carousel_btnurl'] ); ?>" target="<?php echo $carousel_btn_target; ?>"><?php echo esc_html( $afwp_carousel_item['afwp_about_carousel_btntext'] ); ?></a>
                                    <?php endif; ?>

                                </div>
                                <div class="af-project-slide-img">
                                    <?php if ( $afwp_carousel_item['afwp_about_carousel_img'] != null ): ?>
                                        <a href="#"><img src="<?php echo esc_url( $afwp_carousel_item['afwp_about_carousel_img'] ); ?>"></a>
                                    <?php endif; ?>
                                </div>
                            </div> <!-- project slide item -->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- call to action section -->
    <?php
    $afwp_aboutpage_callout_text        = esc_html( get_theme_mod('afwp_aboutpage_calltoaction_text', '') );
    $afwp_aboutpage_callout_btntext     = esc_html( get_theme_mod('afwp_aboutpage_calltoaction_btntext', '') );
    $afwp_aboutpage_callout_btnurl      = esc_html( get_theme_mod('afwp_aboutpage_calltoaction_btnurl', '') );
    $afwp_aboutpage_callout_btntarget   = esc_html( get_theme_mod('afwp_aboutpage_calltoaction_btntarget', '') );

        if ( $afwp_aboutpage_callout_text != null ): ?>
        <section class="af-about-calltoaction-section">
            <div class="af-about-calltoaction-bglayer">
                <div class="af-container">
                    <div class="af-calltoaction-wrapper clearfix">
                        <div class="af-calltoaction-title">
                            <?php if ( $afwp_aboutpage_callout_text != null ): ?>
                                <h2><?php echo $afwp_aboutpage_callout_text; ?></h2>
                            <?php endif; ?>
                        </div>
                        <div class="af-calltoaction-button">
                            <?php if ( $afwp_aboutpage_callout_btntext != null && $afwp_aboutpage_callout_btnurl != null): ?>
                                <?php $callout_button_target = $afwp_aboutpage_callout_btntarget? '_blank' : '_self'; ?>
                                <a href="<?php echo $afwp_aboutpage_callout_btnurl; ?>" target="<?php echo $callout_button_target; ?>"><?php echo $afwp_aboutpage_callout_btntext; ?> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- team section -->
    <section class="af-team-section">
        <div class="af-container">
            <div class="af-team-content-wrapper clearfix">
                <?php
                    $afwp_team_sec_heading          = esc_html( get_theme_mod('afwp_aboutpage_team_sec_heading', '') );
                    $afwp_team_sec_subheading       = esc_html( get_theme_mod('afwp_aboutpage_team_sec_subheading', '') );
                    $afwp_about_team                = get_theme_mod('afwp_aboutpage_team', '');
                ?>
                <div class="af-team-title">
                    <?php if ( $afwp_team_sec_heading != null ): ?>
                        <h2><?php echo $afwp_team_sec_heading; ?></h2>
                    <?php endif; ?>

                    <?php if ( $afwp_team_sec_subheading != null ): ?>
                        <p><?php echo $afwp_team_sec_subheading; ?></p>
                    <?php endif; ?>
                </div>

                <div class="af-team-member-wrapper">
                    <?php if ( $afwp_about_team != null ): ?>
                        <?php foreach ( $afwp_about_team as $team_member ): ?>
                            <div class="af-single-team-card af-floatleft">
                                <?php if ( $team_member['afwp_about_team_img'] != null ): ?>
                                    <img src="<?php echo esc_url( $team_member['afwp_about_team_img'] ); ?>" alt="<?php echo esc_attr( $team_member['afwp_about_team_name'] ); ?>">
                                <?php endif; ?>

                                <?php if ( $team_member['afwp_about_team_designation'] != null ): ?>
                                    <h4><?php echo esc_html( $team_member['afwp_about_team_designation'] ); ?></h4>
                                <?php endif; ?>

                                <?php if ( $team_member['afwp_about_team_name'] != null ): ?>
                                    <h3><?php echo esc_html( $team_member['afwp_about_team_name'] ); ?></h3>
                                <?php endif; ?>

                                <?php if ( $team_member['afwp_about_team_desc'] != null ): ?>
                                    <p><?php echo esc_html( $team_member['afwp_about_team_desc'] ); ?></p>
                                <?php endif; ?>

                                <?php if ( $team_member['afwp_about_team_fb'] != null || $team_member['afwp_about_team_twitter'] != null || $team_member['afwp_about_team_instagram'] != null ): ?>
                                    <div class="af-team-social-icon-wrapper">
                                        <?php if ( $team_member['afwp_about_team_fb'] != null ): ?>
                                            <a href="<?php echo esc_url( $team_member['afwp_about_team_fb'] ); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <?php endif; ?>

                                        <?php if ( $team_member['afwp_about_team_twitter'] != null ): ?>
                                            <a href="<?php echo esc_url( $team_member['afwp_about_team_twitter'] ); ?>" target="_blank" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <?php endif; ?>

                                        <?php if ( $team_member['afwp_about_team_instagram'] != null ): ?>
                                            <a href="<?php echo esc_url( $team_member['afwp_about_team_instagram'] ); ?>" target="_blank" ><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <?php endif; ?>

                                        <?php if ( $team_member['afwp_about_team_linkedin'] != null ): ?>
                                            <a href="<?php echo esc_url( $team_member['afwp_about_team_linkedin'] ); ?>" target="_blank" ><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        <?php endif; ?>

                                    </div>
                            <?php endif; ?>
                            </div> <!-- single team card -->
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

    <!-- testimonial Section -->
    <section class="af-about-testimonial-section">
        <div class="af-container">
            <?php
                $afwp_testimonial_sec_heading       = esc_html( get_theme_mod('afwp_aboutpage_testimonial_sec_heading', '') );
                $afwp_testimonial_sec_subheading    = esc_html( get_theme_mod('afwp_aboutpage_testimonial_sec_subheading', '') );
                $afwp_testimonial_img               = esc_html( get_theme_mod('afwp_aboutpage_testimonial_image', '') );
                $afwp_testimonial_box_img           = esc_html( get_theme_mod('afwp_aboutpage_testimonial_box_image', '') );
                $afwp_testimonial_box_title         = esc_html( get_theme_mod('afwp_aboutpage_testimonial_box_title', '') );
                $afwp_testimonial_box_subtitle      = esc_html( get_theme_mod('afwp_aboutpage_testimonial_box_subtitle', '') );
                $afwp_testimonial_text              = esc_html( get_theme_mod('afwp_aboutpage_testimonial_text', '') );
                $afwp_testimonial_rating            = get_theme_mod('afwp_aboutpage_testimonial_rating', false);
            ?>
            <div class="af-about-testimonial-title">
                <?php if ( $afwp_testimonial_sec_heading != null ): ?>
                    <h2><?php echo $afwp_testimonial_sec_heading; ?></h2>
                <?php endif; ?>

                <?php if ( $afwp_testimonial_sec_subheading != null ): ?>
                    <p><?php echo $afwp_testimonial_sec_subheading; ?></p>
                <?php endif; ?>
            </div>
            <div class="af-about-testimonial-content-wrapper clearfix">
                <div class="af-about-testimonial-thumb af-floatleft">
                    <div class="af-about-testimonial-client-img">
                        <?php if ( $afwp_testimonial_img != null ): ?>
                            <img src="<?php echo esc_url( $afwp_testimonial_img ); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="af-about-testimonial-brand-logo-wrapper clearfix">
                        <div class="af-about-testimonial-brand-logo">
                            <?php if ( $afwp_testimonial_box_img != null ): ?>
                                <img src="<?php echo esc_url( $afwp_testimonial_box_img ); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="af-about-testimonial-brand-logo-content">
                            <?php if ( $afwp_testimonial_box_title != null ): ?>
                                <h4><?php echo $afwp_testimonial_box_title; ?></h4>
                            <?php endif; ?>

                            <?php if ( $afwp_testimonial_box_subtitle != null ): ?>
                                <p><?php echo $afwp_testimonial_box_subtitle; ?></p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div> <!-- client image & brand logo -->

                <div class="af-about-testimonial-content af-floatright">
                    <?php if ( $afwp_testimonial_text != null ): ?>
                        <p><?php echo $afwp_testimonial_text; ?></p>
                    <?php endif; ?>

                    <?php if ( $afwp_testimonial_rating != true ): ?>
                        <div class="af-about-testimonial-rating-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/star.svg" alt="rating">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/star.svg" alt="rating">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/star.svg" alt="rating">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/star.svg" alt="rating">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/star-gray.svg" alt="rating">
                        </div>
                    <?php endif; ?>
                </div> <!-- testimonial content-->
            </div>
        </div>
    </section>

    <!-- logo section -->
    <?php $afwp_aboutpage_logo_gallery = get_theme_mod('afwp_aboutpage_logo', '');
    if ( $afwp_aboutpage_logo_gallery != null ): ?>
        <section class="af-about-logo-section">
            <div class="af-container">
                <div class="af-about-logo-wrapper">
                    <?php foreach ($afwp_aboutpage_logo_gallery as $about_logo_item): ?>
                        <img src="<?php echo esc_url( $about_logo_item['afwp_about_logo_img'] ); ?>">
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php get_footer(); ?>
</body>

</html>
