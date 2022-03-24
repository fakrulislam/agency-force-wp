<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @version 1.0
 * @since agencyforcewp 1.0
 */

get_header(); ?>

<body <?php body_class(); ?> >
    <!-- Header: Transparent-->
    <?php get_template_part('assets/parts/header-transparent'); ?>

    <!-- blog page hero -->
    <section class="af-blogpage-hero-section clearfix">
        <div class="af-blogpage-bg-layer">
            <h1><?php echo wp_title(''); ?></h1>
        </div>
    </section>

    <section class="af-blog-post-section">
        <div class="af-container">
            <div class="af-blog-post-wrapper clearfix">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
                <?php endwhile; else : ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('af-blog-post-item'); ?>>
                        <div class="af-post-item-content">
                            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'agencyforcewp' ); ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="af-post-pagination">
                <?php
                the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( 'Back', 'agencyforcewp' ),
                'next_text' => __( 'Next', 'agencyforcewp' ),
                ) );
                ?>
            </div>
        </div>
    </section> <!-- Blog post section -->

    <!-- footer callout -->
    <?php get_template_part('assets/parts/footer-callout'); ?>

    <?php get_footer(); ?>
</body>

</html>
