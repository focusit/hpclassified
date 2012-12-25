</div><!-- End: Body Content -->
<div class="body-bottom"></div>
<div class="by"><?php rainbow_by();?></div>
</div><!-- End: Main Container -->
</div>
<!-- Start: Footer -->
<div class="footer">
	<div class="inner">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-area-1') ) : ?>
  				<div class="footer-widget">
				<h3>Tag Cloud</h3>
			        <?php //wp_list_categories('show_count=1&title_li='); ?>
                    <?php $args = array(
					'smallest'                  => 10, 
					'largest'                   => 10,
					'unit'                      => 'pt', 
					'number'                    => 20,  
					'format'                    => 'list',
					'separator'                 => "",
					'orderby'                   => 'count', 
					'order'                     => 'DESC' );
					wp_tag_cloud($args); ?> 
			</div>
	<?php endif; ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-area-2') ) : ?>
  <div class="footer-widget center">
				<h3>Calendar</h3>
				<?php get_calendar(); ?>
			</div>
	<?php endif; ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget-area-3') ) : ?>
  <div class="footer-widget">	
                <h3>Recent Posts</h3>
                <ul>
                <?php
                    $args = array( 'numberposts' => '12' ,'post_status' => 'publish');
                    $recent_posts = wp_get_recent_posts( $args );
                    foreach( $recent_posts as $recent ){
                        echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.$recent["post_title"].'" >' .   $recent["post_title"].'</a> </li> ';
                    }
                ?>
                </ul>
			</div>
	<?php endif; ?>
	</div>
    <div class="credits">Powered by Wordpress</div>
</div>
<!-- End: Footer -->

		<?php wp_footer(); ?>
</body>
</html>
