<?php


get_header(); ?>

<div class="center_wrapper">
<div id="main-content">
<div class="left_front_column">

						<h2 class="center"><?php _e( 'Error 404 - Not Found', 'Blackskyline') ?></h2>
            <p><?php _e( 'Apologies, but we were unable to find what you were looking for. Perhaps searching will help.', 'Blackskyline') ?></p>
            
            <?php get_search_form(); ?>
		</div>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>