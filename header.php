<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link show-for-sr" href="#main"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header class="align-middle site-header">

		<div class="row">
			<div class="column small-6 medium-2 site-branding">
				<?php the_custom_logo(); ?>

				<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>

				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) :
				?>
					<p class="site-description"><?php echo esc_html( $description ); ?></p>
				<?php endif; ?>
			</div><!-- . site-branding -->

			<span class="column small-6 medium-10 hamburger text-right" data-responsive-toggle="main-site-navigation" data-hide-for="large">
				<button class="hamburger-icon" type="button" data-toggle="off-canvas-menu"></button>
				<div class="title-bar-title show-for-sr"><?php esc_html_e( 'Menu', '_s' ); ?></div>
			</span>

			<nav id="main-site-navigation" class="column small-6 medium-7">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'dropdown menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
					'walker'         => new WDS_Submenu_Classes(),
				) );
				?>
			</nav><!-- #main-site-navigation -->

			<div class="column hide-for-small-only hide-for-medium-only medium-3 align-right">
				<?php get_search_form(); ?>
			</div>
		</div><!-- .row -->
	</header><!-- .site-header -->

	<main id="main" class="site-main" role="main">
		<div id="content" class="site-content">
