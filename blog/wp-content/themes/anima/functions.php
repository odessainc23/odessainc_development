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


function heateor_sss_customize_shared_url($postUrl, $sharingType, $standardWidget) {
    // Check if the sharing type is Facebook
    if ($sharingType === 'facebook') {
        // Customize the URL for Facebook shares
        $postUrl = $postUrl . 'https://www.facebook.com/OdessaInc/';
    }

    // Return the modified or original URL
    return $postUrl;
}

// Hook the custom function into the social share icons' URL generation process
add_filter('heateor_sss_target_share_url_filter', 'heateor_sss_customize_shared_url', 10, 3);

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

// function add_meta_tags() {
// 	global $post;
	
// 	$meta = strip_tags( $post->post_content );
// 	$meta = strip_shortcodes( $post->post_content );
// 	$meta = str_replace( array("\n", "\r", "\t"), ' ', $meta );
// 	$meta = substr( $meta, 0, 300 );
// 	$keywords = get_the_category( $post->ID );
// 	$metakeywords = '';
// 	foreach ( $keywords as $keyword ) {
// 	$metakeywords .= $keyword->cat_name . ", ";
// 	}
// 	$metaDescTag ="Discover industry insights, thought leadership, and the latest in enterprise technology. Dive into our informative blogs by industry experts, practioneers, and adopters, for in-depth knowledge about market, technology trends, and the latest in the asset finance."; 
// 	echo '
// 	<meta name="description" content="' . $metaDescTag . '" />' . "\n";
	
// 	}
// 	add_action( 'wp_head', 'add_meta_tags' , 2 );


// Rest API Route - PR by Year
if ( !function_exists( 'odc_api_route_press_releases_by_year' ) ):
	function odc_api_route_press_releases_by_year( $query ) {
		register_rest_route( 'odc/v2', '/pr_by_year', array(
			'methods' => 'GET',
			'callback' => 'get_press_releases_by_year',
		) );
	}

add_action( 'rest_api_init', 'odc_api_route_press_releases_by_year' );
endif;

if ( !function_exists( 'get_press_releases_by_year' ) ):
	function get_press_releases_by_year() {
		$args = array(
			'post_type'			=> 'pr_individual',
			'post_status'		=> 'publish',
			'order'				=> 'ASC',
			'posts_per_page'	=> '-1'
		);

		$group = array();

		if ( $posts = get_posts( $args ) ) {
			foreach ( $posts as $post ) {
				$category_detail = get_the_category( $post->ID );
				$cat = array();

				foreach ( $category_detail as $cd ) {
					$cat[] = $cd->cat_name;
				}

				$imagesrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
				$year = get_the_date( 'Y', $post->ID );
				if ( !isset( $group[ $year ] ) )$group[ $year ] = array();
				$posttime = get_the_date( 'F j, Y', $post->ID );
				$featured_img_url = $imagesrc[ 0 ];
				$item = array(
					'al_anon_id'		=> $post->ID,
					'date'				=> $posttime,
					'title'				=> $post->post_title,
					'link'				=> get_post_permalink( $post->ID ),
					'category'			=> $cat,
					'author'			=> get_the_author_meta( 'display_name', $post->post_author ),
					'content'			=> str_replace( "&nbsp;", " ", strip_tags( apply_filters( 'the_content', $post->post_content ) ) ),
					'timezone'			=> get_option( 'timezone_string' ),
					'image'				=> $featured_img_url,
					'short_description' => get_field( 'pr_short_description', $post->ID )
				);

				array_push($group[ $year ], $item);
			}
		}
		return $group;
	}
endif;