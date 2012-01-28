<!DOCTYPE html>

<html>
<head>

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.7.1.min.js" type="text/javascript"></script>	
	<script src="http://yui.yahooapis.com/3.4.1/build/yui/yui-min.js" type="text/javascript"></script>
	<script src="./wp-content/themes/bmes/js/yuibootstrap.js" type="text/javascript"></script>
	
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>

<body>

	<div id="container">
		<div id="header"> 
			<div id="masthead">
				<div id="masthead-inner">
					<a href="<?php bloginfo('url'); ?>"><img alt="BMES" src="./wp-content/themes/bmes/img/logo.png" /></a>
				</div>
			</div>
			<div id="navigation">
				<div id="navigation-inner">
				<?php wp_nav_menu(array('theme_location' => 'navigation',
										'container' => '', 
										'menu_id' => 'navigation-bar',
										'fallback_cb' => 'navigation_fallback')); //navigation_fallback?> 
				</div>
			</div>
		</div>
		<div id="outer">
			<div id="inner">
			
				<?php if(is_home()) : slider(); ?>
				
					<div id="newsletter">
						<form method="post"> 
							<span>Subscribe to our Newsletter:</span>
							<input type="hidden" name="na" value="s"/> 
							<input type="text" name="ne" />  
							<input type="submit" class ="button button-secondary submit" value="Submit"/> 
						</form> 
					</div>
				
				<?php endif; ?>
				
				<div id="content">
	
	
