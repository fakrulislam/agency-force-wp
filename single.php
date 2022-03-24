<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
* @version 1.0
* @since agencyforcewp 1.0
*/
?>

<?php get_header(); ?>

<body <?php body_class(); ?> >

    <!-- Header: Transparent-->
    <?php get_template_part('assets/parts/header-transparent'); ?>

    <section class="af-blogpage-hero-section clearfix">
        <div class="af-blogpage-bg-layer af-blog-single-hero-section"></div>
    </section> <!-- Blog detail hero -->

    <section class="af-blog-single-content-section clearfix">
        <div class="af-container">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="af-post-featured-thumb">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('agencyforcewp-post-thumb', array('alt' => esc_attr( get_the_title() ) )); ?>
                    <?php endif; ?>
                </div>

                <div class="af-post-meta-wrapper">
                    <h1><?php the_title(); ?></h1>

                    <div class="af-post-meta clearfix">
                        <div class="af-post-author clearfix">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
                            <div class="af-author-name">
                                <h4><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></h4>
                                <?php the_category(', '); ?>
                            </div>
                        </div>
                        <div class="af-post-date clearfix">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-calendar.svg" alt="publish date">
                            <p><?php the_time( get_option( 'date_format' ) ); ?></p>
                        </div>
                        <div class="af-post-comment clearfix">
                            <?php if ( comments_open() ) :  ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-comment.svg" alt="comment">
                                <p><?php comments_popup_link( __('No Comment', 'agencyforcewp'), __('1 Comment', 'agencyforcewp'), __('% Comments', 'agencyforcewp')); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; else : ?>
                <div class="af-post-featured-thumb">
                    <h3 style="text-align: center;"><?php _e('Sorry, nothing found!', 'agencyforcewp'); ?></h3>
                </div>
            <?php endif; ?>

            <div class="af-post-content-wrapper">

                <div class="af-post-content af-floatleft">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
                            <?php the_content() ?>
                        </div>
                        <div class="af-single-post-comment-section clearfix">
                            <?php
                            /*
                             * If comments are open or we have at least one comment,
                             * load up the comment template.
                             */
                              if ( comments_open() || get_comments_number() ) :
                                  comments_template();
                              endif;
                              ?>
                        </div>
                    <?php endwhile; else : ?>
                        <p><?php _e('Sorry, nothing found!', 'agencyforcewp'); ?></p>
                    <?php endif; ?>
                </div> <!-- content section -->

                <?php get_sidebar(); ?>
            </div>

        </div>
    </section> <!-- blog detail content section -->

    <!-- footer callout -->
    <?php get_template_part('assets/parts/footer-callout'); ?>

    <?php get_footer(); ?>
</body>

</html>
