<?php
/**
 * Master generated style function
 *
 * @package Anima
 */

function anima_body_classes( $classes ) {
	$options = cryout_get_option( array(
		'anima_landingpage', 'anima_layoutalign',  'anima_image_style', 'anima_magazinelayout', 'anima_comclosed', 'anima_contenttitles', 'anima_caption_style',
		'anima_elementborder', 'anima_elementshadow', 'anima_elementborderradius', 'anima_totop', 'anima_menustyle', 'anima_menuposition', 'anima_menulayout',
		'anima_headerresponsive', 'anima_fresponsive', 'anima_comlabels', 'anima_comdate', 'anima_tables', 'anima_normalizetags', 'anima_articleanimation', 'anima_headertitles_archives',
	) );

	if ( is_front_page() && $options['anima_landingpage'] && ('page' == get_option('show_on_front')) ) {
		$classes[] = 'anima-landing-page';
	}

	if ( $options['anima_layoutalign'] ) $classes[] = 'anima-boxed-layout';

	$classes[] = esc_html( $options['anima_image_style'] );
	$classes[] = esc_html( $options['anima_caption_style'] );
	$classes[] = esc_html( $options['anima_totop'] );
	$classes[] = esc_html( $options['anima_tables'] );

	if ( $options['anima_menustyle'] ) $classes[] = 'anima-fixed-menu';
	if ( $options['anima_menuposition'] ) $classes[] = 'anima-over-menu';
	if ( $options['anima_menulayout'] == 0 ) $classes[] = 'anima-menu-left';
	if ( $options['anima_menulayout'] == 2 ) $classes[] = 'anima-menu-center';

	if ( $options['anima_headerresponsive'] ) $classes[] = 'anima-responsive-headerimage';
			else $classes[] = 'anima-cropped-headerimage';

	if ( $options['anima_fresponsive'] ) $classes[] = 'anima-responsive-featured';
		else $classes[] = 'anima-cropped-featured';

	if ( $options['anima_magazinelayout'] ) {
		switch ( $options['anima_magazinelayout'] ):
			case 1: $classes[] = 'anima-magazine-one anima-magazine-layout'; break;
			case 2: $classes[] = 'anima-magazine-two anima-magazine-layout'; break;
			case 3: $classes[] = 'anima-magazine-three anima-magazine-layout'; break;
		endswitch;
	}
	switch ( $options['anima_comclosed'] ) {
		case 2: $classes[] = 'anima-comhide-in-posts'; break;
		case 3: $classes[] = 'anima-comhide-in-pages'; break;
		case 0: $classes[] = 'anima-comhide-in-posts'; $classes[] = 'anima-comhide-in-pages'; break;
	}
	if ( $options['anima_comlabels'] == 1 ) $classes[] = 'anima-comment-placeholder';
	if ( $options['anima_comlabels'] == 2 ) $classes[] = 'anima-comment-labels';
	if ( $options['anima_comdate'] == 1 ) $classes[] = 'anima-comment-date-published';

	if ( anima_header_title_check() ) $classes[] = 'anima-header-titles';
								 else $classes[] = 'anima-normal-titles';

	$anima_archive_desc = trim( get_the_archive_description() ); // get_the_archive_description doesn't work with author description
	if ( ( is_archive() || is_search() || is_404() ) && ! is_author() && $options['anima_headertitles_archives'] && empty( $anima_archive_desc ) ) $classes[] = 'anima-header-titles-nodesc';

	switch ( $options['anima_contenttitles'] ) {
		case 2: $classes[] = 'anima-hide-page-title'; break;
		case 3: $classes[] = 'anima-hide-cat-title'; break;
		case 0: $classes[] = 'anima-hide-page-title'; $classes[] = 'anima-hide-cat-title'; break;
	}

	if ( $options['anima_elementborder'] ) $classes[] = 'anima-elementborder';
	if ( $options['anima_elementshadow'] ) $classes[] = 'anima-elementshadow';
	if ( $options['anima_elementborderradius'] ) $classes[] = 'anima-elementradius';
	if ( $options['anima_normalizetags'] ) $classes[] = 'anima-normalizedtags';

if ( !empty( $options['anima_articleanimation'] ) ) $classes[] = 'anima-article-animation-' . esc_attr( $options['anima_articleanimation'] );

	return $classes;
}
add_filter( 'body_class', 'anima_body_classes' );


/*
 * Dynamic styles for the frontend
 */
function anima_custom_styles() {
$options = cryout_get_option();
extract($options);

ob_start();
/////////// LAYOUT DIMENSIONS. ///////////
switch ( $anima_layoutalign ) {

	case 0: // wide ?>
			body:not(.anima-landing-page) #container, #site-header-main-inside, #colophon-inside, #footer-inside, #breadcrumbs-container-inside, #header-page-title {
				margin: 0 auto;
				max-width: <?php echo esc_html( $anima_sitewidth ); ?>px;
			}
			<?php if ( esc_html( $anima_menustyle ) ) { ?> #site-header-main { left: 0; right: 0; } <?php } ?>
	<?php break;

	case 1: // boxed ?>
			#site-wrapper, #site-header-main {
				max-width: <?php echo esc_html( $anima_sitewidth ); ?>px;
			}
			<?php if ( esc_html( $anima_menustyle ) ) { ?> #site-header-main { left: 0; right: 0; } <?php } ?>
	<?php break;
}

/////////// COLUMNS ///////////
$colPadding = 0; // percent
$sidebarP = absint( $anima_primarysidebar );
$sidebarS = absint( $anima_secondarysidebar );
?>

#primary 									{ width: <?php echo $sidebarP; ?>px; }
#secondary 									{ width: <?php echo $sidebarS; ?>px; }

#container.one-column .main					{ width: 100%; }
#container.two-columns-right #secondary 	{ float: right; }
#container.two-columns-right .main,
.two-columns-right #breadcrumbs				{ width: calc( <?php echo 100 - (int) $colPadding ?>% - <?php echo $sidebarS; ?>px ); float: left; }
#container.two-columns-left #primary 		{ float: left; }
#container.two-columns-left .main,
.two-columns-left #breadcrumbs				{ width: calc( <?php echo 100 - (int) $colPadding ?>% - <?php echo $sidebarP; ?>px ); float: right; }

#container.three-columns-right #primary,
#container.three-columns-left #primary,
#container.three-columns-sided #primary		{ float: left; }

#container.three-columns-right #secondary,
#container.three-columns-left #secondary,
#container.three-columns-sided #secondary	{ float: left; }

#container.three-columns-right #primary,
#container.three-columns-left #secondary 	{ margin-left: <?php echo esc_html( $colPadding ) ?>%; margin-right: <?php echo esc_html( $colPadding ) ?>%; }
#container.three-columns-right .main,
.three-columns-right #breadcrumbs			{ width: calc( <?php echo 100 - absint( $colPadding ) * 2 ?>% - <?php echo absint( $sidebarS + $sidebarP ); ?>px ); float: left; }
#container.three-columns-left .main,
.three-columns-left #breadcrumbs			{ width: calc( <?php echo 100 - absint( $colPadding ) * 2 ?>% - <?php echo absint( $sidebarS + $sidebarP ); ?>px ); float: right; }

#container.three-columns-sided #secondary 	{ float: right; }

#container.three-columns-sided .main,
.three-columns-sided #breadcrumbs			{ width: calc( <?php echo 100 - absint( $colPadding ) * 2 ?>% - <?php echo absint( $sidebarS + $sidebarP ); ?>px ); float: right; }
.three-columns-sided #breadcrumbs			{ margin: 0 calc( <?php echo absint( $colPadding ) ?>% + <?php echo absint($sidebarS) ?>px ) 0 -1920px; }

<?php if ( in_array( $anima_siteheader, array( 'logo', 'empty' ) ) ) { ?>
	#site-text {
		clip: rect(1px, 1px, 1px, 1px);
		height: 1px;
		overflow: hidden;
		position: absolute !important;
		width: 1px;
		word-wrap: normal !important;
	}
<?php }

/////////// FONTS ///////////
?>
html
					{ font-family: MaisonNeue-Book;
					  font-size: <?php echo esc_html( $anima_fgeneralsize ) ?>; font-weight: <?php echo esc_html( $anima_fgeneralweight ) ?>;
					  line-height: <?php echo esc_html( floatval($anima_lineheight) ) ?>; }

#site-title 		{ font-family: MaisonNeue-Book;
					  font-size: <?php echo esc_html( $anima_fsitetitlesize ) ?>; font-weight: <?php echo esc_html( $anima_fsitetitleweight ) ?>; }

#access ul li a 	{ font-family: MaisonNeue-Book;
					  font-size: <?php echo esc_html( $anima_fmenusize ) ?>; font-weight: <?php echo esc_html( $anima_fmenuweight ) ?>; }

.widget-title 		{ font-family: MaisonNeue-Book;
					  font-size: <?php echo esc_html( $anima_fwtitlesize ) ?>; font-weight: <?php echo esc_html( $anima_fwtitleweight ) ?>; }
.widget-container 	{ font-family: MaisonNeue-Book;
				      font-size: <?php echo esc_html( $anima_fwcontentsize ) ?>; font-weight: <?php echo esc_html( $anima_fwcontentweight ) ?>; }
.entry-title, #reply-title
					{ font-family: MaisonNeue-Book;
					  font-size: <?php echo esc_html( $anima_ftitlessize ) ?>; font-weight: <?php echo esc_html( $anima_ftitlesweight ) ?>; }
.entry-meta > span, .post-continue-container
					{ font-family: MaisonNeue-Book;
					  font-size: <?php echo esc_html( $anima_metatitlessize ) ?>; font-weight: <?php echo esc_html( $anima_metatitlesweight ) ?>; }
.page-link, .pagination, #author-info #author-link, .comment .reply a, .comment-meta, .byline
					{ font-family: MaisonNeue-Book }
.content-masonry .entry-title
 	                { font-size: <?php echo esc_html( intval($anima_ftitlessize) * 0.7 ) ?>%; }

					  <?php
$font_root = 2.6; // headings font size root
for ( $i = 1; $i <= 6; $i++ ) {
		$size = round( ( $font_root - ( 0.27 * $i ) ) * ( preg_replace( "/[^\d]/", "", esc_html( $anima_fheadingssize ) ) / 100), 5 ); ?>
		
		<?php
} //for ?>
h1, h2, h3, h4, h5, h6, .seriousslider-theme .seriousslider-caption-title
					{ font-family: MaisonNeue-Bold;
					  font-weight: <?php echo esc_html( $anima_fheadingsweight ) ?>; }


<?php
/////////// COLORS ///////////
?>
body 										{ color: <?php echo esc_html( $anima_sitetext ) ?>;
											  background-color: <?php echo esc_html( $anima_sitebackground ) ?>; }

#site-header-main, #access ul ul,
.menu-search-animated .searchform input[type="search"], #access .menu-search-animated .searchform, #access::after,
.anima-over-menu .header-fixed#site-header-main, .anima-over-menu .header-fixed#site-header-main #access:after
											{ background-color: <?php echo esc_html( $anima_menubackground ) ?>; }

#site-header-main 							{ border-bottom-color: rgba(0,0,0,.05); }

.anima-over-menu .header-fixed#site-header-main #site-title a
											{ color: <?php echo esc_html( $anima_accent1 ) ?>; }

#access > div > ul > li,
#access > div > ul > li > a,
.anima-over-menu .header-fixed#site-header-main #access > div > ul > li:not([class*='current']),
.anima-over-menu .header-fixed#site-header-main #access > div > ul > li:not([class*='current']) > a,
.anima-over-menu .header-fixed#site-header-main #sheader.socials a::before,
#sheader.socials a::before, #access .menu-search-animated .searchform input[type="search"],
#mobile-menu								{ color: <?php echo esc_html( $anima_menutext ) ?>; }
.anima-over-menu .header-fixed#site-header-main #sheader.socials a:hover::before,
#sheader.socials a:hover::before			{ color: <?php echo esc_html( $anima_menubackground ) ?>; }

#access ul.sub-menu li a,
#access ul.children li a 					{ color: <?php echo esc_html( $anima_submenutext ) ?>; }

#access ul.sub-menu li a,
#access ul.children li a 					{ background-color: <?php echo esc_html( $anima_submenubackground ) ?>; }

#access > div > ul > li:hover > a,
#access > div > ul > li a:hover,
#access > div > ul > li:hover,
.anima-over-menu .header-fixed#site-header-main #access > div > ul > li > a:hover,
.anima-over-menu .header-fixed#site-header-main #access > div > ul > li:hover
											{ color: <?php echo esc_html( $anima_accent1 ) ?>; }

#access > div > ul > li > a > span::before { background-color: <?php echo esc_html( $anima_accent1 ) ?>; }
#site-title::before  { background-color: <?php echo esc_html( $anima_accent2 ) ?>; }

#access > div > ul > li.current_page_item > a,
#access > div > ul > li.current-menu-item > a,
#access > div > ul > li.current_page_ancestor > a,
#access > div > ul > li.current-menu-ancestor > a,
#access .sub-menu, #access .children,
.anima-over-menu .header-fixed#site-header-main #access > div > ul > li > a
											{ color: <?php echo esc_html( $anima_accent2 ) ?>; }

#access ul.children > li.current_page_item > a,
#access ul.sub-menu > li.current-menu-item > a,
#access ul.children > li.current_page_ancestor > a,
#access ul.sub-menu > li.current-menu-ancestor > a
											{ color: <?php echo esc_html( $anima_accent2 ) ?>; }
.searchform .searchsubmit					{ color: <?php echo esc_html( $anima_sitetext ) ?>; }

body:not(.anima-landing-page) article.hentry, body:not(.anima-landing-page) .main
											{ background-color: <?php echo esc_html( $anima_contentbackground ) ?>; }
.pagination, .page-link { border-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 17 ) ); ?>; }
.post-thumbnail-container .featured-image-meta,
body:not(.single) article.hentry .post-thumbnail-container > a::after,
#header-page-title-inside
											{ background-color: rgba(<?php echo esc_html( cryout_hex2rgb( $anima_overlaybackground ) ) ;?>, <?php echo esc_html( $anima_overlayopacity/100 ); ?>); }
#header-page-title-inside					{ box-shadow: 0 -70px 70px rgba(<?php echo esc_html( cryout_hex2rgb( $anima_overlaybackground ) ) ;?>,0.2) inset; }
#header-page-title .entry-meta .bl_categ a  { background-color: <?php echo esc_html(  $anima_accent1 ) ;?>; }
#header-page-title .entry-meta .bl_categ a:hover
											{ background-color: <?php echo esc_html( cryout_hexdiff( $anima_accent1, -17 ) ) ?>; }
.anima-normal-titles #breadcrumbs-container
											{ background-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 6 ) ) ?>; }

<?php if ( ! is_rtl() ):
	if ( $anima_sitelayout == '2cSr' || $anima_sitelayout == '2cSl' || $anima_sitelayout == '3cSs' ) { ?>
	#secondary  { border-left: 1px solid rgba(0,0,0,.05); }
	#primary  { border-right: 1px solid rgba(0,0,0,.05); }
	<?php } if ( $anima_sitelayout == '3cSr' ) { ?>
	#secondary  { border-left: 1px solid rgba(0,0,0,.05); margin-left: 0; }
	#primary  { border-left: 1px solid rgba(0,0,0,.05); padding-left: 3%; }
	<?php } if ( $anima_sitelayout == '3cSl' ) { ?>
	#secondary  { border-right: 1px solid rgba(0,0,0,.05); padding-right: 3%; }
	#primary  { border-right: 1px solid rgba(0,0,0,.05); margin-right: 0; }
		<?php }
endif; ?>
<?php if ( is_rtl() ):
	if ( $anima_sitelayout == '2cSr' || $anima_sitelayout == '2cSl' || $anima_sitelayout == '3cSs' ) { ?>
	body #secondary  { border-right: 1px solid rgba(0,0,0,.05); }
	body #primary  { border-left: 1px solid rgba(0,0,0,.05); }
	<?php } if ( $anima_sitelayout == '3cSr' ) { ?>
	body #secondary  { border-right: 1px solid rgba(0,0,0,.05); margin-right: 0; }
	body #primary  { border-right: 1px solid rgba(0,0,0,.05); padding-right: 3%; }
	<?php } if ( $anima_sitelayout == '3cSl' ) { ?>
	body #secondary  { border-left: 1px solid rgba(0,0,0,.05); padding-left: 3%; }
	body #primary  { border-left: 1px solid rgba(0,0,0,.05); margin-left: 0; }
		<?php }
endif; ?>
<?php if ( ! empty( $anima_primarybackground ) ) { ?>
	#primary	 							{ padding-left: 3%; padding-right: 3%; background-color: <?php echo esc_html( $anima_primarybackground ) ?>; border-color: <?php echo esc_html( cryout_hexdiff( $anima_primarybackground, 15 ) ); ?>; }
<?php } ?>
<?php if ( ! empty( $anima_secondarybackground ) ) { ?>
	#secondary	 							{ padding-left: 3%; padding-right: 3%; background-color: <?php echo esc_html( $anima_secondarybackground ) ?>; border-color: <?php echo esc_html( cryout_hexdiff( $anima_secondarybackground, 15 ) ); ?>;}
<?php } ?>

#colophon, #footer 							{ background-color: <?php echo esc_html( $anima_footerbackground ) ?>;
 											  color: <?php echo esc_html( $anima_footertext ) ?>; }
#footer 									{ background: <?php echo esc_html (cryout_hexdiff ($anima_footerbackground, -5 ) ) ?>; }
.entry-title a:active, .entry-title a:hover { color: #00acc8; border-bottom-style: none; }
span.entry-format 							{ color: <?php echo esc_html( $anima_accent1 ) ?>; }

.format-aside 								{ border-top-color: <?php echo esc_html( $anima_contentbackground ) ?>; }

article.hentry .post-thumbnail-container
											{ background-color: rgba(<?php echo cryout_hex2rgb( esc_html( $anima_sitetext ) ) ?>,0.15); }

.entry-content blockquote::before,
.entry-content blockquote::after 			{ color: rgba(<?php echo cryout_hex2rgb( esc_html( $anima_sitetext ) ) ?>,0.2); }

.entry-content h5, .entry-content h6,
.lp-text-content h5, .lp-text-content h6 	{ color: <?php echo esc_html( $anima_accent2 ) ?>; }
.entry-content h1, .entry-content h2, .entry-content h4,
.lp-text-content h1, .lp-text-content h2, 
.lp-text-content h3, .lp-text-content h4 	{ color: <?php echo esc_html( $anima_headingstext ) ?>; }

a 											{ color: #767676; }
a:hover, .entry-meta span a:hover	{ color: #00acc8; }

.post-continue-container span.comments-link:hover, .post-continue-container span.comments-link a:hover
											{ color: <?php echo esc_html( $anima_accent1 ) ?>; }

.socials a:before 							{ color: <?php echo esc_html( $anima_accent1 ) ?>; background: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 10 ) ); ?>; }
.socials a:hover:before	 					{ background-color: <?php echo esc_html( $anima_accent1 ) ?>; color: <?php echo esc_html( $anima_contentbackground ) ?>; }

#sheader .socials a:before 							{ background: <?php echo esc_html( cryout_hexdiff( $anima_menubackground, 10 ) ); ?>; }
#sheader .socials a:hover:before	 					{ background-color: <?php echo esc_html( $anima_accent1 ) ?>; color: <?php echo esc_html( $anima_menubackground ) ?>; }

#footer .socials a:before 							{ background: <?php echo esc_html( cryout_hexdiff( $anima_footerbackground, 10 ) ); ?>; }
#footer .socials a:hover:before	 					{ background-color: <?php echo esc_html( $anima_accent1 ) ?>; color: <?php echo esc_html( $anima_footerbackground ) ?>; }

.anima-normalizedtags #content .tagcloud a 	{ color: <?php echo esc_html($anima_contentbackground) ?>; background-color: <?php echo esc_html( $anima_accent1 ) ?>; }
.anima-normalizedtags #content .tagcloud a:hover { background-color: <?php echo esc_html( $anima_accent2 ) ?>; }

#toTop 										{ background-color: rgba(<?php echo esc_html( cryout_hex2rgb( cryout_hexdiff( $anima_sitebackground, 25 ) ) ) ?>,0.5); color: <?php echo esc_html( $anima_accent1 ) ?>; }
#nav-fixed i, #nav-fixed span 				{ background-color: rgba(<?php echo esc_html( cryout_hex2rgb( cryout_hexdiff( $anima_sitebackground, 40 ) ) ) ?>,0.5); }
#nav-fixed i								{ color: <?php echo esc_html( $anima_sitebackground ) ?>; }
#toTop:hover								{ background-color: <?php echo esc_html( $anima_accent1 ) ?>;  color: <?php echo esc_html( $anima_sitebackground ) ?>; }

a.continue-reading-link 					{ background-color:<?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 16 ) ) ?>; }
.continue-reading-link::after 				{ background-color: #2c9bc6;  color: <?php echo esc_html( $anima_contentbackground ) ?>; }

.entry-meta .icon-metas:before				{ color: <?php echo esc_html( cryout_hexdiff( $anima_sitetext, -69) ) ?>; }

.anima-caption-one .main .wp-caption .wp-caption-text 	{ border-bottom-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 17 ) ) ?>; }
.anima-caption-two .main .wp-caption .wp-caption-text 	{ background-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground,10 ) ) ?>; }

.anima-image-one .entry-content img[class*="align"],
.anima-image-one .entry-summary img[class*="align"],
.anima-image-two .entry-content img[class*='align'],
.anima-image-two .entry-summary img[class*='align'] 	{ border-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 17 ) ) ?>; }
.anima-image-five .entry-content img[class*='align'],
.anima-image-five .entry-summary img[class*='align'] 	{ border-color: <?php echo esc_html( $anima_accent1 ); ?>; }

/* diffs */
span.edit-link a.post-edit-link, span.edit-link a.post-edit-link:hover, span.edit-link .icon-edit:before
											{ color: <?php echo esc_html( cryout_hexdiff( $anima_sitetext, 69) ) ?>; }

.searchform 								{ border-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 20) ) ?>; }
.entry-meta span, .entry-meta a, .entry-utility span, .entry-utility a, .entry-meta time,
#breadcrumbs-nav, #header-page-title .byline, .footermenu ul li span.sep
											{ color: <?php echo esc_html( cryout_hexdiff( $anima_sitetext, -69) ) ?>; }
.footermenu ul li a::after 					{ background: <?php echo esc_html( $anima_accent2 ); ?>; }
#breadcrumbs-nav a							{ color: <?php echo esc_html( cryout_hexdiff( $anima_sitetext, -39) ) ?>; }
.entry-meta span.entry-sticky				{ background-color: <?php echo esc_html( cryout_hexdiff( $anima_sitetext, -69) ) ?>;  color: <?php echo esc_html( $anima_contentbackground ); ?>; }
#commentform								{ <?php if ( $anima_comformwidth ) { echo 'max-width:' . esc_html( $anima_comformwidth ) . 'px;';}?>}

code, #nav-below .nav-previous a:before, #nav-below .nav-next a:before
											{ background-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 17 ) ) ?>; }
pre, .page-link > span, .comment-author,
.commentlist .comment-body, .commentlist .pingback
											{ border-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 17 ) ) ?>; }
.commentlist .comment-body::after			{ border-top-color: <?php echo esc_html( $anima_contentbackground ) ?>; }
.commentlist .comment-body::before 			{ border-top-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 27 ) ) ?>; }
article #author-info						{ border-top-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 17 ) ) ?>; }
.page-header.pad-container					{ border-bottom-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 17 ) ) ?>; }
.comment-meta a 							{ color: <?php echo esc_html( cryout_hexdiff( $anima_sitetext, -99) ) ?>; }
.commentlist .reply a 						{ color: <?php echo esc_html( cryout_hexdiff( $anima_sitetext, -79) ) ?>; background-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 12 ) ) ?>;  }
select, input[type], textarea 				{ color: <?php echo esc_html( $anima_sitetext ); ?>;
											  border-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 17 ) ) ?>; background-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 15 ) ) ?>; }

input[type]:hover, textarea:hover, select:hover,
input[type]:focus, textarea:focus, select:focus
											{ background: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 7 ) ) ?>; }

button, input[type="button"], input[type="submit"], input[type="reset"]
											{ background-color: <?php echo esc_html( $anima_accent1 ) ?>;
											  color: <?php echo esc_html( $anima_contentbackground ) ?>; }

button:hover, input[type="button"]:hover, input[type="submit"]:hover, input[type="reset"]:hover
											{ background-color: <?php echo esc_html( $anima_accent2 ) ?>; }

hr											{ background-color: <?php echo esc_html(cryout_hexdiff($anima_contentbackground, 15 ) ) ?>; }

/* gutenberg */
.wp-block-image.alignwide {
	margin-left: calc( ( <?php echo intval($anima_elementpadding * 1.50) ?>% + 2.5em ) * -1 );
	margin-right: calc( ( <?php echo intval($anima_elementpadding * 1.50) ?>% + 2.5em ) * -1 );
}
.wp-block-image.alignwide img {
	width: calc( <?php echo intval( 100 + $anima_elementpadding * 3 ) ?>% + 5em );
	max-width: calc( <?php echo intval( 100 + $anima_elementpadding * 3 ) ?>% + 5em );
}

.has-accent-1-color, .has-accent-1-color:hover	{ color: <?php echo esc_html( $anima_accent1 ) ?>; }
.has-accent-2-color, .has-accent-2-color:hover	{ color: <?php echo esc_html( $anima_accent2 ) ?>; }
.has-headings-color, .has-headings-color:hover 	{ color: <?php echo esc_html( $anima_headingstext ) ?>; }
.has-sitetext-color, .has-sitetext-color:hover	{ color: <?php echo esc_html( $anima_sitetext ) ?>; }
.has-sitebg-color, .has-sitebg-color:hover 		{ color: <?php echo esc_html( $anima_contentbackground ) ?>; }
.has-accent-1-background-color 				{ background-color: <?php echo esc_html( $anima_accent1 ) ?>; }
.has-accent-2-background-color 				{ background-color: <?php echo esc_html( $anima_accent2 ) ?>; }
.has-headings-background-color 				{ background-color: <?php echo esc_html( $anima_headingstext ) ?>; }
.has-sitetext-background-color 				{ background-color: <?php echo esc_html( $anima_sitetext ) ?>; }
.has-sitebg-background-color 				{ background-color: <?php echo esc_html( $anima_contentbackground ) ?>; }
.has-small-font-size 						{ font-size: <?php echo intval( intval($anima_fgeneralsize) / 1.6 ) ?>px; }
.has-regular-font-size 						{ font-size: <?php echo intval( intval($anima_fgeneralsize) * 1.0 ) ?>px; }
.has-large-font-size 						{ font-size: <?php echo intval( intval($anima_fgeneralsize) * 1.6 ) ?>px; }
.has-larger-font-size 						{ font-size: <?php echo intval( intval($anima_fgeneralsize) * 2.56 ) ?>px; }
.has-huge-font-size 						{ font-size: <?php echo intval( intval($anima_fgeneralsize) * 2.56 ) ?>px; }

/* woocommerce */
.woocommerce-page #respond input#submit, .woocommerce a.button,
.woocommerce-page button.button, .woocommerce input.button,
.woocommerce #respond input#submit, .woocommerce a.button,
.woocommerce button.button, .woocommerce input.button
											{ background-color: <?php echo esc_html( $anima_accent1 ) ?>;
											  color: <?php echo esc_html( $anima_contentbackground ) ?>;
											  line-height: <?php echo esc_html( floatval($anima_lineheight) ) ?>;
										      border-radius: 4px;}
.woocommerce #respond input#submit:hover, .woocommerce a.button:hover,
.woocommerce button.button:hover, .woocommerce input.button:hover
											{ background-color: <?php echo esc_html( cryout_hexdiff( $anima_accent1, -34 ) ) ?>;
										 	 color: <?php echo esc_html( $anima_contentbackground ) ?>;}
.woocommerce-page #respond input#submit.alt, .woocommerce a.button.alt,
.woocommerce-page button.button.alt, .woocommerce input.button.alt
											{ background-color: <?php echo esc_html( $anima_accent2 ) ?>;
											  color: <?php echo esc_html( $anima_contentbackground ) ?>;
										  	  line-height: <?php echo esc_html( floatval($anima_lineheight) ) ?>;
										      border-radius: 4px;}
.woocommerce-page #respond input#submit.alt:hover, .woocommerce a.button.alt:hover,
.woocommerce-page button.button.alt:hover, .woocommerce input.button.alt:hover
											{ background-color: <?php echo esc_html( cryout_hexdiff( $anima_accent2, -34 ) ) ?>;
											  color: <?php echo esc_html( $anima_contentbackground ) ?>;}
.woocommerce div.product .woocommerce-tabs ul.tabs li.active
											{ border-bottom-color: <?php echo esc_html( $anima_contentbackground ) ?>; }
.woocommerce #respond input#submit.alt.disabled,
.woocommerce #respond input#submit.alt.disabled:hover,
.woocommerce #respond input#submit.alt:disabled,
.woocommerce #respond input#submit.alt:disabled:hover,
.woocommerce #respond input#submit.alt[disabled]:disabled,
.woocommerce #respond input#submit.alt[disabled]:disabled:hover,
.woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover,
.woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover,
.woocommerce a.button.alt[disabled]:disabled,
.woocommerce a.button.alt[disabled]:disabled:hover,
.woocommerce button.button.alt.disabled,
.woocommerce button.button.alt.disabled:hover,
.woocommerce button.button.alt:disabled,
.woocommerce button.button.alt:disabled:hover,
.woocommerce button.button.alt[disabled]:disabled,
.woocommerce button.button.alt[disabled]:disabled:hover,
.woocommerce input.button.alt.disabled,
.woocommerce input.button.alt.disabled:hover,
.woocommerce input.button.alt:disabled,
.woocommerce input.button.alt:disabled:hover,
.woocommerce input.button.alt[disabled]:disabled,
.woocommerce input.button.alt[disabled]:disabled:hover
											{ background-color: <?php echo esc_html( $anima_accent2 ) ?>; }
.woocommerce ul.products li.product .price, .woocommerce div.product p.price,
.woocommerce div.product span.price
											{ color: <?php echo esc_html( cryout_hexdiff( $anima_sitetext, -50 ) ); ?> }
#add_payment_method #payment, .woocommerce-cart #payment, .woocommerce-checkout #payment {
	background: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 10 ) ) ?>;
}

/* mobile menu */
nav#mobile-menu 							{ background-color: <?php echo esc_html( $anima_menubackground ) ?>; }
#mobile-menu .mobile-arrow 					{ color: <?php echo esc_html( $anima_sitetext ) ?>; }

<?php
/////////// LAYOUT ///////////
?>
.main .entry-content, .main .entry-summary 	{ text-align: <?php echo esc_html( $anima_textalign ) ?>; }
.main p, .main ul, .main ol, .main dd, .main pre, .main hr
											{ margin-bottom: <?php echo floatval( $anima_paragraphspace ) ?>em; }
.main p 									{ text-indent: <?php echo floatval( $anima_parindent ) ?>em; }
.main a.post-featured-image 				{ background-position: <?php echo esc_html( $anima_falign ) ?>; }

#header-widget-area 						{ width: <?php echo esc_html( $anima_headerwidgetwidth ) ?>;
											<?php switch ( esc_html( $anima_headerwidgetalign ) ) {
												case 'left': ?> left: 10px; <?php break;
												case 'right': ?> right: 10px; <?php break;
												case 'center': ?>  left: calc(50% - <?php echo esc_html( $anima_headerwidgetwidth ) ?> / 2); <?php break;
											} ?> }
.anima-stripped-table .main thead th,
.anima-bordered-table .main thead th,
.anima-stripped-table .main td, .anima-stripped-table .main th,
.anima-bordered-table .main th, .anima-bordered-table .main td
											{ border-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 22 ) ) ?>; }

.anima-clean-table .main th,
.anima-stripped-table .main tr:nth-child(even) td,
.anima-stripped-table .main tr:nth-child(even) th
											{ background-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 9 ) ) ?>; }

<?php if ( $anima_fpost && ( $anima_fheight > 0 ) ) { ?>
.anima-cropped-featured .main .post-thumbnail-container
											{ height: <?php echo esc_html( $anima_fheight ) ?>px; }
.anima-responsive-featured .main .post-thumbnail-container
											{ max-height: <?php echo esc_html( $anima_fheight ) ?>px; height: auto; }
<?php } ?>

<?php
/////////// SOME CONDITIONAL CLEANUP ///////////
if ( empty( $anima_contentbackground ) ) {  ?> #primary, #colophon { border: 0; box-shadow: none; } <?php }

/////////// ELEMENTS PADDING ///////////
?>

article.hentry .article-inner,
#content-masonry article.hentry .article-inner {
		padding: <?php echo esc_html( $anima_elementpadding ) ?>%;
}

<?php if ( $anima_elementpadding ) { ?>

#breadcrumbs-nav,
body.woocommerce.woocommerce-page #breadcrumbs-nav,
.pad-container  {
	padding: <?php echo esc_html( $anima_elementpadding ) ?>%;
}

.anima-magazine-two.archive #breadcrumbs-nav,
.anima-magazine-two.archive .pad-container,
.anima-magazine-two.search #breadcrumbs-nav,
.anima-magazine-two.search .pad-container {
	padding: <?php echo esc_html( $anima_elementpadding/2 ) ?>%;
}

.anima-magazine-three.archive #breadcrumbs-nav,
.anima-magazine-three.archive .pad-container,
.anima-magazine-three.search #breadcrumbs-nav,
.anima-magazine-three.search .pad-container {
	padding: <?php echo esc_html( $anima_elementpadding/3 ) ?>%;
}
<?php } ?>
<?php
/////////// HEADER LAYOUT ///////////
?>

#access .menu-search-animated .searchform { height: <?php echo intval( $anima_menuheight - 1 ) ?>px; line-height: <?php echo intval( $anima_menuheight - 1 ) ?>px; }
.anima-over-menu .staticslider-caption-container { padding-top: <?php echo esc_html( $anima_menuheight ) ?>px; }
.menu-search-animated, #sheader-container, .identity, #nav-toggle
											{ height:<?php echo intval( $anima_menuheight ) ?>px;
											  line-height:<?php echo intval( $anima_menuheight ) ?>px; }
#access div > ul > li > a 					{ line-height:<?php echo intval( $anima_menuheight ) ?>px; }
#branding		 							{ height:<?php echo intval( $anima_menuheight ) ?>px; }
.anima-responsive-headerimage #masthead #header-image-main-inside
											{ max-height: <?php echo esc_html( $anima_headerheight ) ?>px; }
.anima-cropped-headerimage #masthead #header-image-main-inside
											{ height: <?php echo esc_html( $anima_headerheight ) ?>px; }
<?php if ( is_front_page() && function_exists( 'the_custom_header_markup' ) && has_header_video() ) { ?>
	.anima-responsive-headerimage #masthead #header-image-main-inside
												{ max-height: none; }
	.anima-cropped-headerimage #masthead #header-image-main-inside
												{ height: auto; }
<?php } ?>
<?php if ( $anima_sitetagline ) {?> #site-description { display: block; } <?php } ?>
<?php if (! display_header_text() ) { ?>
	#site-text 								{ display: none; }
<?php }; ?>
<?php if ( esc_html( $anima_menustyle ) ) { ?>
	#masthead #site-header-main 			{ position: fixed; }
<?php }; ?>
<?php /* if ( ! esc_html( $anima_menuposition ) ) { ?>
	#header-image-main						{  margin-top: <?php echo intval( $anima_menuheight ) ?>px; }
<?php };  */ ?>

<?php if ( esc_html( $anima_menuposition ) ) { ?>
	#header-widget-area						{ top: <?php echo intval( $anima_menuheight )+10 ?>px; }
<?php }; ?>
<?php
$header_image = anima_header_image_url();
if ( empty( $header_image ) ) { ?>
@media (min-width: 1152px) {
	<?php /* if ( esc_html( $anima_menuposition ) ) { ?>
	body:not(.anima-landing-page) #site-wrapper
											{ margin-top: <?php echo intval( $anima_menuheight ) ?>px; }
	<?php } */ ?>
	body:not(.anima-landing-page) #masthead
											{ border-bottom: 1px solid <?php echo esc_html( cryout_hexdiff( $anima_menubackground, 17 ) ); ?>; }
}
<?php }; ?>
@media (max-width: 640px) {
	#header-page-title .entry-title { font-size: <?php echo intval( $anima_ftitlessize ) - 50 ?>%; }
}

 <?php
/////////// lANDING PAGE ///////////
?>
.lp-staticslider .staticslider-caption,
.lp-dynamic-slider,
.seriousslider-theme .seriousslider-caption,
.anima-landing-page .lp-blocks-inside,
.anima-landing-page .lp-boxes-inside,
.anima-landing-page .lp-text-inside,
.anima-landing-page .lp-posts-inside,
.anima-landing-page .lp-page-inside,
.anima-landing-page .lp-section-header,
.anima-landing-page .content-widget	{ max-width: <?php echo esc_html( $anima_sitewidth ) ?>px;	}
.anima-landing-page .content-widget 	{ margin: 0 auto; }

.seriousslider-theme .seriousslider-caption-buttons a,
a[class^="staticslider-button"] 			{ font-size: <?php echo esc_html( $anima_fgeneralsize ) ?>; }
.seriousslider-theme .seriousslider-caption-buttons a:nth-child(2n+1),
 a.staticslider-button:nth-child(2n+1)		{ background-color: <?php echo esc_html( $anima_accent1 ) ?>;
											  border-color: <?php echo esc_html( $anima_accent1 ) ?>;
											  color: <?php echo esc_html( $anima_contentbackground ); ?>; }
.seriousslider-theme .seriousslider-caption-buttons a:nth-child(2n+1):hover,
.staticslider-button:nth-child(2n+1):hover	{ color: <?php echo esc_html( $anima_accent1 ) ?>; }
.seriousslider-theme .seriousslider-caption-buttons a:nth-child(2n+2),
a.staticslider-button:nth-child(2n+2) 		{ color: <?php echo esc_html( $anima_accent2 ) ?>;
											  border-color: <?php echo esc_html( $anima_accent2 ) ?>;  }
.seriousslider-theme .seriousslider-caption-buttons a:nth-child(2n+2):hover,
a.staticslider-button:nth-child(2n+2):hover { background-color: <?php echo esc_html( $anima_accent2 ) ?>;
											  color: <?php echo esc_html( $anima_contentbackground ); ?>; }

<?php if ( $anima_lpslider == 3 ) {?> .anima-landing-page #header-image-main-inside { display: block; } <?php } ?>
.lp-block i { border-color: <?php echo esc_html( cryout_hexdiff( $anima_lpblocksbg, -15 ) ) ?>; }
.lp-block:hover i { border-color: <?php echo esc_html( $anima_accent1 ) ?>; }
.lp-block > i::before { color: <?php echo esc_html( $anima_accent1 ) ?>; border-color: <?php echo esc_html( cryout_hexdiff( $anima_lpblocksbg, 15 ) ) ?>; background-color: <?php echo esc_html( cryout_hexdiff( $anima_lpblocksbg, -15 ) ) ?>; }
.lp-block:hover i::before { color: <?php echo esc_html( $anima_accent1 ) ?>; }
.lp-block i:after { background-color: <?php echo esc_html( $anima_accent1 ) ?>; }
.lp-block:hover i:after { background-color: <?php echo esc_html( $anima_accent2) ?>; }
.lp-block-text, .lp-boxes-static .lp-box-text, .lp-section-desc, .staticslider-caption-text { color: <?php echo esc_html( cryout_hexdiff( $anima_sitetext, -40 ) ) ?>; }
.lp-blocks { background-color:  <?php echo esc_html( $anima_lpblocksbg ) ?>; }
.lp-boxes { background-color:  <?php echo esc_html( $anima_lpboxesbg ) ?>; }
.lp-text { background-color:  <?php echo esc_html( $anima_lptextsbg ) ?>; }
.staticslider-caption-container, .lp-slider-wrapper { background-color: <?php echo esc_html( $anima_lpsliderbg ) ?>; }
.seriousslider-theme .seriousslider-caption { color:  <?php echo esc_html( $anima_lptextsbg ) ?>; }
.lp-boxes-1 .lp-box .lp-box-image { height: <?php echo intval ( (int) $anima_lpboxheight1 ); ?>px; }
.lp-boxes-1.lp-boxes-animated .lp-box:hover .lp-box-text { max-height: <?php echo intval ( (int) $anima_lpboxheight1 - 100 ); ?>px; }
.lp-boxes-2 .lp-box .lp-box-image { height: <?php echo intval ( (int) $anima_lpboxheight2 ); ?>px; }
.lp-boxes-2.lp-boxes-animated .lp-box:hover .lp-box-text { max-height: <?php echo intval ( (int) $anima_lpboxheight2 - 100 ); ?>px; }
.lp-box-readmore:hover { color: <?php echo esc_html( $anima_accent1 ) ?>; }
.lp-boxes .lp-box-overlay { background-color: rgba(<?php echo cryout_hex2rgb( esc_html( $anima_accent1 ) ) ?>, 0.8); }
.lp-boxes:not(.lp-boxes-static2) .lp-box-overlay:hover { background-color: rgba(<?php echo cryout_hex2rgb( esc_html( $anima_accent1 ) ) ?>, 1); }
#lp-posts, #lp-page { background-color: <?php echo esc_html( $anima_contentbackground ) ?>; }
#cryout_ajax_more_trigger { background-color: <?php echo esc_html( $anima_accent1 ); ?>; color: <?php echo esc_html( $anima_contentbackground ); ?>;}
<?php
for ($i=1; $i<=8; $i++) { ?>
	.lpbox-rnd<?php echo $i ?> { background-color:  <?php echo esc_html( cryout_hexdiff( $anima_lpboxesbg, 50+5*$i ) ) ?>; }
<?php }

	return apply_filters( 'anima_custom_styles', preg_replace( '/(([\w-]+):\s*?;?\s*?([;}]))/i', '$3', ob_get_clean() ) );
} // anima_custom_styles()


/*
 * Dynamic styles for the admin MCE Editor
 */
function anima_editor_styles() {
	$options = cryout_get_option();
	extract( $options );

	switch ( $anima_sitelayout ) {
		case '1c':
			$anima_primarysidebar = $anima_secondarysidebar = 0;
			break;
		case '2cSl':
			$anima_secondarysidebar = 0;
			break;
		case '2cSr':
			$anima_primarysidebar = 0;
			break;
		default:
			break;
	}
	$content_body = floor( (int) $anima_sitewidth - ( (int) $anima_primarysidebar + (int) $anima_secondarysidebar ) );
	$content_body -= floor( (int) $anima_elementpadding * 2 * $content_body / 100 );

	ob_start(); 
	
	if ( function_exists( 'register_block_type' ) && is_admin() ) {
		$scope = '.wp-block';
	} else if ( ! is_admin() ) {
		$scope = '';
	} ?>
	
/* Standard blocks */
body.mce-content-body, .wp-block { max-width: <?php echo esc_html( $content_body ); ?>px; }

/* Width of "wide" blocks */
.wp-block[data-align="wide"] { max-width: 1080px; }

/* Width of "full-wide" blocks */
.wp-block[data-align="full"] { max-width: none; }
	
body.mce-content-body, .block-editor .edit-post-visual-editor {
	background-color: <?php echo esc_html( $anima_contentbackground ) ?>	}
body.mce-content-body, .wp-block {	
	max-width: <?php echo esc_html( $content_body ); ?>px;
	font-family: MaisonNeue-Book;
	font-size: <?php echo esc_html( $anima_fgeneralsize ) ?>;
	line-height: <?php echo esc_html( floatval($anima_lineheight) ) ?>;
	color: <?php echo esc_html( $anima_sitetext ); ?>; }
.block-editor .editor-post-title__block .editor-post-title__input { 
	color: <?php echo esc_html( $anima_accent2 ) ?>; }
<?php
$font_root = 2.6; // headings font size root
for ( $i = 1; $i <= 6; $i++ ) {
$size = round( ( $font_root - ( 0.27 * $i ) ) * ( preg_replace( "/[^\d]/", "", esc_html( $anima_fheadingssize ) ) / 100), 5 ); ?>
h<?php echo $i ?> { font-size: <?php echo $size ?>em; } <?php
} //for ?>
%%scope%% h1, %%scope%% h2, %%scope%% h3, %%scope%% h4, %%scope%% h5, %%scope%% h6 {
	font-family: MaisonNeue-Book;
	font-weight: <?php echo esc_html( $anima_fheadingsweight ) ?>; 
	color: <?php echo esc_html( $anima_headingstext ) ?>; }

%%scope%% blockquote::before, %%scope%% blockquote::after {
	color: rgba(<?php echo cryout_hex2rgb( esc_html( $anima_sitetext ) ) ?>,0.1); }

%%scope%% a 		{ color: <?php echo esc_html( $anima_accent1 ); ?>; }
%%scope%% a:hover	{ color: <?php echo esc_html( $anima_accent2 ); ?>; }

%%scope%% code		{ background-color: <?php echo esc_html(cryout_hexdiff( $anima_contentbackground, 17 ) ) ?>; }
%%scope%% pre		{ border-color: <?php echo esc_html(cryout_hexdiff( $anima_contentbackground, 17 ) ) ?>; }

%%scope%% select,
%%scope%% input[type],
%%scope%% textarea {
	color: <?php echo esc_html( $anima_sitetext ); ?>;
	background-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 10 ) ) ?>;
	border-color: <?php echo esc_html( cryout_hexdiff( $anima_contentbackground, 17 ) ) ?>
}

%%scope%% p, %%scope%% ul, %%scope%% ol, %%scope%% dd, %%scope%% pre, %%scope%% hr {
	margin-bottom: <?php echo floatval( $anima_paragraphspace ) ?>em;
}
%%scope%% p { text-indent: <?php echo floatval( $anima_parindent ) ?>em; }

<?php // end </style>
	return apply_filters( 'anima_editor_styles', str_replace( '%%scope%%', $scope, ob_get_clean() ) );
} // anima_editor_styles()

/* backwards wrapper for anima_editor_styles() to output the editor style ajax request */
function anima_editor_styles_output() {
	header( 'Content-type: text/css' );
	echo anima_editor_styles();
	exit();
} // anima_editor_styles_output()


/* theme identification for the customizer */
function cryout_customize_theme_identification() {
	ob_start();
	?> #customize-theme-controls [id*="cryout-"] h3.accordion-section-title::before { content: "AN"; border: 1px solid #00acc8; color: #00acc8; } <?php
	return ob_get_clean();
} // cryout_customize_theme_identification()


/* FIN */
