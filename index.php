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
?>

<?php get_header(); ?>

<body>

    <section class="af-header-transparent-section">
        <div class="af-container">
            <div class="af-header-trnsparent">
                <div class="af-logo af-floatleft">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" >
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="agency force" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                    </a>
                </div>
                <div class="af-navigation af-floatleft">
                    <div class="af-nav" id="afnav">
                        <?php /* Primary navigation */
        					wp_nav_menu( array(
        					  'theme_location' => 'primary-menu',
        					  'depth' => 1,
        					  'container' => false,
        					  'fallback_cb' => ''
        					  )
        					);
                        ?>
                    </div>
                    <a href="javascript:void(0);" class="af-mobile-toggle-icon" onclick="afToggleIcon()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="af-header-button af-floatright">
                    <a href="#">Let's Talk</a>
                </div>
            </div>
        </div>
    </section> <!-- transparent header section -->

    <section class="af-blogpage-hero-section clearfix">
        <div class="af-blogpage-bg-layer">
            <h1>Read our news to see how the world works.</h1>
        </div>
    </section> <!-- blog page hero -->

    <section class="af-blog-post-section">
        <div class="af-container">
            <div class="af-blog-post-wrapper clearfix">
                <div class="af-left-column af-floatleft">
                    <div class="af-blog-featured-content">
                        <div class="af-blog-post-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-thumb.jpg" alt="blog thumb">
                            <div class="af-post-item-content">
                                <h1><a href="#">E-Commerce Design Trends That Make Online Shopping Better.</a></h1>
                                <p>Certe, inquam, pertinax non fuisse torquem detraxit hosti et quidem exercitus quid ex ea voluptate velit esse, quam ostendis sed ipsius honestatis decore laudandis, id ne interiret at magnum periculum adiit in oculis quidem se texit, ne interiret at vero eos censes tantas res gessisse.</p>
                                <a href="#" class="af-post-readmore">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div> <!-- blog post item -->
                    </div>
                    <div class="af-blog-posts">
                        <div class="af-blog-post-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-thumb.jpg" alt="blog thumb">
                            <div class="af-post-item-content">
                                <h1><a href="#">E-Commerce Design Trends That Make Online Shopping Better.</a></h1>
                                <p>Certe, inquam, pertinax non fuisse torquem detraxit hosti et quidem exercitus quid ex ea voluptate velit esse, quam ostendis sed ipsius honestatis decore laudandis, id ne interiret at magnum periculum adiit in oculis quidem se texit, ne interiret at vero eos censes tantas res gessisse.</p>
                                <a href="#" class="af-post-readmore">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div> <!-- blog post item -->
                        <div class="af-blog-post-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-thumb.jpg" alt="blog thumb">
                            <div class="af-post-item-content">
                                <h1><a href="#">E-Commerce Design Trends That Make Online Shopping Better.</a></h1>
                                <p>Certe, inquam, pertinax non fuisse torquem detraxit hosti et quidem exercitus quid ex ea voluptate velit esse, quam ostendis sed ipsius honestatis decore laudandis, id ne interiret at magnum periculum adiit in oculis quidem se texit, ne interiret at vero eos censes tantas res gessisse.</p>
                                <a href="#" class="af-post-readmore">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div> <!-- blog post item -->
                    </div>
                </div>
                <div class="af-right-column af-floatright">
                    <div class="af-blog-post-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-thumb.jpg" alt="blog thumb">
                        <div class="af-post-item-content">
                            <h1><a href="#">E-Commerce Design Trends That Make Online Shopping Better.</a></h1>
                            <p>Certe, inquam, pertinax non fuisse torquem detraxit hosti et quidem exercitus quid ex ea voluptate velit esse, quam ostendis sed ipsius honestatis decore laudandis, id ne interiret at magnum periculum adiit in oculis quidem se texit, ne interiret at vero eos censes tantas res gessisse.</p>
                            <a href="#" class="af-post-readmore">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div> <!-- blog post item -->
                    <div class="af-blog-post-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-thumb.jpg" alt="blog thumb">
                        <div class="af-post-item-content">
                            <h1><a href="#">E-Commerce Design Trends That Make Online Shopping Better.</a></h1>
                            <p>Certe, inquam, pertinax non fuisse torquem detraxit hosti et quidem exercitus quid ex ea voluptate velit esse, quam ostendis sed ipsius honestatis decore laudandis, id ne interiret at magnum periculum adiit in oculis quidem se texit, ne interiret at vero eos censes tantas res gessisse.</p>
                            <a href="#" class="af-post-readmore">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div> <!-- blog post item -->
                </div>
            </div>
        </div>
    </section> <!-- Blog post section -->

    <section class="af-about-calltoaction-section af-service-page-calltoaciton-section af-blogpage-footer-callout">
        <div class="af-container">
            <div class="af-about-calltoaction-bglayer">
                <div class="af-calltoaction-wrapper clearfix">
                    <div class="af-calltoaction-title">
                        <h2>Are you Raedy to Make a great Product?</h2>
                    </div>
                    <div class="af-calltoaction-button">
                        <a href="#">Contact us <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- call to action section -->

    <?php get_footer(); ?>
</body>

</html>
