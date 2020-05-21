<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Roe
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/assets/favicon.ico' ?>">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() . '/assets/touch-icon-iphone.png' ?>">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() . '/assets/touch-icon-ipad.png' ?>">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() . '/assets/touch-icon-iphone-retina.png' ?>">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() . '/assets/touch-icon-ipad-retina.png' ?>">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() . '/assets/touch-icon-iphone-6-plus.png' ?>">
	<!-- GOOGLE ANALYTICS GO HERE -->
	<link rel="canonical" href="<?php echo get_site_url() ?>">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Roe | Creative | Branding | Design | Content Agency">
	<meta property="og:description" content="TODO SITE DESCRIPTION HERE">
	<meta property="og:url" content="<?php echo get_site_url() ?>">
	<meta property="og:site_name" content="Roe">
	<meta property="og:image" content="<?php echo get_template_directory_uri() . '/assets/roe-fb.jpg' ?>">
	<meta property="og:image:secure_url" content="<?php echo get_template_directory_uri() . '/assets/roe-fb.jpg' ?>">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:description" content="SITE DESCRIPTION HERE">
	<meta name="twitter:title" content="Roe | Creative | Branding | Design | Content Agency">
	<meta name="twitter:image" content="<?php echo get_template_directory_uri() . '/assets/roe.jpg' ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'roe' ); ?></a>

		<header id="header-nav" class="site-header">
			<a href="<?php echo get_option("siteurl"); ?>">
				<svg class="logo" id="logo" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113 41">
					<path class="cls-1" d="M8.5,22.63l-.25,17.6a.09.09,0,0,1-.09.09h-8a.08.08,0,0,1-.08-.09L0,.94A.09.09,0,0,1,.09.85H6.46a.09.09,0,0,1,.09.09L8.08,6S12,.26,18.88.26a21.18,21.18,0,0,1,4.5.59l.09.09-.6,7.65s0,.09-.08.09c-.34,0-1.62-.17-2.55-.17C13.26,8.42,8.5,14.8,8.5,22.63Zm58.93-2C67.43,31.81,57.9,41,46.68,41S25.93,31.81,25.93,20.59,35.46.17,46.68.17,67.43,9.36,67.43,20.59Zm-8.59,0A12.16,12.16,0,1,0,46.68,32.75,12.16,12.16,0,0,0,58.84,20.59ZM113,18.12a25.3,25.3,0,0,1-.6,5.53H82.9l.09.25c1.27,5.53,5.86,8.93,11.9,8.93a16.19,16.19,0,0,0,10.37-4h.09L110,34.71v.08a23.25,23.25,0,0,1-15.3,6c-12,0-21-8.76-21-20.42A20.05,20.05,0,0,1,94,0C104.5.17,113,7.91,113,18.12Zm-8.5-1.87C104.5,12.84,100,8,93.78,8A11.41,11.41,0,0,0,83,16.25l-.09.25h21.6Z"/></svg>
			</a>

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'main-nav',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->

			<!-- Project Page Menu -->
			<a href="<?php echo get_site_url() . '/work' ?>" class="close-project-icon">
	    		<svg id="close-project-icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.41 27.41"><title>Close Menu</title><polygon class="cls-1" points="27.41 1.41 26 0 13.71 12.29 1.41 0 0 1.42 12.29 13.71 0 26 1.41 27.41 13.71 15.12 26 27.41 27.41 26 15.12 13.71 27.41 1.41"/></svg>
			</a>

		<!-- Mobile Menu -->
		<a href="javascript:void(0);" class="icon" onclick="mobileMenu()">
    		<!-- Menu Icon -->
    		<svg id="menu-icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 26"><title>Open Menu</title><path class="cls-1" d="M28,0V2H0V0ZM0,14H28V12H0ZM0,26H28V24H0Z"/></svg>
    	</a>
    	<a href="javascript:void(0);" class="icon" onclick="mobileMenu()">
    		<svg id="close-icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.41 27.41"><title>Close Menu</title><polygon class="cls-1" points="27.41 1.41 26 0 13.71 12.29 1.41 0 0 1.42 12.29 13.71 0 26 1.41 27.41 13.71 15.12 26 27.41 27.41 26 15.12 13.71 27.41 1.41"/></svg>
    	</a>
    		

  		</header><!-- #masthead -->

		<div id="content" class="site-content">
