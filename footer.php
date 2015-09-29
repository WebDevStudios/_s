<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<div class="footer-area">
		<?php wds_page_builder_area( 'after_content' ); ?>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrap">

			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_s' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', '_s' ), '_s', '<a href="http://webdevstudios.com/" rel="designer">WebDevStudios</a>' ); ?>
			</div><!-- .site-info -->

		</div><!-- .wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
