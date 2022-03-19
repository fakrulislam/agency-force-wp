<?php
/**
* Template Name: Service Page
* Desc: Outputs service page contents
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
            <h1>We Make The Best For Your Business.</h1>
        </div>
    </section> <!-- hero section-->

    <section class="af-service-box-section af-service-box-section-bg clearfix">
        <div class="af-container">
            <div class="af-service-boxes-container">
                <h2>What we do</h2>
                <p>You need offer an experience that is not available elsewhere.
                    Clean and creative HTMl template design for you.</p>
                <!-- Service box container -->
                <div class="af-service-boxes af-service-box-servicepage">
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
                    </div> <!-- end single service box -->

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
                    </div> <!-- end single service box -->

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
                    </div> <!-- end single service box -->
                </div> <!-- Eng service box container -->
            </div>
        </div>
    </section> <!-- service box section -->

    <section class="af-service-icon-box-section">
        <div class="af-container">
            <div class="af-service-icon-box-wrapper clearfix">
                <div class="af-service-icon-box-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-research.svg" alt="research">
                    <h3>Research</h3>
                    <p>We shape brands through exploration and investigation, applying in-depth research to challenge assumptions at every turn.</p>
                </div> <!-- icon box -->

                <div class="af-service-icon-box-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-design.svg" alt="Design">
                    <h3>Design</h3>
                    <p>We shape brands through exploration and investigation, applying in-depth research to challenge assumptions at every turn.</p>
                </div> <!-- icon box -->

                <div class="af-service-icon-box-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-implementation.svg" alt="implementation">
                    <h3>Implementation</h3>
                    <p>We shape brands through exploration and investigation, applying in-depth research to challenge assumptions at every turn.</p>
                </div> <!-- icon box -->
            </div>
        </div>
    </section> <!-- Service icon box section -->

    <section class="af-feature-section-top af-service-page-feature-section-top clearfix">
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

    <section class="af-feature-section-bottom af-service-page-feature-section-bottom clearfix">
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

    <section class="af-about-calltoaction-section af-service-page-calltoaciton-section">
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
