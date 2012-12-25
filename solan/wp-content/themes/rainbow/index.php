<?php get_header(); ?>

	<!-- Start: Left Panel -->
		<div class="leftPanel">

			<?php if (have_posts()) : ?>
		
				<?php while (have_posts()) : the_post(); ?>
					<!-- Start: Post -->
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<div class="entryContent">
						    <?php the_post_thumbnail(); ?>
							<?php the_excerpt(); ?>
						</div>
                        <?php rainbow_post_meta();?>
					</div>
					<div class="clear"></div>
					<!-- End: Post -->
				<?php endwhile; ?>
                
				<?php rainbow_navigation();?>
                
			<?php else : ?>
		
				<h2 class="center">Not Found</h2>
				<p class="center">Sorry, but you are looking for something that isn't here.</p>
				<?php get_template_part('searchform'); ?>
		
			<?php endif; ?>
	</div>
		<!-- End: Left Panel -->
		<!-- Start: Right Panel -->
		<div class="rightPan">
			<?php get_sidebar(); ?>
		</div>
		<!-- End: Right Panel -->
<?php get_footer(); ?>
