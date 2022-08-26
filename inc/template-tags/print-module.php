<?php
/**
 * Render a module.
 *
 * @package wd_s
 */

namespace WebDevStudios\wd_s;

/**
 * Render a module.
 *
 * @author WebDevStudios
 *
 * @param string $module_name The name of the module.
 * @param array  $args Args for the module.
 */
function print_module( $module_name = '', $args ) {
	get_template_part( 'template-parts/acf-blocks/modules/' . $module_name, '', $args );
}
