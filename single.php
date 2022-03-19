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
        <div class="af-blogpage-bg-layer af-blog-single-hero-section"></div>
    </section> <!-- Blog detail hero -->

    <section class="af-blog-single-content-section clearfix">
        <div class="af-container">
            <div class="af-post-featured-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-single-thumb.jpg" alt="post thumbnail">
            </div>
            <div class="af-post-meta-wrapper">
                <h1>E-Commerce Design Trends That Make Online Shopping Better.</h1>
                <div class="af-post-meta clearfix">
                    <div class="af-post-author clearfix">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-author.jpg" alt="author">
                        <div class="af-author-name">
                            <h4>Izumi Katsuyoshi</h4>
                            <a href="#">UX Research</a>
                        </div>
                    </div>
                    <div class="af-post-date clearfix">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-calendar.svg" alt="publish date">
                        <p>21 Maret 2020 - 14.00 PM</p>
                    </div>
                    <div class="af-post-comment clearfix">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-comment.svg" alt="comment">
                        <p><a href="#">120 Comment</a></p>
                    </div>
                </div>
            </div>
            <div class="af-post-content-wrapper">
                <div class="af-post-content af-floatleft">
                    <p>People prefer to shop online for various reasons: it’s quicker, easier, less stressful, gives a wider choice, and, thanks to the variety of special deals, it’s often less expensive. But outstanding customer experience can only be achieved with good e-commerce design.</p>
                    <p>The way people interact with the outside world is constantly evolving and e-commerce evolves with it, recently provided with additional acceleration by the COVID-19 pandemic. The task of modern e-commerce websites is to bridge the gap between how people shop today and what they expect in the digitized future economy. The best way to do it is to incorporate some of the latest e-commerce design trends that will help e-commerce stores cope with the competition, be useful, and commercially viable.</p>
                    <br/><br/>
                    <h3>Mobile Shopping</h3>
                    <p>The impetuous progress of mobile technology has changed the way we access and interact with websites. Today the majority (65%) of traffic for retail websites comes from smartphones with 53% of sales happening via the same channel. What it means is that the necessity for responsive design is not an empty sound, that everybody has heard a thousand times, but a must. Optimizing the design for phones and tablets to meet the consumers where they are will help keep them happy and coming for more.</p>
                    <p>This trend is not losing its relevance, but becoming more powerful. It’s so important now that many online retailers are focusing primarily on the mobile versions of their websites and then adapt to desktop, and they have a point. For example, you can notice how many long-scrolling e-commerce pages there are nowadays and how many websites sometimes incorporate the mobile design elements like the hamburger menu into desktop designs.</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/single-post-thumb.jpg" alt="">
                    <h4>The combination of landing pages and product pages</h4>
                    <p>A traditional e-commerce website structure is designed in such a way that a customer starts their journey from the homepage and then goes further by choosing a category on the menu and so on. However, today it’s common for a customer to come from a SERP page, an ad, or a social media post that leads straight to the product or category page.</p>
                    <p>That is why more and more online retailers design their product pages (or, at least, category pages) using the elements of landing pages like unique selling propositions, calls-to-action, hero shots, social proof, etc. This way the consumers get all the information they need about the store and the product is showcased in a more flattering and informative way. Landing pages are 25% more likely to convert.</p>
                </div> <!-- content section -->
                <div class="af-post-sidebar af-floatright">
                    <div class="af-post-sidebar-item">
                        <h2>Widget Heading</h2>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sidebar-ads.jpg" alt="ads">
                    </div>
                    <div class="af-post-sidebar-item">
                        <h2>Widget Heading</h2>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sidebar-ads.jpg" alt="ads">
                    </div>
                </div> <!-- sidebar section -->
            </div>
        </div>
    </section> <!-- blog detail content section -->

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
