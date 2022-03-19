<?php
/**
* Template Name: About Page
* Desc: Outputs about page contents
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

    <section class="af-primary-hero-section">
        <div class="af-container">
            <h1>We are the best agency in the wold</h1>
        </div>
    </section> <!-- hero section-->

    <section class="af-about-video-section clearfix">
        <div class="af-container">
            <div class="af-video-content-wrapper">
                <div class="af-about-video-content af-floatleft">
                    <h2>We like to find simple solutions to complex challenges.</h2>
                    <p class="af-video-subtitle">You need offer an experience that is not available elsewhere. Clean and creative HTMl template design for you.</p>
                    <p>Quae fuerit causa, nollem me ab illo inventore veritatis et dolorem? sunt autem vel eum fugiat, quo aut quid est consecutus? laudem et voluptates omittantur maiorum voluptatum deleniti atque in malis dolor, non numquam eius modi tempora incidunt, ut summo bono, dolorem ipsum, quia non.</p>
                </div>
                <div class="af-about-video af-floatright">
                    <a href="#" class="video-thumb js-modal-btn" data-video-id="mXMTzrGtyck">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/video-thumb.png"/>
                    </a>
                </div>
            </div>
        </div>
    </section> <!-- video section -->

    <section class="af-icon-box-section">
        <div class="af-container">
            <div class="af-icon-box-content-wrapper clearfix">
                <div class="af-icon-box af-floatleft">
                    <div class="af-iconbox-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/icon-webdev.svg" alt="web development">
                    </div>
                    <div class="af-iconbox-content">
                        <h3>Web Development</h3>
                        <p>Sed ut enim ipsam voluptatem, quia non recusandae itaque earum rerum facilis est laborum et quasi involuta aperiri, altera prompta et via procedat oratio quaerimus igitur, inquit, sic agam.</p>
                    </div>
                </div> <!-- single icon box -->

                <div class="af-icon-box af-floatright">
                    <div class="af-iconbox-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/uiux-icon.svg" alt="UI/UX Design">
                    </div>
                    <div class="af-iconbox-content">
                        <h3>UI/UX Design</h3>
                        <p>Sed ut enim ipsam voluptatem, quia non recusandae itaque earum rerum facilis est laborum et quasi involuta aperiri, altera prompta et via procedat oratio.</p>
                    </div>
                </div> <!-- single icon box -->
            </div>
        </div>
    </section> <!-- icon box section -->

    <section class="af-project-slider-section">
        <div class="af-container">
            <div class="af-project-slider-content-wrapper clearfix">
                <div class="owl-project owl-carousel">

                    <div class="af-project-slide-item item">
                        <div class="af-project-slide-content">
                            <h2>Our Latest Project</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                        <div class="af-project-slide-img">
                            <a href="#" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/slide-thumb.jpg" alt="Our Latest Project">
                            </a>
                        </div>
                    </div> <!-- project slide item -->

                    <div class="af-project-slide-item item">
                        <div class="af-project-slide-content">
                            <h2>Our Latest Project</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                        <div class="af-project-slide-img">
                            <a href="#" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/slide-thumb.jpg" alt="Our Latest Project">
                            </a>
                        </div>
                    </div> <!-- project slide item -->

                    <div class="af-project-slide-item item">
                        <div class="af-project-slide-content">
                            <h2>Our Latest Project</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                        <div class="af-project-slide-img">
                            <a href="#" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/slide-thumb.jpg" alt="Our Latest Project">
                            </a>
                        </div>
                    </div> <!-- project slide item -->

                </div>
            </div>
        </div>
    </section> <!-- project slider section -->

    <section class="af-about-calltoaction-section">
        <div class="af-about-calltoaction-bglayer">
            <div class="af-container">
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

    <section class="af-team-section">
        <div class="af-container">
            <div class="af-team-content-wrapper clearfix">
                <div class="af-team-title">
                    <h2>Meet Our Team</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                </div>
                <div class="af-team-member-wrapper">
                    <div class="af-single-team-card af-floatleft">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/team-female1.jpg" alt="Daisy Murphy">
                        <h4>Designer</h4>
                        <h3>Daisy Murphy</h3>
                        <p>Primum igitur, quid malum, sensu iudicari, sed ipsius honestatis decore.</p>
                        <div class="af-team-social-icon-wrapper">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div> <!-- single team card -->

                    <div class="af-single-team-card af-floatleft">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/team-male.jpg" alt="John Doe">
                        <h4>Developer</h4>
                        <h3>John Doe</h3>
                        <p>Primum igitur, quid malum, sensu iudicari, sed ipsius honestatis decore.</p>
                        <div class="af-team-social-icon-wrapper">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div> <!-- single team card -->

                    <div class="af-single-team-card af-floatleft">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/team-female2.jpg" alt="Sabrina">
                        <h4>Manager</h4>
                        <h3>Sabrina</h3>
                        <p>Primum igitur, quid malum, sensu iudicari, sed ipsius honestatis decore.</p>
                        <div class="af-team-social-icon-wrapper">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div> <!-- single team card -->
                </div>
            </div>
        </div>
    </section> <!-- team section -->

    <section class="af-about-testimonial-section">
        <div class="af-container">
            <div class="af-about-testimonial-title">
                <h2>What client says</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
            </div>
            <div class="af-about-testimonial-content-wrapper clearfix">
                <div class="af-about-testimonial-thumb af-floatleft">
                    <div class="af-about-testimonial-client-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonial-img.jpg" alt="client">
                    </div>
                    <div class="af-about-testimonial-brand-logo-wrapper clearfix">
                        <div class="af-about-testimonial-brand-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimoial-logo.png" alt="brand logo">
                        </div>
                        <div class="af-about-testimonial-brand-logo-content">
                            <h4>Coffee Shop</h4>
                            <p>Business Owner</p>
                        </div>
                    </div>
                </div> <!-- client image & brand logo -->

                <div class="af-about-testimonial-content af-floatright">
                    <p>There are two types of people who will tell you that you cannot make a difference in this world: those who are afraid to try and those who are afraid you will succeed.</p>
                    <div class="af-about-testimonial-rating-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/star.svg" alt="rating">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/star.svg" alt="rating">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/star.svg" alt="rating">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/star.svg" alt="rating">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/star-gray.svg" alt="rating">
                    </div>
                </div> <!-- testimonial content-->
            </div>
        </div>
    </section> <!-- testimonial Section -->

    <section class="af-about-logo-section">
        <div class="af-container">
            <div class="af-about-logo-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo1.png" alt="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo2.png" alt="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo3.png" alt="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo4.png" alt="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo5.png" alt="logo">
            </div>
        </div>
    </section> <!-- logo section -->

    <?php get_footer(); ?>
</body>

</html>
