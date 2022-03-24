<?php
/*************
 * Template Name: Blog page
 * Desc: Outputs blog page contents
 *
 * @package  		 agencyforcewp
 * @file     		 page-blog.php
 * @version          1.0
 * @since            agencyforcewp 1.0
 * @author   		 MD FAKRUL ISLAM
 * @Author URL 	     https://fakrulislam.me
 ***************/

get_header(); ?>

<body <?php body_class(); ?> >
    <!-- Header: Transparent-->
    <?php get_template_part('assets/parts/header-transparent'); ?>

    <!-- blog page hero -->
    <section class="af-blogpage-hero-section clearfix">
        <div class="af-blogpage-bg-layer">
            <?php $afwp_blog_title = esc_html( get_theme_mod('afwp_blog_title', '') );
            if ( $afwp_blog_title != null ): ?>
                <h1><?php echo $afwp_blog_title; ?></h1>
            <?php else: ?>
                <h1><?php echo get_the_title(); ?></h1>
            <?php endif; ?>
        </div>
    </section>

    <!-- Blog post section -->
    <section class="af-blog-post-section">
        <div class="af-container">
            <div class="af-blog-post-wrapper clearfix">
                <div class="af-left-column af-floatleft">
                    <div class="af-blog-featured-content">
                        <?php // featured post query
                        $afwp_featured_post_cat = esc_html( get_theme_mod('afwp_blog_featured_cat', '') );
                        $af_featured_cat_id = $afwp_featured_post_cat? $afwp_featured_post_cat : '-1';
                        $af_featuredpost_args = array(
                            'post_type'         => 'post',
                            'post_status'       => 'publish',
                            'cat'               => ''. $afwp_featured_post_cat .'',
                            // 'category_name'     => 'wordpress',
                            'posts_per_page'    => 1,
                        );
                        $featured_post = new WP_Query( $af_featuredpost_args );

                        if ( $featured_post->have_posts() ) :
                            while ( $featured_post->have_posts() ) : $featured_post->the_post(); ?>
                                <div id="post-<?php the_ID(); ?>" <?php post_class('af-blog-post-item'); ?>>
                                    <?php if ( has_post_thumbnail() ) : ?>
                            			<?php the_post_thumbnail('agencyforcewp-post-thumb', array('alt' => esc_attr( get_the_title() ) )); ?>
                                	<?php endif; ?>

                                    <div class="af-post-item-content">
                                        <?php the_title(
                                            sprintf(
                                                '<h1><a href="%s" rel="bookmark">',
                                                esc_url( get_permalink() )
                                            ), '</a></h1>'
                                        ); ?>
                                        <?php the_excerpt(); ?>
                                        <a href="<?php esc_url(the_permalink()); ?>" class="af-post-readmore"><?php _e('Read More', 'agencyforcewp'); ?> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div> <!-- blog post item -->
                            <?php endwhile;?>
                        <?php else: ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class('af-blog-post-item'); ?>>
                                <div class="af-post-item-content">
                                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'agencyforcewp' );?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="af-blog-posts">

                        <?php // Regular blog post query
                        $afwp_blog_post_cat = esc_html( get_theme_mod('afwp_blog_posts_cat', '') );
                        $af_blogpost_cat_id = $afwp_blog_post_cat? $afwp_blog_post_cat : '-1';
                        $af_blogpost_args = array(
                            'post_type'         => 'post',
                            'post_status'       => 'publish',
                            'cat'               => ''. $afwp_blog_post_cat .'',
                            // 'category_name'     => 'wordpress',
                            'posts_per_page'    => 4,
                        );
                        $blog_post = new WP_Query( $af_blogpost_args );

                        if ( $blog_post->have_posts() ) :
                            while ( $blog_post->have_posts() ) : $blog_post->the_post(); ?>
                                <div id="post-<?php the_ID(); ?>" <?php post_class('af-blog-post-item'); ?>>
                                    <?php if ( has_post_thumbnail() ) : ?>
                            			<?php the_post_thumbnail('agencyforcewp-post-thumb', array('alt' => esc_attr( get_the_title() ) )); ?>
                                	<?php endif; ?>

                                    <div class="af-post-item-content">
                                        <?php the_title(
                                            sprintf(
                                                '<h1><a href="%s" rel="bookmark">',
                                                esc_url( get_permalink() )
                                            ), '</a></h1>'
                                        ); ?>
                                        <?php the_excerpt(); ?>
                                        <a href="<?php esc_url(the_permalink()); ?>" class="af-post-readmore"><?php _e('Read More', 'agencyforcewp'); ?> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div> <!-- blog post item -->
                            <?php endwhile;?>
                        <?php else: ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class('af-blog-post-item'); ?>>
                                <div class="af-post-item-content">
                                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'agencyforcewp' );?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="af-right-column af-floatright">
                    <?php // Sidebar post query
                    $afwp_sidebar_post_cat = esc_html( get_theme_mod('afwp_blog_sidebar_posts_cat', '') );
                    $af_sidebarpost_cat_id = $afwp_sidebar_post_cat? $afwp_sidebar_post_cat : '-1';
                    $af_sidebarpost_args = array(
                        'post_type'         => 'post',
                        'post_status'       => 'publish',
                        'cat'               => ''. $afwp_sidebar_post_cat .'',
                        // 'category_name'     => 'wordpress',
                        'posts_per_page'    => 3,
                    );
                    $blog_sidebar_post = new WP_Query( $af_sidebarpost_args );

                    if ( $blog_sidebar_post->have_posts() ) :
                        while ( $blog_sidebar_post->have_posts() ) : $blog_sidebar_post->the_post(); ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class('af-blog-post-item'); ?>>
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail('agencyforcewp-post-thumb', array('alt' => esc_attr( get_the_title() ) )); ?>
                                <?php endif; ?>
                                <div class="af-post-item-content">
                                    <?php the_title(
                                        sprintf(
                                            '<h1><a href="%s" rel="bookmark">',
                                            esc_url( get_permalink() )
                                        ), '</a></h1>'
                                    ); ?>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php esc_url(the_permalink()); ?>" class="af-post-readmore"><?php _e('Read More', 'agencyforcewp'); ?> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div> <!-- blog post item -->
                        <?php endwhile; ?>
                    <?php else: ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class('af-blog-post-item'); ?>>
                            <div class="af-post-item-content">
                                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'agencyforcewp' );?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- footer callout -->
    <?php get_template_part('assets/parts/footer-callout'); ?>

    <?php get_footer(); ?>
</body>

</html>
