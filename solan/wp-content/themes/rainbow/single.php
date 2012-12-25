<?php get_header(); ?>

	<!-- Start: Left Panel -->
	<div class="leftPanel">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<div class="entryContent">
				<?php the_post_thumbnail(); ?>
				<?php the_content('<p class="serif">Continue reading &raquo;</p>'); ?>
                <div class="clear"></div>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                <?php rainbow_post_meta();?>
                <div class="author-bio">
					<?php $author_ID = get_the_author_meta( 'ID' );?>
                    <div class="name-avatar">
                    	<?php echo get_avatar( $author_ID, '80', '<!--no gravatar-->').'<span class="name">';?>
                        <?php the_author_meta( "display_name", $author_ID );?>
                    </div>
                    <div class="description">
                    	<?php the_author_meta( "description", $author_ID );?>
                    </div>
                    <div class="clear"></div>
				</div><!--author-bio-->
			</div>

			<?php rainbow_navigation();?>	
			
		</div>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>

	</div>
	<!-- End: Left Panel -->
	<!-- Start: Right Panel -->
	<div class="rightPan">
		<?php get_sidebar(); ?>
	</div>
	<!-- End: Right Panel -->
	
<?php get_footer(); ?>
