<?php

?>

 <div id="footer">
    <div class="center_wrapper-footer">
        <!-- Footer content start -->  
        <div id="content-footer">
        <div id="footer-main">
<div id="footer-sidebar1"><ul>
<?php if ( !dynamic_sidebar('footer_left', 'Blackskyline') ) : ?>
<?php endif; ?></ul>
</div>

<div id="footer-sidebar3"><ul>
<?php if ( !dynamic_sidebar('footer_center', 'Blackskyline') ) : ?>
<?php endif; ?></ul>
</div>

<div id="footer-sidebar2"><ul>
<?php if ( !dynamic_sidebar('footer_right', 'Blackskyline') ) : ?>
<?php endif; ?></ul>
</div></div><div class="clearer">&nbsp;</div>
				<div align="left" style="padding-left:10px; padding-bottom:20px;" > <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a> <?php bloginfo( 'description' ); ?><div style="float:right; padding-right:20px">Theme by <a href="http://w3blog.dk" title="W3blog" target="_blank">W3blog</a></div></div>
		
        </div>
	</div>

</div>
<?php


	wp_footer();
?>
</body>
</html>
