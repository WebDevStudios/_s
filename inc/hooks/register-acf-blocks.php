<?php
/**
 * Functions related to ACF Gutenberg blocks.
 *
 * @package wd_s
 */

namespace WebDevStudios\wd_s;

/**
 * Register ACF Gutenberg Blocks.
 *
 * @author wd_s.
 */

// Check if function exists.
if ( function_exists( 'acf_register_block_type' ) ) :

	/**
	 * Register ACF Gutenberg Blocks.
	 *
	 * @author wd_s.
	 */
	function register_acf_gutenberg_blocks() {

		$wd_s_blocks_folder = trailingslashit( get_template_directory() ) . 'inc/blocks/';

		// Include all of the blocks in the directory.
		if ( is_dir( $wd_s_blocks_folder ) ) :
			foreach ( glob( $wd_s_blocks_folder . '*.php' ) as $wd_s_block ) :
				require $wd_s_block;
			endforeach;
		endif;

	}
	add_action( 'acf/init', __NAMESPACE__ . '\register_acf_gutenberg_blocks' );

endif;
