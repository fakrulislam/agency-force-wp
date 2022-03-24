<?php
/*************
 * Template Name: Home page
 * Desc: Outputs home page contents
 *
 * @package  		 agencyforcewp
 * @file     		 page-home.php
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
    <section class="af-home-hero-section clearfix">
        <div class="af-home-hero-bg-layer">

            <div class="af-container">
                <div class="af-hero-content af-floatleft ">
                    <?php
                        $hero_img         = esc_html( get_theme_mod('afwp_hero_img', '') );
                        $hero_title       = esc_html( get_theme_mod('afwp_hero_heading_text', '') );
                        $hero_desc        = esc_html( get_theme_mod('afwp_hero_short_desc', '') );
                        $hero_btn_text    = esc_html( get_theme_mod('afwp_hero_button_text', '') );
                        $hero_btn_url     = esc_html( get_theme_mod('afwp_hero_button_url', '') );
                        $hero_video_id    = esc_html( get_theme_mod('afwp_hero_video_id', '') );

                        if( $hero_title != null ): ?>
                            <h1><?php echo $hero_title ?></h1>
                    <?php endif; ?>

                    <?php if( $hero_desc != null ): ?>
                        <p><?php echo $hero_desc ?></p>
                    <?php endif; ?>

                    <?php if( $hero_btn_text != null && $hero_btn_url != null ): ?>
                        <a href="<?php echo esc_url( $hero_btn_url ); ?>" class="af-hero-button"><?php echo $hero_btn_text; ?></a>
                    <?php endif; ?>

                    <?php if( $hero_video_id != null ): ?>
                        <a href="#" class="af-video-icon js-modal-btn" data-video-id="<?php echo $hero_video_id; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play-icon.svg"/>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="af-hero-img af-floatright">
                    <?php if( $hero_img != null ): ?>
                        <img src="<?php echo esc_url( $hero_img ); ?>" alt="<?php echo $hero_title; ?>"/>
                    <?php endif; ?>
                </div>
            </div>
            <div class="af-hero-empty-space"></div>
        </div>
    </section>

    <!-- logo section -->
    <?php $home_logos = get_theme_mod( 'afwp_homepage_logo_gallery', '' );
        if ($home_logos != null):  ?>
            <section class="af-logo-showcase-section">
                <div class="af-container">
                    <div class="af-logo-showcase">
                        <?php foreach ( $home_logos as $logo ) : ?>
                            <img src="<?php echo esc_url( $logo['logo_url'] ); ?>">
                    	<?php endforeach; ?>
                    </div>
                </div>
            </section>
    <?php endif; ?>

    <!-- service box section -->
    <?php get_template_part('assets/parts/service-box'); ?>

    <!-- feature sections (top & bottom) -->
    <?php get_template_part('assets/parts/feature-sections'); ?>

    <!-- Testimonial section-->
    <?php $afwp_home_testimonials = get_theme_mod('afwp_home_testimonial', '');
    if ( $afwp_home_testimonials != null ): ?>
        <section class="af-testimonial-section clearfix">
            <div class="af-testimonial-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonail-vector.svg" alt="vector graphic" class="af-top-right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonail-vector.svg" alt="vector graphic" class="af-bottom-left">
                <div class="af-testimonial-content-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-quote.svg" alt="quote">
                    <div class="owl-carousel">
                        <?php foreach ($afwp_home_testimonials as $afwp_testimonial_item): ?>
                            <div class="af-carousel-item">
                                <div class="af-testimonial-img-wrapper">
                                    <?php if ( $afwp_testimonial_item['afwp_home_testimonial_img'] != null ): ?>
                                        <div class="af-testimonial-img">
                                            <img src="<?php echo esc_url( $afwp_testimonial_item['afwp_home_testimonial_img'] ); ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="af-testimonial-thumb-wrapper">
                                        <?php if ( $afwp_testimonial_item['afwp_home_testimonial_box_img'] != null ): ?>
                                            <img src="<?php echo esc_url( $afwp_testimonial_item['afwp_home_testimonial_box_img'] ); ?>" >
                                        <?php endif; ?>
                                        <div class="af-testimoial-thumb-content">
                                            <h4><?php echo esc_html( $afwp_testimonial_item['afwp_home_testimonial_box_title'] ); ?></h4>
                                            <p><?php echo esc_html( $afwp_testimonial_item['afwp_home_testimonial_box_subtitle'] ); ?></p>
                                        </div>
                                    </div>
                                </div>

                                <?php if ( $afwp_testimonial_item['afwp_home_testimonial_desc'] != null ): ?>
                                    <div class="af-testimonial-item-content">
                                        <p><?php echo esc_html( $afwp_testimonial_item['afwp_home_testimonial_desc'] ); ?></p>
                                    </div>
                                <?php endif; ?>
                            </div> <!-- End testimonial item -->
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- latest post section -->
    <section class="af-latest-posts-section clearfix">
        <div class="af-container">
            <div class="af-latest-posts-wrapper">
                <?php
                $afwp_home_blog_title       = esc_html( get_theme_mod('afwp_homepage_blog_title', '') );
                $afwp_home_blog_desc        = esc_html( get_theme_mod('afwp_homepage_blog_desc', '') );
                $afwp_home_blog_btntext     = esc_html( get_theme_mod('afwp_homepage_blog_btntext', '') );
                $afwp_home_blog_btnurl      = esc_url( get_theme_mod('afwp_homepage_blog_btnurl', '') );
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
                        $afwp_posts = new WP_Query( $args );
                        if ( $afwp_posts->have_posts() ) : ?>
                        	<?php while( $afwp_posts->have_posts() ) : $afwp_posts->the_post() ?>
                                <div id="post-<?php the_ID(); ?>" <?php post_class('af-latest-post-item'); ?>>
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
    </section>

    <?php get_footer(); ?>
</body>

</html>
