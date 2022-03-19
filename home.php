<?php
/**
* Template Name: Home page
* Desc: Outputs home page contents
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

    <section class="af-home-hero-section clearfix">
        <div class="af-home-hero-bg-layer">

            <div class="af-container">
                <div class="af-hero-content af-floatleft ">
                    <h1>Innovative and intelligent technology solutions and services</h1>
                    <p>Strong management and security for powerful features. Clean and creative design for you.</p>
                    <a href="#" class="af-hero-button">Get Started</a>
                    <a href="#" class="af-video-icon js-modal-btn" data-video-id="Y8ACyHYsb6Q"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/play-icon.svg"/></a>

                </div>
                <div class="af-hero-img af-floatright">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-img.svg"/>
                </div>
            </div>
            <div class="af-hero-empty-space"></div>
        </div>
    </section> <!-- hero section-->

    <section class="af-logo-showcase-section">
        <div class="af-container">
            <div class="af-logo-showcase">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo1.png" alt="logo1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo2.png" alt="logo2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo3.png" alt="logo3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo4.png" alt="logo4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo5.png" alt="logo5">
            </div>
        </div>
    </section> <!-- logo section -->

    <section class="af-service-box-section clearfix">
        <div class="af-container">
            <div class="af-service-boxes-container">
                <h2>What we do</h2>
                <p>You need offer an experience that is not available elsewhere.
                    Clean and creative HTMl template design for you.</p>
                <!-- Service box container -->
                <div class="af-service-boxes">
                    <!-- single service box -->
                    <div class="af-service-box-item service-box-item-bg1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-box-1-thumb.svg" alt="product management">
                        <h3>Product Management</h3>
                        <p>Operational improvements through technology enhancements and/or service functions, we provide a fresh lens in helping you achieve your goals. Having specified, designed, and implemented proven market tools, we can get you where you need to go through:</p>
                        <ul>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/list-icon.svg" alt="Process Refinement">
                                <p>Process Refinement</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/list-icon.svg" alt="Workflow Optimization">
                                <p>Workflow Optimization</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/list-icon.svg" alt="Product/Software Testing">
                                <p>Product/Software Testing</p>
                            </li>
                        </ul>
                    </div>
                    <!-- end single service box -->
                    <!-- single service box -->
                    <div class="af-service-box-item service-box-item-bg2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-box-2-thumb.svg" alt="web development">
                        <h3>Web Development</h3>
                        <p>Operational improvements through technology enhancements and/or service functions, we provide a fresh lens in helping you achieve your goals. Having specified, designed, and implemented proven market tools, we can get you where you need to go through:</p>
                        <ul>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/list-icon.svg" alt="product management">
                                <p>Content Management System</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/list-icon.svg" alt="product management">
                                <p>WordPress</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/list-icon.svg" alt="product management">
                                <p>Front-end Development</p>
                            </li>
                        </ul>
                    </div>
                    <!-- end single service box -->
                    <!-- single service box -->
                    <div class="af-service-box-item service-box-item-bg3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service-box-3-thumb.svg" alt="Visual Design and Branding">
                        <h3>Visual Design and Branding</h3>
                        <p>Operational improvements through technology enhancements and/or service functions, we provide a fresh lens in helping you achieve your goals. Having specified, designed, and implemented proven market tools, we can get you where you need to go through:</p>
                        <ul>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/list-icon.svg" alt="product management">
                                <p>Brand Identity</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/list-icon.svg" alt="product management">
                                <p>UI/UX Design</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/list-icon.svg" alt="product management">
                                <p>Illustration</p>
                            </li>
                        </ul>
                    </div>
                    <!-- end single service box -->
                </div>
                <!-- Eng service box container -->
            </div>
        </div>
    </section> <!-- service box section -->

    <section class="af-feature-section-top clearfix">
        <div class="af-container">
            <div class="af-feature-top-wrapper">
                <div class="af-feature-top-img af-floatleft">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/delivery-orders.svg" alt="delivery orders">
                </div>
                <div class="af-feature-top-content af-floatleft">
                    <h2>We like to find simple solutions to complex challenges.</h2>
                    <h6>You need offer an experience that is not available elsewhere. Clean and creative HTMl template design for you.</h6>
                    <p>Quae fuerit causa, nollem me ab illo inventore veritatis et dolorem? sunt autem vel eum fugiat, quo aut quid est consecutus? laudem et voluptates omittantur maiorum voluptatum deleniti atque in malis dolor, non numquam eius modi tempora incidunt, ut summo bono, dolorem ipsum, quia non.</p>
                    <a href="#" target="_self">Get Started</a>
                </div>
            </div>
        </div>
    </section> <!-- home feature (top) section -->

    <section class="af-feature-section-bottom clearfix">
        <div class="af-container">
            <div class="af-feature-bottom-wrapper">
                <div class="af-feature-bottom-content af-floatleft">
                    <h2>We love experience & creative works.</h2>
                    <p>You need offer an experience that is not available elsewhere. Clean and creative HTMl template design for you.</p>
                    <div class="af-icon-box-wrapper">
                        <div class="af-icon-box-img af-floatleft">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/laptop-icon.svg" alt="Web Development">
                        </div>
                        <div class="af-icon-box-content">
                            <h4>Web Development</h4>
                            <p>Sed ut enim ipsam voluptatem, quia non recusandae itaque earum rerum facilis est laborum et quasi involuta aperiri, altera prompta et via procedat oratio quaerimus igitur, inquit, sic agam.</p>
                        </div>
                    </div>
                    <div class="af-icon-box-wrapper">
                        <div class="af-icon-box-img af-floatleft">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ui-ux-icon.svg" alt="UI/UX Design">
                        </div>
                        <div class="af-icon-box-content">
                            <h4>UI/UX Design</h4>
                            <p>Sed ut enim ipsam voluptatem, quia non recusandae itaque earum rerum facilis est laborum et quasi involuta aperiri, altera prompta et via procedat oratio.</p>
                        </div>
                    </div>
                </div>
                <div class="af-feature-bottom-img af-floatleft">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/laptop.svg" alt="experience & creative work">
                </div>
            </div>
        </div>
    </section> <!-- home feature (bottom) section -->

    <section class="af-testimonial-section clearfix">
        <div class="af-testimonial-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonail-vector.svg" alt="testimonial" class="af-top-right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonail-vector.svg" alt="testimonial" class="af-bottom-left">
            <div class="af-testimonial-content-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-quote.svg" alt="testimonial">
                <div class="owl-carousel">
                    <!-- Testimonial item -->
                    <div class="af-carousel-item">
                        <div class="af-testimonial-img-wrapper">
                            <div class="af-testimonial-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-img.jpg" alt="testimonial">
                            </div>
                            <div class="af-testimonial-thumb-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimoial-logo.png" alt="company logo">
                                <div class="af-testimoial-thumb-content">
                                    <h4>Coffee Shop</h4>
                                    <p>Business Owner</p>
                                </div>
                            </div>
                        </div>
                        <div class="af-testimonial-item-content">
                            <p>There are two types of people who will tell you that you cannot make a difference in this world: those who are afraid to try and those who are afraid you will succeed.</p>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <!-- Testimonial item -->
                    <div class="af-carousel-item">
                        <div class="af-testimonial-img-wrapper">
                            <div class="af-testimonial-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-img.jpg" alt="testimonial">
                            </div>
                            <div class="af-testimonial-thumb-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimoial-logo.png" alt="company logo">
                                <div class="af-testimoial-thumb-content">
                                    <h4>Coffee Shop</h4>
                                    <p>Business Owner</p>
                                </div>
                            </div>
                        </div>
                        <div class="af-testimonial-item-content">
                            <p>There are two types of people who will tell you that you cannot make a difference in this world: those who are afraid to try and those who are afraid you will succeed.</p>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <!-- Testimonial item -->
                    <div class="af-carousel-item">
                        <div class="af-testimonial-img-wrapper">
                            <div class="af-testimonial-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-img.jpg" alt="testimonial">
                            </div>
                            <div class="af-testimonial-thumb-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimoial-logo.png" alt="company logo">
                                <div class="af-testimoial-thumb-content">
                                    <h4>Coffee Shop</h4>
                                    <p>Business Owner</p>
                                </div>
                            </div>
                        </div>
                        <div class="af-testimonial-item-content">
                            <p>There are two types of people who will tell you that you cannot make a difference in this world: those who are afraid to try and those who are afraid you will succeed.</p>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                </div>

            </div>
        </div>
    </section> <!-- Testimonial section-->

    <section class="af-latest-posts-section clearfix">
        <div class="af-container">
            <div class="af-latest-posts-wrapper">
                <div class="af-latest-posts-callout">
                    <h2>Read our latest news</h2>
                    <span class="af-latest-posts-title-border"></span>
                    <p>Alii autem, quibus ego assentior, cum teneam sententiam, quid aut fugiat aliquid, praeter voluptatem accusantium doloremque laudantium, totam rem voluptas in voluptate ponit.</p>
                    <a href="#" class="af-hero-button">Read More</a>
                </div>
                <div class="af-latest-posts-content-wrapper">
                    <div class="af-latest-post-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-thumb.jpg" alt="post title">
                        <h3>What a Better Social Network Would Look Like?</h3>
                    </div> <!-- blog post item -->

                    <div class="af-latest-post-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-thumb.jpg" alt="post title">
                        <h3>What a Better Social Network Would Look Like?</h3>
                    </div> <!-- blog post item -->

                    <div class="af-latest-post-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-thumb.jpg" alt="post title">
                        <h3>What a Better Social Network Would Look Like?</h3>
                    </div> <!-- blog post item -->

                    <div class="af-latest-post-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-thumb.jpg" alt="post title">
                        <h3>What a Better Social Network Would Look Like?</h3>
                    </div> <!-- blog post item -->
                </div>
            </div>
        </div>
    </section> <!-- latest post section -->

    <?php get_footer(); ?>
</body>

</html>
