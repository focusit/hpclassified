<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Sidebar Widget Area',
		'id' => 'sidebar-widget-area',
		'description' => 'The sidebar widget area width: 213px' ,
		'before_widget' => '<div class="widgetBlock">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',        
    ));
	register_sidebar( array(
		'name' => 'Footer Widget Area 1' ,
		'id' => 'footer-widget-area-1',
		'description' => 'Note: Position "left" and width: 300px',
		'before_widget' => '<div class="footer-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>', 
	) );
	register_sidebar( array(
		'name' => 'Footer Widget Area 2',
		'id' => 'footer-widget-area-2',
		'description' =>  'Note: Position "center" and width: 300px' ,
		'before_widget' => '<div class="footer-widget center">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>', 
	) );
	register_sidebar( array(
		'name' =>  'Footer Widget Area 3',
		'id' => 'footer-widget-area-3',
		'description' => 'Note: Position "right" and width: 300px' ,
		'before_widget' => '<div class="footer-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>', 
	) );
// Register nav menus
function rainbow_nav_menus() {
	register_nav_menus(
		array(
		  'primary' => 'Header Menu'
		)
	);
}
add_action('init', 'rainbow_nav_menus');

// Add a home link to wp_nav_menu
function rainbow_add_home_link($menuitems, $args) {
	if('primary' == $args->theme_location) {
		$home = '<li class="home"><a href="'. home_url() .'/"><strong>'. get_bloginfo('name') .'</strong></a></li>';
		$menuitems = $home . $menuitems;
	}
return $menuitems;
}
add_filter( 'wp_nav_menu_items', 'rainbow_add_home_link', 10, 2 );

//Multi-level pages menu  
function rainbow_page_menu() {
	//wp_list_pages('depth=3&sort_column=menu_order&title_li=');
	echo '<ul class="menu">';
	?><li class="home"><a href="<?php echo home_url(); ?>/"><strong><?php bloginfo('name'); ?></strong></a></li><?php
	wp_list_pages('sort_column=menu_order&title_li=&link_before=&link_after=<span></span>&depth=3');
	echo '</ul>';
} 

// Scripts
function rainbow_enqueue_scripts() {
	if (!is_admin()) {
	  wp_deregister_script( 'jquery' );
	  wp_register_script( 'jquery', 'http://code.jquery.com/jquery-latest.js');
	  wp_enqueue_script( 'jquery' );
	  wp_register_script('custom_script',
	  get_template_directory_uri() . '/js.js');
	  wp_enqueue_script('custom_script');
	}       
}
add_action('init', 'rainbow_enqueue_scripts');

// Tag Cloud Args
function rainbow_tag_cloud_filter($args = array()) {
	$args = array(
	'smallest'                  => 10,
	'largest'                   => 10,
	'unit'                      => 'pt',
	'number'                    => 20,
	'format'                    => 'list',
	'separator'                 => "",
	'orderby'                   => 'count',
	'order'                     => 'DESC' );
 return $args;
}
add_filter('widget_tag_cloud_args', 'rainbow_tag_cloud_filter', 90);

// Post meta data
function rainbow_post_meta() {?>
<div class="comment-bubble"><?php if ( comments_open() ) : comments_popup_link('0', '1', '%', 'count'); else: echo '<span title="Comments are disabled" class="count">OFF</span>'; endif; ?></div>
<div class="entry-date toggle">
    <div class="d"><?php the_time('d') ?></div>
    <div class="m"><?php the_time('M') ?></div>
    <div class="toggle-me">
    	<b>Posted:</b>
        <p><?php the_time('F j, Y l'); ?> at <?php the_time('g:i a'); ?></p>
    </div>
</div><!--entry-date-->
<?php edit_post_link('Edit this entry.', '', ''); ?>
<div class="clear"></div>
<?php if ( is_single() ):?>
<div class="tags-cats">
<?php
/*$onchange = "onchange=\"document.location.href=this.options[this.selectedIndex].value;\"";
echo "<select class='cats' $onchange>
	<option class='title'>Categories</option>\n";
    foreach (get_the_category() as $category)  {
        echo "<option value=\"".get_category_link($category->term_id )."\">".ucwords($category->cat_name)."</option>\n";
    }
echo "</select>";
$tags = get_the_tags();
if ($tags):
echo "<select class='tags' $onchange>
	<option class='title'>Tags</option>\n";
    foreach ($tags as $tag)  {
        echo "<option value=\"".get_tag_link($tag->term_id)."\">".ucwords($tag->name)."</option>\n";
    }
echo "</select>";
endif;*/
?>
<p>
<b>Categories:</b> <?php the_category(', '); ?>
 
<?php the_tags('<b>Tags:</b> ', ', ', ''); ?> 
</p>

</div><!--tags-cats-->
<?php endif;
} // end post_meta func
// Prev-Next Navigation Links
function rainbow_navigation() {?>
<div class="navigation">
	<div class="alignleft"><?php next_posts_link('Older Posts') ?></div>
	<div class="alignright"><?php previous_posts_link('Newer Posts') ?></div>
</div><?php
} // end func
// Other
add_editor_style();
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 110, 110, true ); // Default size
if ( ! isset( $content_width ) ) $content_width = 624;
// Sets the post excerpt length to 40 words.
function rainbow_excerpt_length( $length ) {
	return 60;
}
add_filter( 'excerpt_length', 'rainbow_excerpt_length' );

// Returns a Continue Reading link for excerpts
function rainbow_continue_reading_link() {
	return '<span class="more-link"><a href="'. esc_url( get_permalink() ) . '">' . __( '<span class="button">Continue reading &rarr;</span>', 'rainbow' ) . '</a></span>';
}

// Replaces "[...]".
function rainbow_auto_excerpt_more( $more ) {
	return ' &hellip;' . rainbow_continue_reading_link();
}
add_filter( 'excerpt_more', 'rainbow_auto_excerpt_more' );

// Adds Continue Reading link to excerpts.
function rainbow_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= rainbow_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'rainbow_custom_excerpt_more' );
//
function rainbow_by() {
	echo '<a href="http://www.alihan.com.tr/blog/"><img src="'.get_template_directory_uri().'/images/designer.png" alt="" /></a>';
} 

?>