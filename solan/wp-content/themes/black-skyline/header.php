<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /><!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper-top-navigation">
	<div class="center_wrapper">
    <div id="topmenu">
<?php wp_nav_menu( array('fallback_cb' => '', 'theme_location' => 'top-menu', 'container'=>'', 'echo' => true, ) );?>
	</div></div>
</div>
<!-- Header start -->
    <div id="header">
	    <div class="center_wrapper">
        <div id="logo"><div id="header-content">
        
            <div class="banner">
                <div id="titel">
                 <h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                 <h2><?php bloginfo( 'description' ); ?></h2>
             </div>
    		</div>
        </div>
        </div>
	    </div>
    </div>

<!-- Header end -->
<!-- Navigation start -->
<div id="wrapper-navigation">
	<div id="navigation">
		<div class="center_wrapper">
        <div class="menu">

			<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container'=>'') ); ?> 

            </div>

		</div>
	</div> 
</div>      

   
<!-- Navigation end -->
<!-- Content start -->
<div id="primaryContent">