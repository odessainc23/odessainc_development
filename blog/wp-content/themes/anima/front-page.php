<?php
/**
 * The template for displaying the landing page/blog posts
 * The functions used here can be found in includes/landing-page.php
 *
 * @package Anima
 */

$anima_landingpage = cryout_get_option( 'anima_landingpage' );

if ( is_page() && ! $anima_landingpage ) { 
	load_template( get_page_template() );
	return true;
}

if ( 'posts' == get_option( 'show_on_front' ) ) {
	include( get_home_template() );
} else {

	get_header();
	?>

	<div id="container" class="anima-landing-page one-column">
		<main id="main" role="main" class="main">
		<?php
		//cryout_before_content_hook();

		if ( $anima_landingpage ) {
			get_template_part( apply_filters('anima_landingpage_main_template', 'content/landing-page' ) );
		} else {
			anima_lpindex();
		}

		//cryout_after_content_hook();
		?>
		</main><!-- #main -->
		<?php if ( ! $anima_landingpage ) { anima_get_sidebar(); } ?>
	</div><!-- #container -->

	<?php get_footer();

} //else !posts
