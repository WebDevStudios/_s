<?php
/**
 * Template Name: Page w/ ACF
 *
 * The template for displaying pages with ACF components.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

<div class="small-12 primary content-area">
	<?php _s_display_content_blocks(); ?>
</div><!-- .primary -->

<?php get_footer(); ?>
