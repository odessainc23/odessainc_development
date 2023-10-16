<?php
/**
 * Admin theme page
 *
 * @package Anima
 */

// Theme particulars
require_once( get_template_directory() . "/admin/defaults.php" );
require_once( get_template_directory() . "/admin/options.php" );
require_once( get_template_directory() . "/includes/tgmpa.php" );

// Custom CSS Styles for customizer
require_once( get_template_directory() . "/includes/custom-styles.php" );

// load up theme options
$cryout_theme_settings = apply_filters( 'anima_theme_structure_array', $anima_big );
$cryout_theme_options = anima_get_theme_options();
$cryout_theme_defaults = anima_get_option_defaults();

// Get the theme options and make sure defaults are used if no values are set
//if ( ! function_exists( 'anima_get_theme_options' ) ):
function anima_get_theme_options() {
	$options = wp_parse_args(
		get_option( 'anima_settings', array() ),
		anima_get_option_defaults()
	);
	$options = cryout_maybe_migrate_options( $options );
	return apply_filters( 'anima_theme_options_array', $options );
} // anima_get_theme_options()
//endif;

//if ( ! function_exists( 'anima_get_theme_structure' ) ):
function anima_get_theme_structure() {
	global $anima_big;
	return apply_filters( 'anima_theme_structure_array', $anima_big );
} // anima_get_theme_structure()
//endif;

// backwards compatibility filter for some values that changed format
// this needs to be applied to the options array using WordPress' 'option_{$option}' filter
function anima_options_back_compat( $options ){
	if (!empty($options[_CRYOUT_THEME_PREFIX . '_lineheight'])) 		$options[_CRYOUT_THEME_PREFIX . '_lineheight']			= floatval( $options[_CRYOUT_THEME_PREFIX . '_lineheight'] );
	if (!empty($options[_CRYOUT_THEME_PREFIX . '_paragraphspace'])) 	$options[_CRYOUT_THEME_PREFIX . '_paragraphspace'] 		= floatval( $options[_CRYOUT_THEME_PREFIX . '_paragraphspace'] );
	if (!empty($options[_CRYOUT_THEME_PREFIX . '_parindent'])) 			$options[_CRYOUT_THEME_PREFIX . '_parindent'] 			= floatval( $options[_CRYOUT_THEME_PREFIX . '_parindent'] );
	if (!empty($options[_CRYOUT_THEME_PREFIX . '_responsivelimit']))	$options[_CRYOUT_THEME_PREFIX . '_responsivelimit'] 	= intval( $options[_CRYOUT_THEME_PREFIX . '_responsivelimit'] );
	return $options;
} // 
add_filter( 'option_anima_settings', 'anima_options_back_compat' );

// Hooks/Filters
add_action( 'admin_menu', 'anima_add_page_fn' );

// Add admin scripts
function anima_admin_scripts( $hook ) {
	global $anima_page;
	if( $anima_page != $hook ) {
        return;
    }

	wp_enqueue_style( 'wp-jquery-ui-dialog' );
	wp_enqueue_style( 'anima-admin-style', esc_url( get_template_directory_uri() ) . '/admin/css/admin.css', NULL, _CRYOUT_THEME_VERSION );
	wp_enqueue_script( 'anima-admin-js', esc_url( get_template_directory_uri() ) . '/admin/js/admin.js', array('jquery-ui-dialog'), _CRYOUT_THEME_VERSION );
	$js_admin_options = array(
		'reset_confirmation' => esc_html( __( 'Reset Anima Settings to Defaults?', 'anima' ) ),
	);
	wp_localize_script( 'anima-admin-js', 'cryout_admin_settings', $js_admin_options );
	}

// Create admin subpages
function anima_add_page_fn() {
	global $anima_page;
	$anima_page = add_theme_page( __( 'Anima Theme', 'anima' ), __( 'Anima Theme', 'anima' ), 'edit_theme_options', 'about-anima-theme', 'anima_page_fn' );
	add_action( 'admin_enqueue_scripts', 'anima_admin_scripts' );
} // anima_add_page_fn()

// Display the admin options page

function anima_page_fn() {

	$options = cryout_get_option();

	if (!current_user_can('edit_theme_options'))  {
		wp_die( __( 'Sorry, but you do not have sufficient permissions to access this page.', 'anima') );
	}

?>

<div class="wrap" id="main-page"><!-- Admin wrap page -->
	<div id="lefty">
	<?php if( isset($_GET['settings-loaded']) ) { ?>
		<div class="updated fade">
			<p><?php _e('Anima settings loaded successfully.', 'anima') ?></p>
		</div> <?php
	} ?>
	<?php
	// Reset settings to defaults if the reset button has been pressed
	if ( isset( $_POST['anima_reset_defaults'] ) ) {
		delete_option( 'anima_settings' ); ?>
		<div class="updated fade">
			<p><?php _e('Anima settings have been reset successfully.', 'anima') ?></p>
		</div> <?php
	} ?>

		<div id="admin_header">
			<img src="<?php echo esc_url( get_template_directory_uri() ) . '/admin/images/logo-about-top.png' ?>" />
			<span class="version">
				<?php _e( 'Anima Theme', 'anima' ) ?> v<?php echo _CRYOUT_THEME_VERSION; ?> by
				<a href="https://www.cryoutcreations.eu" target="_blank">Cryout Creations</a><br>
				<?php do_action( 'cryout_admin_version' ); ?>
			</span>
		</div>

		<div id="admin_links">
			<a href="https://www.cryoutcreations.eu/wordpress-themes/anima" target="_blank"><?php _e( 'Anima Homepage', 'anima' ) ?></a>
			<a href="https://www.cryoutcreations.eu/forums/f/wordpress/anima" target="_blank"><?php _e( 'Theme Support', 'anima' ) ?></a>
			<a class="blue-button" href="https://www.cryoutcreations.eu/wordpress-themes/anima#cryout-comparison-section" target="_blank"><?php _e( 'Upgrade to PLUS', 'anima' ) ?></a>
		</div>


		<br>
		<div id="description">
			<?php
				$theme = wp_get_theme();
			 	echo esc_html( $theme->get( 'Description' ) );
			?>
		</div>
		<br><br>

		<a class="button" href="customize.php" id="customizer"> <?php printf( __( 'Customize %s', 'anima' ), ucwords(_CRYOUT_THEME_NAME) ); ?> </a>
		
		<br>

				<form action="" method="post" class="third">
					<input type="hidden" name="cryout_reset_defaults" value="true" />
					<input type="submit" class="button" id="cryout_reset_defaults" value="<?php _e( 'Reset to Defaults', 'anima' ); ?>" />
				</form>

	</div><!--lefty -->


	<div id="righty">
		<div id="cryout-donate" class="postbox donate">

			<h3 class="hndle"><?php _e( 'Upgrade to Plus', 'anima' ); ?></h3>
			<div class="inside">
				<p><?php _e('Find out what features you\'re missing out on and how the Plus version of Anima can improve your site.', 'anima'); ?></p>
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/admin/images/features.png' ?>" />
				<a class="button" href="https://www.cryoutcreations.eu/wordpress-themes/anima" target="_blank" style="display: block;"><?php _e( 'Upgrade to Plus', 'anima' ); ?></a>

			</div><!-- inside -->

		</div><!-- donate -->

	</div><!--  righty -->
</div><!--  wrap -->

<?php
} // anima_page_fn()
