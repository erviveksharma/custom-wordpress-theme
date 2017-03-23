<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UnifyProvis
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'unifyprovis' ); ?></a>

		<div class="wrapper">

			<!--=== Header ===-->
			<header id="masthead" class="site-header" role="banner">
				<div class="header">
					<div class="container">
						<!-- <div class="site-branding"> -->
							<!-- Logo -->
	                        <a class="logo" href="<?php echo home_url( '/' ); ?>">
	                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="130" alt="Logo" />
	                        </a>
	                        <!-- End Logo -->

	                        <!-- Topbar -->
	                        <div class="topbar">
	                            <?php $args = array(
	                                'menu_class' => 'loginbar pull-right',
	                                'container' => 'ul',
	                                'after' => '<li class="topbar-devider"></li>',
	                                'theme_location' => 'top',
	                                'menu_id' => 'top-menu',
	                            );
	                            wp_nav_menu( $args ); ?>
	                        </div>
	                        <!-- End Topbar -->

	                        <!-- Toggle get grouped for better mobile display -->
	                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
	                            <span class="sr-only"><?php esc_html_e( 'Toggle Menu', 'unifyprovis' ); ?></span>
	                            <span class="fa fa-bars"></span>
	                        </button>
	                        <!-- End Toggle -->
	                    <!-- </div> --><!-- .site-branding -->
					</div><!-- .container -->

					<!-- <nav id="site-navigation" class="main-navigation" role="navigation"> -->
	                    <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
	                        <div class="container">
	                            <?php $args = array(
	                                'menu_class' => 'nav navbar-nav',
	                                'container' => 'ul',
	                                'theme_location' => 'primary',
	                                'menu_id' => 'primary-menu',
	                            );
	                            wp_nav_menu( $args ); ?>
	                        </div>
	                    </div>
	                <!-- </nav> --><!-- #site-navigation -->

				</div><!-- .header -->
	        </header><!-- #masthead -->
			<!--=== End Header ===-->

			<div id="content" class="site-content">
				<?php if ( is_single() || is_page() ) : ?>
					<div class="bg-color-light">
				<?php endif; ?>
	            <div class="container content-md">
    	            <div class="row">
