<?php
/**
* The template for displaying post sidebar
*
* @link https://developer.wordpress.org/reference/functions/dynamic_sidebar/
* @version 1.0
* @since agencyforcewp 1.0
*/
?>
<!-- sidebar section -->
<div class="af-post-sidebar af-floatright">
    <?php if ( is_singular('post') ): dynamic_sidebar('agencyforcewp_primary_sidebar'); endif; ?>
</div>
