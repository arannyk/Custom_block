<?php

//Prevent direct access
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add_action enqeue_block_editor_assets

add_action( 'enqeue_block_editor_assets', 
	'custom_gutenberg_block_01_basic_block_enqueue_block_editor_assets');





/**
 * Enqueue the block's assets for the editor.
 *
 * wp-blocks:  The registerBlockType() function to register blocks.
 * wp-element: The wp.element.createElement() function to create elements.
 * wp-i18n:    The __() function for internationalization.
 *
 **/


// Plugin-name_block_name_funtion_name

function custom_gutenberg_block_01_basic_block_enqueue_block_editor_assets() {
	wp_enqueue_script(
		//Name of script
		'custom-gutenberg-block-01-basic-block',
		// Full URL of script
		plugins_url( 'block.build.js', __FILE__ ),
		// Dependencies the script needs
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ),
		// Script version number 
		fileatime(plugin_dir_path(__FILE__) . 'block.build.js')

	);
}