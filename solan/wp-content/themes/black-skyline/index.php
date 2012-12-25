<?php

get_header(); ?>

<div class="center_wrapper">
<div id="main-content">
<div class="left_front_column">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<!--Post title-->
<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<!--Date, Time and Author-->
<p class="meta"><span class="clock"></span><span class="date"><?php the_time(get_option('date_format')) ?></span><span class="posted"> <?php _e( 'Posted by ', 'Blackskyline' ); ?> <?php the_author() ?>  <?php edit_post_link(__('Edit', 'Blackskyline' )); ?></span></p>
<!--Post content-->
<div class="entry">
	<?php the_content(); ?>
    <div class="clearer"></div>
</div>
<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'Blackskyline' ), 'after' => '</div>' ) ); ?>
<!--Post footer-->
<div class="postfooter"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to: ', 'Blackskyline' ); ?> <?php the_title_attribute(); ?>" class="more"><?php _e( 'Read full article', 'Blackskyline' ); ?></a>
<span class="full_post"></span> |<span class="commentbouble"></span><?php comments_popup_link( __( 'Leave a comment', 'Blackskyline' ), __( '1 Comment', 'Blackskyline' ), __( '% Comments', 'Blackskyline' ) ); ?><br/><?php $tag = get_the_tags(); if (! has_tag()){ echo __( 'Tags: No tags', 'Blackskyline' ); } else { the_tags(__('Tags: ', ', ', 'Blackskyline')); } ?>
<br/><?php _e( 'Categories: ', 'Blackskyline' ); ?><?php the_category(', '); ?>
</div></div>
<?php endwhile; ?>

<!-- Older / newer posts -->
<div class="navigation">
			<div class="alignleft"><?php next_posts_link (__( '&laquo; Older Entries', 'Blackskyline')) ?></div>
			<div class="alignright"><?php previous_posts_link(__( 'Newer Entries &raquo;', 'Blackskyline')) ?></div>
            
</div>

<?php else : ?>
<h2 class="center"><?php _e( 'Not Found', 'Blackskyline' ); ?></h2>
<p class="center"><?php _e( 'Sorry, but you are looking for something that is not here.', 'Blackskyline' ); ?></p>
<?php endif; ?>

					</div>
			

<?php get_sidebar(); ?>
<?php get_footer(); ?>
