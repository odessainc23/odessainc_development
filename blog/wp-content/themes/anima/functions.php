<?php
/**
 * Functions file - Calls all other required files
 *
 * PLEASE DO NOT EDIT THEME FILES DIRECTLY
 * unless you are prepared to lose all changes on the next update
 *
 * @package Anima
 */

// theme identification and options management - do NOT edit unless you know what you are doing
define ( "_CRYOUT_THEME_NAME", "anima" );
define ( "_CRYOUT_THEME_VERSION", "1.4.1" );

// prefixes for theme options and functions
define ( '_CRYOUT_THEME_SLUG', 'anima' );
define ( '_CRYOUT_THEME_PREFIX', 'anima' );

require_once( get_template_directory() . "/cryout/framework.php" );		// Framework
require_once( get_template_directory() . "/admin/defaults.php" );		// Options Defaults
require_once( get_template_directory() . "/admin/main.php" );			// Admin side

// Frontend side
require_once( get_template_directory() . "/includes/setup.php" );       	// Setup and init theme
require_once( get_template_directory() . "/includes/styles.php" );      	// Register and enqeue css styles and scripts
require_once( get_template_directory() . "/includes/loop.php" );        	// Loop functions
require_once( get_template_directory() . "/includes/comments.php" );    	// Comment functions
require_once( get_template_directory() . "/includes/core.php" );        	// Core functions
require_once( get_template_directory() . "/includes/hooks.php" );       	// Hooks
require_once( get_template_directory() . "/includes/meta.php" );        	// Custom Post Metas
require_once( get_template_directory() . "/includes/landing-page.php" );	// Landing Page outputs

// FIN
// Custom hook for add description backend start 
add_action( 'cmb2_admin_init', 'yourprefix_register_repeatable_group_field_metabox' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function yourprefix_register_repeatable_group_field_metabox() {

	/**
	 * Repeatable Field Groups
	 */
	$cmb_group = new_cmb2_box( array(
		'id' => 'yourprefix_group_metabox',
		'title' => esc_html__( 'Main Content', 'cmb2' ),
		'object_types' => array( 'post' ),
	) );

	// $group_field_id is the field id string, so in this case: 'yourprefix_group_demo'
	$group_field_id = $cmb_group->add_field( array(
		'id' => 'yourprefix_group_demo',
		'type' => 'group',
		'description' => esc_html__( 'Please add heading and description', 'cmb2' ),
		'options' => array(
			'group_title' => esc_html__( 'Blog Content {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button' => esc_html__( 'Add Another Section', 'cmb2' ),
			'remove_button' => esc_html__( 'Remove Section', 'cmb2' ),
			'sortable' => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */
	$cmb_group->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Heading', 'cmb2' ),
		'id' => 'title',
		'type' => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Description', 'cmb2' ),
		'description' => esc_html__( 'Write a short description', 'cmb2' ),
		'id' => 'description',
		'type' => 'textarea',
	) );

}

// Custom hook for add description backend end 

  