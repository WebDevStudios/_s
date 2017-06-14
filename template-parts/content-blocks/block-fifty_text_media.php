<?php
/**
 * The template used for displaying fifty-fifty text/media.
 *
 * @package _s
 */

// Get <img> data.
$image_data = get_sub_field( 'media_right' );

// Start a <container> with a possible media background.
_s_display_block_options( array(
	'container' => 'section', // Any HTML5 container: section, div, etc...
	'class'     => 'content-block fifty-text-media', // Container class.
) );
?>
	<div class="row">
		<div class="column small-12 medium-6 fifty-text-wrap">
			<?php echo force_balance_tags( get_sub_field( 'content_left' ) ); // WPCS: XSS OK. ?>
		</div><!-- .fifty-text-wrap -->

		<div class="column small-12 medium-6 fifty-media-wrap">
			<img class="fifty-media-image" src="<?php echo esc_url( $image_data['sizes']['medium'] );  ?>" alt="<?php echo esc_html( $image_data['alt'] ); ?>">
		</div><!-- .fifty-media-wrap -->
	</div><!-- .row -->
</section><!-- .fifty-text-media -->
