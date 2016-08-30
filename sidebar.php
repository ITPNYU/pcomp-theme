<div class="grid_8 omega">
    <div class="sidebar">
        <?php if (!dynamic_sidebar('primary-widget-area')) : ?>
            <?php get_search_form(); ?>
 	<?php echo do_shortcode('[searchandfilter fields="category" submit_label="Filter" types="checkbox" headings="Find posts by category"]'); ?>        
        <?php endif; // end primary widget area  ?>
        <?php
        // A second sidebar for widgets, just because.
        if (is_active_sidebar('secondary-widget-area')) :
            ?>
            <?php dynamic_sidebar('secondary-widget-area'); ?>
        <?php endif; ?>
    </div>
</div>
