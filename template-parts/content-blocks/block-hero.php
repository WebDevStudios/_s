<?php
/**
 * The template used for displaying a Hero block.
 *
 * @package _s
 */

// Set up fields.
$block_title = get_field( 'title' );
$text        = get_field( 'text' );
$alignment   = _s_get_block_alignment( $block );

// Start a <container> with possible block options.
_s_display_block_options(
	array(
		'container' => 'section', // Any HTML5 container: section, div, etc...
		'class'     => 'content-block hero-block' . esc_attr( $alignment ), // Container class.
	)
);
?>
	<div class="container hero-content<?php echo esc_attr( _s_get_animation_class() ); ?>">
		<?php _s_display_hero_heading( $block_title ); ?>

		<?php if ( $text ) : ?>
			<p class="hero-description"><?php echo esc_html( $text ); ?></p>
		<?php endif; ?>

		<?php
		_s_display_link(
			array(
				'button' => true,
				'class'  => 'button-hero',
			)
		);
		?>
	</div>
</section>
