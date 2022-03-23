<?php
/*
 * Service Boxes
 * Outputs service section contents in home & service pages
 *
 * @version 1.0
 * @since agencyforcewp 1.0
 */
 ?>

<section class="af-service-box-section <?php if ( is_page_template('page-service.php') ): echo 'af-service-box-section-bg'; endif; ?> clearfix">
    <div class="af-container">
        <div class="af-service-boxes-container">
            <?php
                $home_service_heading       = esc_html( get_theme_mod('afwp_homepage_services_heading', '') );
                $home_service_subheading    = esc_html( get_theme_mod('afwp_homepage_services_subtitle', '') );
                $home_service_box           = get_theme_mod('afwp_homepage_service_box', '');

                if ($home_service_heading != null): ?>
                    <h2><?php echo $home_service_heading; ?></h2>
            <?php endif;
                if ($home_service_subheading != null): ?>
                    <p><?php echo $home_service_subheading; ?></p>
            <?php endif; ?>
            <!-- Service box container -->
            <?php if ( $home_service_box != null ):  ?>
                <div class="af-service-boxes <?php if ( is_page_template('page-service.php') ): echo 'af-service-box-servicepage'; endif; ?>">
                    <?php
                    /*
                     * $box_id counter adds an unique class to each service box dynamically.
                     * First we assigned the variable with 0 value, than incremented
                     * it with each loop.
                     */
                    $box_id = 0; ?>
                    <?php foreach ( $home_service_box as $service_box ) : ?>
                        <!-- single service box -->
                        <div class="af-service-box-item service-box-item-bg<?php echo $box_id; ?>">
                            <img src="<?php echo esc_url( $service_box['afwp_homepage_service_box_img'] ); ?>" alt="<?php echo esc_html( $service_box['afwp_homepage_service_box_title'] ); ?>">

                            <?php if ( $service_box['afwp_homepage_service_box_title'] != null): ?>
                                <h3><?php echo esc_html( $service_box['afwp_homepage_service_box_title'] ); ?></h3>
                            <?php endif; ?>

                            <?php if ( $service_box['afwp_homepage_service_box_desc'] != null): ?>
                                <p><?php echo esc_html( $service_box['afwp_homepage_service_box_desc'] ); ?></p>
                            <?php endif; ?>

                            <ul>
                                <?php if ( $service_box['afwp_homepage_service_box_list1'] != null): ?>
                                    <li>
                                        <?php if ( $service_box['afwp_homepage_service_box_list_icon'] != null): ?>
                                            <img src="<?php echo esc_url( $service_box['afwp_homepage_service_box_list_icon'] ); ?>" alt="<?php echo esc_html( $service_box['afwp_homepage_service_box_list1'] ); ?>">
                                        <?php endif; ?>
                                        <p><?php echo esc_html( $service_box['afwp_homepage_service_box_list1'] ); ?></p>
                                    </li>
                                <?php endif; ?>

                                <?php if ( $service_box['afwp_homepage_service_box_list2'] != null): ?>
                                    <li>
                                        <?php if ( $service_box['afwp_homepage_service_box_list_icon'] != null): ?>
                                            <img src="<?php echo esc_url( $service_box['afwp_homepage_service_box_list_icon'] ); ?>" alt="<?php echo esc_html( $service_box['afwp_homepage_service_box_list1'] ); ?>">
                                        <?php endif; ?>
                                        <p><?php echo esc_html( $service_box['afwp_homepage_service_box_list2'] ); ?></p>
                                    </li>
                                <?php endif; ?>

                                <?php if ( $service_box['afwp_homepage_service_box_list3'] != null): ?>
                                    <li>
                                        <?php if ( $service_box['afwp_homepage_service_box_list_icon'] != null): ?>
                                            <img src="<?php echo esc_url( $service_box['afwp_homepage_service_box_list_icon'] ); ?>" alt="<?php echo esc_html( $service_box['afwp_homepage_service_box_list1'] ); ?>">
                                        <?php endif; ?>
                                        <p><?php echo esc_html( $service_box['afwp_homepage_service_box_list3'] ); ?></p>
                                    </li>
                                <?php endif; ?>

                                <?php if ( $service_box['afwp_homepage_service_box_list4'] != null): ?>
                                    <li>
                                        <?php if ( $service_box['afwp_homepage_service_box_list_icon'] != null): ?>
                                            <img src="<?php echo esc_url( $service_box['afwp_homepage_service_box_list_icon'] ); ?>" alt="<?php echo esc_html( $service_box['afwp_homepage_service_box_list1'] ); ?>">
                                        <?php endif; ?>
                                        <p><?php echo esc_html( $service_box['afwp_homepage_service_box_list4'] ); ?></p>
                                    </li>
                                <?php endif; ?>

                                <?php if ( $service_box['afwp_homepage_service_box_list5'] != null): ?>
                                    <li>
                                        <?php if ( $service_box['afwp_homepage_service_box_list_icon'] != null): ?>
                                            <img src="<?php echo esc_url( $service_box['afwp_homepage_service_box_list_icon'] ); ?>" alt="<?php echo esc_html( $service_box['afwp_homepage_service_box_list1'] ); ?>">
                                        <?php endif; ?>
                                        <p><?php echo esc_html( $service_box['afwp_homepage_service_box_list5'] ); ?></p>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <!-- end single service box -->
                        <?php $box_id++ ?>
                    <?php endforeach; ?>
                </div> <!-- Eng service box container -->
            <?php endif; ?>
        </div>
    </div>
</section>
