<?php
/*************
 * Template Name: Contact page
 * Desc: Outputs about page contents
 *
 * @package  		 agencyforcewp
 * @file     		 page-contact.php
 * @version          1.0
 * @since            agencyforcewp 1.0
 * @author   		 MD FAKRUL ISLAM
 * @Author URL 	     https://fakrulislam.me
 ***************/

get_header(); ?>

<body>

    <section class="af-header-primary-section">
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
    </section> <!-- header section -->

    <section class="af-contact-content-section clearfix">
        <div class="af-container">
            <div class="af-contact-map">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.svg" alt="map">
            </div>
            <div class="af-contact-info-wrapper">
                <div class="af-contact-form-wrapper">
                    <h1>Let's Talk</h1>
                    <p>Our friendly custom service team always respond to enquiries within 24 hours.</p>
                    <form class="af-contact-form" action="index.html" method="post">
                        <p class="af-fname-field">
                            <input type="hidden" name="af-fname-field" value="First Name">
                            <input type="text" placeholder="First Name" id="af-fname-field" name="af-fname-field">
                        </p>
                        <p class="af-lname-field">
                            <input type="hidden" name="af-lname-field" value="Last Name">
                            <input type="text" placeholder="Last Name" id="af-lname-field" name="af-lname-field">
                        </p>

                        <p class="af-email-field">
                            <input type="hidden" name="af-email-field" value="Email">
                            <input type="email" placeholder="Email" id="af-email-field" name="af-email-field">
                        </p>

                        <p class="af-phone-field">
                            <input type="hidden" name="af-phone-field" value="Phone">
                            <input type="text" placeholder="Phone" id="af-phone-field" name="af-phone-field">
                        </p>

                        <p class="af-message-field">
                            <input type="hidden" name="af-message-field" value="Message">
                            <textarea id="af-message-field" name="subject" placeholder="Message" rows="4" name="af-message-field"></textarea>
                        </p>

                        <p class="af-submit-button">
                            <input type="submit" value="Send" id="af-submit-button" name="af-submit-button">
                        </p>

                        </p>
                    </form>
                </div>
                <div class="af-contact-info">
                    <ul>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <p>New York - USA</p>
                        </li>

                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <p>5454-450-3059</p>
                        </li>

                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <p>contact@yourcompany.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> <!-- content section -->

    <?php get_footer(); ?>
</body>

</html>
