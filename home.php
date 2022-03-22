<?php
/*************
 * Template Name: Home page
 * Desc: Outputs home page contents
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

    <section class="af-home-hero-section clearfix">
        <div class="af-home-hero-bg-layer">

            <div class="af-container">
                <div class="af-hero-content af-floatleft ">
                    <?php
                        $hero_img         = get_theme_mod('afwp_hero_img', '');
                        $hero_title       = get_theme_mod('afwp_hero_heading_text', '');
                        $hero_desc        = get_theme_mod('afwp_hero_short_desc', '');
                        $hero_btn_text    = get_theme_mod('afwp_hero_button_text', '');
                        $hero_btn_url     = get_theme_mod('afwp_hero_button_url', '');
                        $hero_video_id    = get_theme_mod('afwp_hero_video_id', '');

                        if( $hero_title != null ): ?>
                            <h1><?php echo $hero_title ?></h1>
                    <?php endif; ?>

                    <?php if( $hero_desc != null ): ?>
                        <p><?php echo $hero_desc ?></p>
                    <?php endif; ?>

                    <?php if( $hero_btn_text != null && $hero_btn_url != null ): ?>
                        <a href="<?php echo $hero_btn_url; ?>" class="af-hero-button"><?php echo $hero_btn_text; ?></a>
                    <?php endif; ?>

                    <?php if( $hero_video_id != null ): ?>
                        <a href="#" class="af-video-icon js-modal-btn" data-video-id="<?php echo $hero_video_id; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play-icon.svg"/>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="af-hero-img af-floatright">
                    <?php if( $hero_img != null ): ?>
                        <img src="<?php echo $hero_img; ?>" alt="<?php echo $hero_title; ?>"/>
                    <?php endif; ?>
                </div>
            </div>
            <div class="af-hero-empty-space"></div>
        </div>
    </section> <!-- hero section-->

    <?php $home_logos = get_theme_mod( 'afwp_homepage_logo_gallery', '' );
        if ($home_logos != null):  ?>
            <section class="af-logo-showcase-section">
                <div class="af-container">
                    <div class="af-logo-showcase">
                        <?php foreach ( $home_logos as $logo ) : ?>
                            <img src="<?php echo $logo['logo_url']; ?>" alt="brand logo">
                    	<?php endforeach; ?>
                    </div>
                </div>
            </section>
    <?php endif; ?> <!-- logo section -->

    <section class="af-service-box-section clearfix">
        <div class="af-container">
            <div class="af-service-boxes-container">
                <?php
                    $home_service_heading       = get_theme_mod('afwp_homepage_services_heading', '');
                    $home_service_subheading    = get_theme_mod('afwp_homepage_services_subtitle', '');
                    $home_service_box           = get_theme_mod('afwp_homepage_service_box', '');

                    if ($home_service_heading != null): ?>
                        <h2><?php echo $home_service_heading; ?></h2>
                <?php endif;
                    if ($home_service_subheading != null): ?>
                        <p><?php echo $home_service_subheading; ?></p>
                <?php endif; ?>
                <!-- Service box container -->
                <?php $home_service_box = get_theme_mod( 'afwp_homepage_service_box', '' );
                    if ( $home_service_box != null ):  ?>
                    <div class="af-service-boxes">
                        <?php
                        /*
                         * $box_id counter adds an unique class to each service box dynamically.
                         * First we assigned the variable with 0 value, than incremented
                         * it with each loop.
                         */
                        $box_id = 0; ?>
                        <?php foreach ( $home_service_box as $service_box ) : ?>
                            <!-- single service box -->
                            <div class="af-service-box-item service-box-item-bg<?php echo $box_id; ?>">
                                <img src="<?php echo $service_box['afwp_homepage_service_box_img']; ?>" alt="product management">

                                <?php if ( $service_box['afwp_homepage_service_box_title'] != null): ?>
                                    <h3><?php echo $service_box['afwp_homepage_service_box_title']; ?></h3>
                                <?php endif; ?>

                                <?php if ( $service_box['afwp_homepage_service_box_desc'] != null): ?>
                                    <p><?php echo $service_box['afwp_homepage_service_box_desc']; ?></p>
                                <?php endif; ?>

                                <ul>
                                    <?php if ( $service_box['afwp_homepage_service_box_list1'] != null): ?>
                                        <li>
                                            <img src="<?php echo $service_box['afwp_homepage_service_box_list_icon']; ?>" alt="<?php echo $service_box['afwp_homepage_service_box_list1']; ?>">
                                            <p><?php echo $service_box['afwp_homepage_service_box_list1']; ?></p>
                                        </li>
                                    <?php endif; ?>

                                    <?php if ( $service_box['afwp_homepage_service_box_list2'] != null): ?>
                                        <li>
                                            <img src="<?php echo $service_box['afwp_homepage_service_box_list_icon']; ?>" alt="<?php echo $service_box['afwp_homepage_service_box_list2']; ?>">
                                            <p><?php echo $service_box['afwp_homepage_service_box_list2']; ?></p>
                                        </li>
                                    <?php endif; ?>

                                    <?php if ( $service_box['afwp_homepage_service_box_list3'] != null): ?>
                                        <li>
                                            <img src="<?php echo $service_box['afwp_homepage_service_box_list_icon']; ?>" alt="<?php echo $service_box['afwp_homepage_service_box_list3']; ?>">
                                            <p><?php echo $service_box['afwp_homepage_service_box_list3']; ?></p>
                                        </li>
                                    <?php endif; ?>

                                    <?php if ( $service_box['afwp_homepage_service_box_list4'] != null): ?>
                                        <li>
                                            <img src="<?php echo $service_box['afwp_homepage_service_box_list_icon']; ?>" alt="<?php echo $service_box['afwp_homepage_service_box_list4']; ?>">
                                            <p><?php echo $service_box['afwp_homepage_service_box_list4']; ?></p>
                                        </li>
                                    <?php endif; ?>

                                    <?php if ( $service_box['afwp_homepage_service_box_list5'] != null): ?>
                                        <li>
                                            <img src="<?php echo $service_box['afwp_homepage_service_box_list_icon']; ?>" alt="<?php echo $service_box['afwp_homepage_service_box_list5']; ?>">
                                            <p><?php echo $service_box['afwp_homepage_service_box_list5']; ?></p>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <!-- end single service box -->
                            <?php $box_id++ ?>
                        <?php endforeach; ?>
                    </div> <!-- Eng service box container -->
                <?php endif; ?>
            </div>
        </div>
    </section> <!-- service box section -->

    <section class="af-feature-section-top clearfix">
        <div class="af-container">
            <div class="af-feature-top-wrapper">
                <?php
                    $imagebox_1_img         = get_theme_mod('afwp_home_imagebox_1_img', '');
                    $imagebox_1_title       = get_theme_mod('afwp_home_imagebox_1_title', '');
                    $imagebox_1_subtitle    = get_theme_mod('afwp_home_imagebox_1_subtitle', '');
                    $imagebox_1_desc        = get_theme_mod('afwp_home_imagebox_1_desc', '');
                    $imagebox_1_btntext     = get_theme_mod('afwp_home_imagebox_1_btntext', '');
                    $imagebox_1_btnurl      = get_theme_mod('afwp_home_imagebox_1_btnurl', '');
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
    </section> <!-- home feature (top) section -->

    <section class="af-feature-section-bottom clearfix">
        <div class="af-container">
            <?php
                $imagebox_2_img         = get_theme_mod('afwp_home_imagebox_2_img', '');
                $imagebox_2_title       = get_theme_mod('afwp_home_imagebox_2_title', '');
                $imagebox_2_desc        = get_theme_mod('afwp_home_imagebox_2_desc', '');
                $imagebox_2_iconboxes     = get_theme_mod('afwp_home_imagebox_2_iconbox', '');
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
                                        <img src="<?php echo $icon_box['afwp_home_imagebox_2_iconbox_img']; ?>" alt="<?php echo $imagebox_2_title; ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="af-icon-box-content">
                                    <?php if ( $icon_box['afwp_home_imagebox_2_iconbox_title'] != null ): ?>
                                        <h4><?php echo $icon_box['afwp_home_imagebox_2_iconbox_title']; ?></h4>
                                    <?php endif; ?>

                                    <?php if ( $icon_box['afwp_home_imagebox_2_iconbox_desc'] != null ): ?>
                                        <p><?php echo $icon_box['afwp_home_imagebox_2_iconbox_desc']; ?></p>
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
    </section> <!-- home feature (bottom) section -->

    <?php $afwp_home_testimonials = get_theme_mod('afwp_home_testimonial', '');
    if ( $afwp_home_testimonials != null ): ?>
        <section class="af-testimonial-section clearfix">
            <div class="af-testimonial-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonail-vector.svg" alt="testimonial" class="af-top-right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonail-vector.svg" alt="testimonial" class="af-bottom-left">
                <div class="af-testimonial-content-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-quote.svg" alt="testimonial">
                    <div class="owl-carousel">
                        <?php foreach ($afwp_home_testimonials as $afwp_testimonial_item): ?>
                            <div class="af-carousel-item">
                                <div class="af-testimonial-img-wrapper">
                                    <?php if ( $afwp_testimonial_item['afwp_home_testimonial_img'] != null ): ?>
                                        <div class="af-testimonial-img">
                                            <img src="<?php echo $afwp_testimonial_item['afwp_home_testimonial_img']; ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="af-testimonial-thumb-wrapper">
                                        <?php if ( $afwp_testimonial_item['afwp_home_testimonial_box_img'] != null ): ?>
                                            <img src="<?php echo $afwp_testimonial_item['afwp_home_testimonial_box_img']; ?>" >
                                        <?php endif; ?>
                                        <div class="af-testimoial-thumb-content">
                                            <h4><?php echo $afwp_testimonial_item['afwp_home_testimonial_box_title']; ?></h4>
                                            <p><?php echo $afwp_testimonial_item['afwp_home_testimonial_box_subtitle']; ?></p>
                                        </div>
                                    </div>
                                </div>

                                <?php if ( $afwp_testimonial_item['afwp_home_testimonial_desc'] != null ): ?>
                                    <div class="af-testimonial-item-content">
                                        <p><?php echo $afwp_testimonial_item['afwp_home_testimonial_desc']; ?></p>
                                    </div>
                                <?php endif; ?>
                            </div> <!-- End testimonial item -->
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </section> <!-- Testimonial section-->
    <?php endif; ?>

    <section class="af-latest-posts-section clearfix">
        <div class="af-container">
            <div class="af-latest-posts-wrapper">
                <?php
                $afwp_home_blog_title       = esc_html( get_theme_mod('afwp_homepage_blog_title', '') );
                $afwp_home_blog_desc        = esc_html( get_theme_mod('afwp_homepage_blog_desc', '') );
                $afwp_home_blog_btntext     = esc_html( get_theme_mod('afwp_homepage_blog_btntext', '') );
                $afwp_home_blog_btnurl      = esc_html( get_theme_mod('afwp_homepage_blog_btnurl', '') );
                ?>
                <div class="af-latest-posts-callout">
                    <?php if ( $afwp_home_blog_title != null ): ?>
                        <h2><?php echo $afwp_home_blog_title; ?></h2>
                        <span class="af-latest-posts-title-border"></span>
                    <?php endif; ?>

                    <?php if ( $afwp_home_blog_desc != null ): ?>
                        <p><?php echo $afwp_home_blog_desc; ?></p>
                    <?php endif; ?>

                    <?php if ( $afwp_home_blog_btntext != null && $afwp_home_blog_btnurl != null ): ?>
                        <a href="<?php echo $afwp_home_blog_btnurl; ?>" class="af-hero-button"><?php echo $afwp_home_blog_btntext; ?></a>
                    <?php endif; ?>
                </div>
                <div class="af-latest-posts-content-wrapper">
                    <?php
                        $args = array(
                        	'post_type'   => 'post',
                        	'post_status' => 'publish',
                        	'posts_per_page' => 4,
                        );
                        $posts = new WP_Query( $args );
                        if ( $posts->have_posts() ) : ?>
                        	<?php while( $posts->have_posts() ) : $posts->the_post() ?>
                                <div class="af-latest-post-item">
                                    <?php if ( has_post_thumbnail() ) : ?>
                            			<a href="<?php the_permalink();?>">
                            				<?php the_post_thumbnail('agencyforcewp-post-thumb', array('alt' => esc_attr( get_the_title() ) )); ?>
                            			</a>
                                	<?php endif; ?>
                                    <?php the_title(
                                        sprintf(
                                            '<h3><a href="%s" rel="bookmark">',
                                            esc_url( get_permalink() )
                                        ), '</a></h3>'
                                    ); ?>
                                </div> <!-- blog post item -->
                        	<?php endwhile ?>
                    <?php else : ?>
                        <p><?php _e('No posts found!', 'agencyforcewp') ?></p>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </section> <!-- latest post section -->

    <?php get_footer(); ?>
</body>

</html>
