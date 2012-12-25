<?php get_header(); ?>

<div class="center_wrapper">
<div id="main-content">
<div class="left_front_column">

<?php if (have_posts()) : ?>
	
<div>
    <h2 class="pagetitle"><?php _e( 'Search Results for ', 'Blackskyline' ); ?>&ldquo;<?php the_search_query(); ?>&rdquo;</h2>
    <div class="entry"></div>
</div>

<?php while (have_posts()) : the_post(); ?>

<!--Post title-->
<div id="post-<?php the_ID(); ?>" class="post">
<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title=""<?php _e( 'Permanent Link to: ', 'Blackskyline' ); ?><?php the_title_attribute(); ?>"><?php the_title_attribute(); ?></a></h2>

<!--Date, Time and Author-->
<p class="meta"><span class="clock"></span><span class="date"><?php the_time(get_option('date_format')) ?></span><span class="posted"> <?php __( 'Posted by ', 'Blackskyline' ); ?> <?php the_author() ?> <?php edit_post_link( __('Edit this entry ', 'Blackskyline' )); ?></span></p>

    <!--Post content-->	
    <div class="entry">
    <?php the_excerpt(); ?>
<div class="postfooter"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to: ', 'Blackskyline' ); ?> <?php the_title_attribute(); ?>" class="more"><?php _e( 'Read full article', 'Blackskyline' ); ?></a>
<span class="full_post"></span> |<span class="commentbouble"></span><?php comments_popup_link( __( 'Leave a comment', 'Blackskyline' ), __( '1 Comment', 'Blackskyline' ), __( '% Comments', 'Blackskyline' ) ); ?><br/><?php $tag = get_the_tags(); if (! has_tag()){ echo __( 'Tags: No tags', 'Blackskyline' ); } else { the_tags(__('Tags: ', ', ', 'Blackskyline')); } ?>

<br/><?php _e( 'Categories: ', 'Blackskyline' ); ?><?php the_category(', '); ?></div>
    </div>
</div>
<?php endwhile; ?>

<!-- Older / newer posts -->
<div class="navigation">
			<div class="alignleft"><?php next_posts_link (_e( '&laquo; Older Entries', 'Blackskyline')) ?></div>
			<div class="alignright"><?php previous_posts_link(_e( 'Newer Entries &raquo;', 'Blackskyline')) ?></div>


<?php else : ?>

<!-- No posts-->
<div class="post">

    
    <div class="entry">
        					<div class="entry-content">
						<h2 class="title"><?php _e( 'No posts found. Try a different search?.', 'Blackskyline' ); ?></h2>
						<?php get_search_form(); ?>
    </div>
</div>
	<?php endif; ?>
</div></div>
<!-- end content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>