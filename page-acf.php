<?php
/**
 * Template Name: Page with Content Blocks
 *
 * The template for displaying pages with ACF components.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<div class="content-area">
		<main id="main" class="site-main">
		<?php _s_display_content_blocks(); ?>
		</main><!-- #main -->
	</div><!-- .primary -->

<?php get_footer(); ?>
