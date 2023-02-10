<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

if ( version_compare( $GLOBALS[ 'wp_version' ], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

// Declare Odessa Root URL
if ( !empty( $_SERVER[ 'HTTPS' ] ) ) {
	define( 'ODESSA_ROOT_URL', 'https://' . $_SERVER[ 'HTTP_HOST' ] . '/blog/' );
} else {
	define( 'ODESSA_ROOT_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . '/blog/' );
}

// Rewrite the Post Type URL without Base Slug
if ( !function_exists( 'odc_remove_cpt_slug' ) ):
	function odc_remove_cpt_slug( $post_link, $post, $leavename ) {
		if ( !in_array( $post->post_type, array( 'pr_individual' ) ) || 'publish' != $post->post_status )
			return $post_link;

		$post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

		return $post_link;
	}
add_filter( 'post_type_link', 'odc_remove_cpt_slug', 10, 3 );
endif;

if ( !function_exists( 'odc_parse_request_tricksy' ) ):
	function odc_parse_request_tricksy( $query ) {
		// Only noop the main query
		if ( !$query->is_main_query() )
			return;

		// Only noop our very specific rewrite rule match
		if ( 2 != count( $query->query ) ||
			!isset( $query->query[ 'page' ] ) )
			return;

		// 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
		if ( !empty( $query->query[ 'name' ] ) )
			$query->set( 'post_type', array( 'post', 'pr_individual', 'page' ) );
	}
add_action( 'pre_get_posts', 'odc_parse_request_tricksy' );
endif;

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

if ( !function_exists( 'twentynineteen_setup' ) ):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function twentynineteen_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height' => 190,
				'width' => 190,
				'flex-width' => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name' => __( 'Small', 'twentynineteen' ),
					'shortName' => __( 'S', 'twentynineteen' ),
					'size' => 19.5,
					'slug' => 'small',
				),
				array(
					'name' => __( 'Normal', 'twentynineteen' ),
					'shortName' => __( 'M', 'twentynineteen' ),
					'size' => 22,
					'slug' => 'normal',
				),
				array(
					'name' => __( 'Large', 'twentynineteen' ),
					'shortName' => __( 'L', 'twentynineteen' ),
					'size' => 36.5,
					'slug' => 'large',
				),
				array(
					'name' => __( 'Huge', 'twentynineteen' ),
					'shortName' => __( 'XL', 'twentynineteen' ),
					'size' => 49.5,
					'slug' => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name' => 'default' === get_theme_mod( 'primary_color' ) ? __( 'Blue', 'twentynineteen' ) : null,
					'slug' => 'primary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
				),
				array(
					'name' => 'default' === get_theme_mod( 'primary_color' ) ? __( 'Dark Blue', 'twentynineteen' ) : null,
					'slug' => 'secondary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
				),
				array(
					'name' => __( 'Dark Gray', 'twentynineteen' ),
					'slug' => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name' => __( 'Light Gray', 'twentynineteen' ),
					'slug' => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name' => __( 'White', 'twentynineteen' ),
					'slug' => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'twentynineteen_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentynineteen_widgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Footer', 'twentynineteen' ),
			'id' => 'sidebar-1',
			'description' => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'twentynineteen_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function twentynineteen_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS[ 'content_width' ] = apply_filters( 'twentynineteen_content_width', 640 );
}
add_action( 'after_setup_theme', 'twentynineteen_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function twentynineteen_scripts() {
	wp_enqueue_style( 'twentynineteen-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_style_add_data( 'twentynineteen-style', 'rtl', 'replace' );

	if ( has_nav_menu( 'menu-1' ) ) {
		wp_enqueue_script( 'twentynineteen-priority-menu', get_theme_file_uri( '/js/priority-menu.js' ), array(), '20181214', true );
		wp_enqueue_script( 'twentynineteen-touch-navigation', get_theme_file_uri( '/js/touch-keyboard-navigation.js' ), array(), '20181231', true );
	}

	wp_enqueue_style( 'twentynineteen-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function twentynineteen_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
<?php
}
add_action( 'wp_print_footer_scripts', 'twentynineteen_skip_link_focus_fix' );

/**
 * Enqueue supplemental block editor styles.
 */
function twentynineteen_editor_customizer_styles() {

	wp_enqueue_style( 'twentynineteen-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.1', 'all' );

	if ( 'custom' === get_theme_mod( 'primary_color' ) ) {
		// Include color patterns.
		require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
		wp_add_inline_style( 'twentynineteen-editor-customizer-styles', twentynineteen_custom_colors_css() );
	}
}
add_action( 'enqueue_block_editor_assets', 'twentynineteen_editor_customizer_styles' );

/**
 * Display custom color CSS in customizer and on frontend.
 */
function twentynineteen_colors_css_wrap() {

	// Only include custom colors in customizer or frontend.
	if ( ( !is_customize_preview() && 'default' === get_theme_mod( 'primary_color', 'default' ) ) || is_admin() ) {
		return;
	}

	require_once get_parent_theme_file_path( '/inc/color-patterns.php' );

	$primary_color = 199;
	if ( 'default' !== get_theme_mod( 'primary_color', 'default' ) ) {
		$primary_color = get_theme_mod( 'primary_color_hue', 199 );
	}
	?>
<style type="text/css" id="custom-theme-colors" <?php echo is_customize_preview() ? 'data-hue="' . absint( $primary_color ) . '"' : ''; ?>>
<?php echo twentynineteen_custom_colors_css();
?>
</style>
<?php
}
add_action( 'wp_head', 'twentynineteen_colors_css_wrap' );

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-twentynineteen-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-twentynineteen-walker-comment.php';

/**
 * Common theme functions.
 */
require get_template_directory() . '/inc/helper-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

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

function my_myme_types( $mime_types ) {
	$mime_types[ 'svg' ] = 'image/svg+xml'; //Adding svg extension
	return $mime_types;
}
add_filter( 'upload_mimes', 'my_myme_types', 1, 1 );

function pr_individual() {
	register_rest_route( 'wppost/v2', '/prindividual', array(
		'methods' => 'GET',
		'callback' => 'postmodiyfy_get_custompostname_items',
	) );

}

/**Hook for custom endpoints **/
add_action( 'rest_api_init', 'pr_individual' );

function postmodiyfy_get_custompostname_items() {
	$args = array(
		'post_type' => 'pr_individual',
		'post_status' => 'publish',
		//'paged'                  => $paged,
		'posts_per_page' => '-1'
	);
	$items = array();

	if ( $posts = get_posts( $args ) ) {

		// print_r($posts);die;
		foreach ( $posts as $post ) {
			$category_detail = get_the_category( $post->ID ); //$post->ID
			$cat = array();
			foreach ( $category_detail as $cd ) {
				$cat[] = $cd->cat_name;
			}
			$imagesrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
			$posttime = get_the_date( 'F j, Y', $post->ID );

			$featured_img_url = $imagesrc[ 0 ];
			$items[] = array( 'al_anon_id' => $post->ID,
				'date' => $posttime,
				'title' => $post->post_title,
				'link' => $post->guid,
				'category' => $cat,
				'author' => get_the_author_meta( 'display_name', $post->post_author ),
				'content' => str_replace( "&nbsp;", " ", strip_tags( apply_filters( 'the_content', $post->post_content ) ) ),
				'timezone' => get_option( 'timezone_string' ),
				'image' => $featured_img_url,
				'short_description' => get_field( 'pr_short_description', $post->ID )
			);

		}
	}
	return $items;
}

function post_per_page() {
	register_rest_route( 'wppost/v2', '/postforpage/(?P<id>[a-zA-Z0-9-]+)', array(
		// Supported methods for this endpoint. WP_REST_Server::READABLE translates to GET.
		'methods' => WP_REST_Server::READABLE,
		// Register the callback for the endpoint.
		'callback' => 'posts_for_particular_page',
	) );
}

add_action( 'rest_api_init', 'post_per_page' );

function posts_for_particular_page( $request ) {
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => '-1'
	);
	$items = array();

	if ( $posts = get_posts( $args ) ) {
		foreach ( $posts as $post ) {
			$imagesrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
			$posttime = get_the_date( 'M j, Y', $post->ID );
			//$page = get_field('select-page',$post->ID); 
			$pages = get_field( 'select_pages', $post->ID );
			$featured_img_url = $imagesrc[ 0 ];
			$image = get_field( 'image_for_html_pages', $post->ID );
			//print_r($pages);
			foreach ( $pages as $type ) {
				// print_r($type);
				if ( $request[ 'id' ] == $type ) {

					$items[] = array( 'al_anon_id' => $post->ID,
						'date' => $posttime,
						'title' => $post->post_title,
						'link' => $post->guid,
						'category' => $cat,
						'image' => $image[ 'url' ],
						'post_type' => 'blog'
					);

				}
			}

		}
	}

	$args = array(
		'post_type' => 'pr_individual',
		'post_status' => 'publish',
		'posts_per_page' => '-1'
	);

	if ( $posts = get_posts( $args ) ) {
		foreach ( $posts as $post ) {
			$imagesrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
			$posttime = get_the_date( 'M j, Y', $post->ID );
			//$page = get_field('select-page',$post->ID);
			$pages = get_field( 'select_pages', $post->ID );
			$featured_img_url = $imagesrc[ 0 ];
			$image = get_field( 'image_for_html_pages', $post->ID );
			// print_r($pages);die;
			foreach ( $pages as $type ) {
				if ( $request[ 'id' ] == $type ) {

					$items[] = array( 'al_anon_id' => $post->ID,
						'date' => $posttime,
						'title' => $post->post_title,
						'link' => $post->guid,
						'category' => $cat,
						'image' => $image[ 'url' ],
						'post_type' => 'pr_individual',

					);
				}
			}
		}
	}
	return $items;
}

function post_newsroom() {
	register_rest_route( 'wppost/v2', '/newsroom', array(
		'methods' => 'GET',
		'callback' => 'newsroom_data',
	) );
}

add_action( 'rest_api_init', 'post_newsroom' );

function newsroom_data() {
	//print_r('dsdsd');die;
	$args = array(
		'post_type' => 'pr_individual',
		'post_status' => 'publish',
		'posts_per_page' => '-1'
	);
	$items = array();

	if ( $posts = get_posts( $args ) ) {

		// print_r($posts);die;
		foreach ( $posts as $post ) {
			$imagesrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
			$featured_img_url = $imagesrc[ 0 ];
			$pages = get_field( 'select_pages', $post->ID );
			foreach ( $pages as $type ) {
				if ( 'newsroom' == $type ) {
					$items[] = array(
						'al_anon_id' => $post->ID,
						'title' => $post->post_title,
						'link' => $post->guid,
						'image' => $featured_img_url
					);
				}
			}
		}
	}
	return $items;
}