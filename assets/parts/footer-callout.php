<?php
/*
 * Footer Call to Action
 * Outputs footer call to action contents
 *
 * @version 1.0
 * @since agencyforcewp 1.0
 */
 ?>
<!-- call to action section -->
<?php
$af_footer_calltoaction_text        = esc_html( get_theme_mod('afwp_footer_callout_text') );
$af_footer_calltoaction_btntext     = esc_html( get_theme_mod('afwp_footer_callout_btntext') );
$af_footer_calltoaction_btnurl      = esc_url( get_theme_mod('afwp_footer_callout_btnurl') );
?>
<section class="<?php if ( is_page_template('page-service.php') ): echo 'af-about-calltoaction-section af-service-page-calltoaciton-section'; else: echo 'af-about-calltoaction-section af-service-page-calltoaciton-section af-blogpage-footer-callout'; endif; ?>">
    <div class="af-container">
        <div class="af-about-calltoaction-bglayer">
            <div class="af-calltoaction-wrapper clearfix">
                <div class="af-calltoaction-title">
                    <?php if ( $af_footer_calltoaction_text != null ): ?>
                        <h2><?php echo $af_footer_calltoaction_text; ?></h2>
                    <?php endif; ?>
                </div>
            <div class="af-calltoaction-button">
                    <?php if ( $af_footer_calltoaction_btntext != null && $af_footer_calltoaction_btnurl != null ): ?>
                        <a href="<?php echo $af_footer_calltoaction_btnurl; ?>"><?php echo $af_footer_calltoaction_btntext; ?> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
