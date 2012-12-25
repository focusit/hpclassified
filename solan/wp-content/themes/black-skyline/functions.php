<?php
if(!isset($content_width)) $content_width = 600;

?>
<?php

add_action( 'widgets_init', 'Blackskyline_register_sidebars' );

function Blackskyline_register_sidebars() {

	/* Register the 'primary' sidebar. */
    register_sidebar(array(
		'id' => 'Sidebar',
		'name' => __( 'Sidebar', 'Blackskyline' ),
		'description' => __( 'This is the primary widget in the sidebar, it´s placed in the right column' ),		
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widgettitle-sidebar">',
        'after_title' => '</h3>',
    ));

		/* Register the sidebar in the footer, position 'left'. */
	register_sidebar(
		array(
			'id' => 'footer_left',
			'name' => __( 'Footer (Left side)', 'Blackskyline' ),
			'description' => __( 'This is the first widget in the footer, it´s placed in the left column' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>',
		)
	);

			/* Register the sidebar in the footer, position 'center'. */
	register_sidebar(
		array(
			'id' => 'footer_center',
			'name' => __( 'Footer (Center)', 'Blackskyline' ),
			'description' => __( 'This is the second  widget in the footer, it´s placed in the center column' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>',
		)
	);
	
			/* Register the sidebar in the footer, position 'right'. */
	register_sidebar(
		array(
			'id' => 'footer_right',
			'name' => __( 'Footer (Right side)', 'Blackskyline' ),
			'description' => __( 'This is the third widget in the footer, it´s placed in the right column' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>',
		)
	);
}


?>
<?php


if (function_exists('wp_nav_menu')) {
function Blackskyline_register_my_menus() {
register_nav_menus(
array(
			
			'main-menu' => __( 'Main menu', 'Blackskyline'),
			'top-menu' => __( 'Top Menu', 'Blackskyline' ),
));
}
add_action( 'init', 'Blackskyline_register_my_menus' );
}

// Make theme available for translation
// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'Blackskyline', TEMPLATEPATH . '/languages' );
	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file ); 

if ( ! function_exists( 'Blackskyline_comment' ) ) :
/*Comment function */
function Blackskyline_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>
						<?php printf( __( '%s <span class="says">says:</span>', 'Blackskyline' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div><!-- .comment-author .vcard -->
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em><?php _e( 'Your comment is awaiting moderation.', 'Blackskyline' ); ?></em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s at %2$s', 'Blackskyline' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( 'Edit', 'Blackskyline' ), ' ' );
			?>
		</div><!-- .comment-meta .commentmetadata -->

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'title_reply' => 'Leave a comment',  'reply_text' => __('Reply','Blackskyline'), 'max_depth' => $args['max_depth'] ) ) ); ?>
            
            
		</div><!-- .reply -->
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'Blackskyline' ); ?> <?php comment_author_link(); ?> <?php edit_post_link(__('Edit', 'Blackskyline' )); ?></p>
	<?php
			break;
	endswitch;
}
endif;
?>
<?php
if(function_exists('add_theme_support')) {
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
	add_editor_style();

}

define('HEADER_TEXTCOLOR', 'ff6700');//  Default text color
define('HEADER_IMAGE', '%s/design/banner.png');  // %s is theme dir uri, set a default image
define('HEADER_IMAGE_WIDTH', 957); //  Default image width is actually the div's width
define('HEADER_IMAGE_HEIGHT', 160);  // Same for height
function header_style() {
//  This function defines the style for the theme
//  You can change these selectors to match your theme
?>

<style type="text/css">

<?php if ( 'blank' == get_header_textcolor() ) { ?>
#titel {
display: none;
}
#titel { display: none; }
<?php } else { ?>
#titel {
	float: left;
	padding: 0px 0 0 0px;
	color: #FFF;
	width: 720px;
	height:134px;
}
<?php } ?>
#logo{
background: url(<?php header_image() ?>) no-repeat;
width: 957px;
height: 160px;
margin: 0 0 0 10px;
padding: 0 0;

}
</style>
<?php
}
function admin_header_style() {
?>
<style type="text/css">
#headimg{
background: url(<?php header_image() ?>) no-repeat;
height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
width:<?php echo HEADER_IMAGE_WIDTH; ?>px;
padding:0 0 0 18px;
}

#headimg h1{
padding-top:40px;
margin: 0;
}
#headimg h1 a{
color:#<?php header_textcolor() ?>;
text-decoration: none;
border-bottom: none;
}
#headimg #desc{
color:#<?php header_textcolor() ?>;
font-size:1em;
margin-top:-0.5em;
}

#desc {
display: none;
}

<?php if ( 'blank' == get_header_textcolor() ) { ?>
#headimg h1, #headimg #desc {
display: none;
}
#headimg h1 a, #headimg #desc {
color:#<?php echo HEADER_TEXTCOLOR ?>;
}
<?php } ?>

</style>
<?php
}
add_custom_image_header('header_style', 'admin_header_style');
add_custom_background();
?>