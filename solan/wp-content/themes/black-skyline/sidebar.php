<div class="right_front_column">

	<ul>
    
<?php if ( !dynamic_sidebar('Sidebar', 'Blackskyline') ) : ?>


			<li id="archives" class="widget widget-container">
				<h3 class="widgettitle-sidebar"><?php _e( 'Archives', 'Blackskyline' ); ?></h3>
				<ul>
					<li><?php wp_get_archives( 'type=monthly' ); ?></li>
				</ul>
			</li>

			<li class="widget widget_meta">	
            <h3 class="widgettitle-sidebar"><?php _e( 'Meta', 'Blackskyline' ); ?></h3>	
					<ul><li><?php wp_register(); ?></li>
					<li><?php wp_loginout(); ?></li>
					<li><?php wp_meta(); ?></li>
                    </ul>
				</li>
			

<?php endif; ?>
</ul>	
    </div>
                
			</div>
				<div class="clearer">&nbsp;</div>
			</div>
            
            