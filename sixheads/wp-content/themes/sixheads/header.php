<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sixheads
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sixheads' ); ?></a>

	<div id="top" class="grid">
		<header id="masthead" class="site-header" role="banner">

			<?php if ( is_front_page() ) { ?>
			    <nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
			<?php } else { ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
				</nav><!-- #site-navigation -->
			<?php } ?>


			<a href="#site-navigation" class="menu-toggle"><span class="icon-list"></span></a>

			<div class="site-branding">
				<div class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php bloginfo('template_directory'); ?>/img/sixheads-logo.svg" alt="<?php bloginfo( 'name' ); ?>">
					</a>
				</div>

			</div><!-- .site-branding -->

		</header><!-- #masthead -->
	</div>

	<div id="content" class="site-content">
