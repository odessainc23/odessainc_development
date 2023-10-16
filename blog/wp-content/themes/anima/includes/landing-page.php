<?php
/**
 * Landing page functions
 * Used in front-page.php
 *
 * @package Anima
 */

/**
 * slider builder
 */
if ( ! function_exists('anima_lpslider' ) ):
function anima_lpslider() {
	$options = cryout_get_option( array( 'anima_lpslider', 'anima_lpsliderimage', 'anima_lpslidertitle', 'anima_lpslidertext', 'anima_lpslidershortcode', 'anima_lpsliderserious', 'anima_lpslidercta1text', 'anima_lpslidercta1link', 'anima_lpslidercta2text', 'anima_lpslidercta2link' ) );

	// output cta area before slider
	anima_lpslider_cta_output( array(
		'title' => $options['anima_lpslidertitle'],
		'content' => $options['anima_lpslidertext'],
		'lpslidercta1text' => $options['anima_lpslidercta1text'],
		'lpslidercta1link' => $options['anima_lpslidercta1link'],
		'lpslidercta2text' => $options['anima_lpslidercta2text'],
		'lpslidercta2link' => $options['anima_lpslidercta2link'],
	) );

	if ( $options['anima_lpslider'] )
		switch ( $options['anima_lpslider'] ):
			case 1:
				if ( is_string( $options['anima_lpsliderimage'] ) ) {
					$image = $options['anima_lpsliderimage'];
				}
				else {
					list( $image, ) = wp_get_attachment_image_src( $options['anima_lpsliderimage'], 'full' );
				}
				anima_lpslider_output( array(
					'image' => $image,
					'title' => $options['anima_lpslidertitle'],
					'content' => $options['anima_lpslidertext'],
				) );
			break;
			case 2:
				?> <div class="lp-slider-wrapper"> <section class="lp-dynamic-slider"> <?php
				echo do_shortcode( $options['anima_lpslidershortcode'] );
				?> </section> <!-- lp-dynamic-slider --> </div> <?php
			break;
			case 3:
				// header image
			break;
			case 4:
				?> <div class="lp-slider-wrapper"> <section class="lp-dynamic-slider"> <?php
					if ( ! empty( $options['anima_lpsliderserious'] ) ) {
						echo do_shortcode( '[serious-slider id="' . $options['anima_lpsliderserious'] . '"]' );
					}
				?> </section> <!-- lp-dynamic-slider --> </div> <?php
			break;

			default:
			break;
		endswitch;
} //  anima_lpslider()
endif;

/**
 * slider cta output
 */
if ( ! function_exists( 'anima_lpslider_cta_output' ) ):
function anima_lpslider_cta_output( $data ){
	extract($data);
 	if ( empty( $title ) && empty( $content ) && empty( $lpslidercta1text ) && empty( $lpslidercta2text ) ) return; ?>

	<section class="staticslider-caption-container">
		<div class="staticslider-caption">
			<?php if ( ! empty( $title ) ) { ?> <h2 class="staticslider-caption-title"><?php echo do_shortcode( wp_kses_post( $title ) ) ?></h2><?php } ?>
			<?php if ( ! empty( $title ) && ! empty( $content ) ) { ?><span class="staticslider-sep"></span><?php } ?>
			<?php if ( ! empty( $content ) ) { ?> <div class="staticslider-caption-text"><?php echo do_shortcode( wp_kses_post( $content ) ) ?></div><?php } ?>
			<div class="staticslider-caption-buttons">
				<?php if ( ! empty( $lpslidercta1text ) ) { echo '<a class="staticslider-button" href="' . esc_url( $lpslidercta1link ) . '">' . esc_html( $lpslidercta1text ) . '</a>'; } ?>
				<?php if ( ! empty( $lpslidercta2text ) ) { echo '<a class="staticslider-button" href="' . esc_url( $lpslidercta2link ) . '">' . esc_html( $lpslidercta2text ) . '</a>'; } ?>
			</div>
		</div>
	</section>
	<?php
} // anima_lpslider_cta_output()
endif;

/**
 * slider output
 */
if ( ! function_exists( 'anima_lpslider_output' ) ):
function anima_lpslider_output( $data ){
	extract($data);
	if ( empty( $image ) ) return; ?>

	<div class="lp-slider-wrapper"> 
		<section class="lp-staticslider">
			<?php if ( ! empty( $image ) ) { ?>
				<img class="lp-staticslider-image" alt="<?php echo esc_attr( $title ) ?>" src="<?php echo esc_url( $image ); ?>">
			<?php } ?>
		</section><!-- .lp-staticslider -->
	</div>

<?php
} // anima_lpslider_output()
endif;


/**
 * blocks builder
 */
if ( ! function_exists( 'anima_lpblocks' ) ):
function anima_lpblocks( $sid = 1 ) {
	$maintitle = cryout_get_option( 'anima_lpblockmaintitle'.$sid );
	$maindesc = cryout_get_option( 'anima_lpblockmaindesc'.$sid );
	$pageids = cryout_get_option( apply_filters('anima_blocks_ids', array( 'anima_lpblockone'.$sid, 'anima_lpblocktwo'.$sid, 'anima_lpblockthree'.$sid, 'anima_lpblockfour'.$sid), $sid ) );
	$icon = cryout_get_option( apply_filters('anima_blocks_icons', array( 'anima_lpblockoneicon'.$sid, 'anima_lpblocktwoicon'.$sid, 'anima_lpblockthreeicon'.$sid, 'anima_lpblockfouricon'.$sid ), $sid ) );
	$blockscontent = cryout_get_option( 'anima_lpblockscontent'.$sid );
	$blocksclick = cryout_get_option( 'anima_lpblocksclick'.$sid );
	$blocksreadmore = cryout_get_option( 'anima_lpblocksreadmore'.$sid );
	$count = 1;
	$pagecount = count( array_filter( $pageids, function ($v) { return $v > 0; } ) );
	if ( empty( $pagecount ) ) return;
	if ( -1 == $blockscontent ) return;
	?>
	<section id="lp-blocks<?php echo $sid ?>" class="lp-blocks lp-blocks<?php echo $sid ?> lp-blocks-rows-<?php echo apply_filters('anima_blocks_perrow', $pagecount, $sid) ?>">
		<?php if(  ! empty( $maintitle ) || ! empty( $maindesc ) ) { ?>
			<header class="lp-section-header">
				<?php if( ! empty( $maintitle ) ) { ?><h2 class="lp-section-title"> <?php echo do_shortcode( wp_kses_post( $maintitle ) ) ?></h2><?php } ?>
				<?php if( ! empty( $maindesc ) ) { ?><div class="lp-section-desc"> <?php echo do_shortcode( wp_kses_post( $maindesc ) ) ?></div><?php } ?>
			</header>
		<?php } ?>
		<div class="lp-blocks-inside">
			<?php foreach ( $pageids as $key => $pageid ) {
				$pageid = cryout_localize_id( $pageid );
				if ( intval( $pageid ) > 0 ) {
					$page = get_post( $pageid );

					switch ( $blockscontent ) {
						case '0': $text = ''; break;
						case '2': $text = apply_filters( 'the_content', get_post_field( 'post_content', $pageid ) ); break;
						case '1': default: if (has_excerpt( $pageid )) $text = get_the_excerpt( $pageid ); else $text = anima_custom_excerpt( apply_filters( 'the_content', get_post_field( 'post_content', $pageid ) ) ); break;
					};

					$iconid = preg_replace('/(\d)$/','icon$1', $key);

					$data[$count] = array(
						'title' => apply_filters('anima_block_title', get_the_title( $pageid ), $pageid ),
						'text'	=> $text,
						'icon'	=> ( ( $icon[$iconid] != 'no-icon' ) ? $icon[$iconid] : '' ),
						'link'	=> apply_filters( 'anima_block_url', get_permalink( $pageid ), $pageid ),
						'target' => apply_filters( 'anima_block_target', '', $pageid ),
						'click'	=> $blocksclick,
						'id' 	=> $count,
						'readmore' => $blocksreadmore,
					);
					anima_lpblock_output( $data[$count] );
					$count++;
				}
			} ?>
		</div>
	</section>
<?php
wp_reset_postdata();
} //anima_lpblocks()
endif;

/**
 * blocks output
 */
if ( ! function_exists( 'anima_lpblock_output' ) ):
function anima_lpblock_output( $data ) { ?>
	<?php extract($data) ?>
			<div class="lp-block block<?php echo absint( $id ); ?>">
				<?php if ( $click ) { ?><a href="<?php echo esc_url( $link ); ?>" aria-label="<?php echo esc_attr( $title ); ?>"<?php echo $target ?>><?php } ?>
					<?php if ( ! empty ( $icon ) )	{ ?> <i class="blicon-<?php echo esc_attr( $icon ); ?>"></i><?php } ?>
				<?php if ( $click ) { ?></a> <?php } ?>
					<div class="lp-block-content">
						<?php if ( ! empty ( $title ) ) { ?><h4 class="lp-block-title"><?php echo do_shortcode( $title ) ?></h4><?php } ?>
						<?php if ( ! empty ( $text ) ) { ?><div class="lp-block-text"><?php echo do_shortcode( $text ) ?></div><?php } ?>
						<?php if ( ! empty ( $readmore ) ) { ?><a class="lp-block-readmore" href="<?php echo esc_url( $link ); ?>" <?php echo esc_attr( $target ); ?>> <?php echo do_shortcode( wp_kses_post( $readmore ) ); ?> <em class="screen-reader-text">"<?php echo esc_attr( $title ) ?>"</em> </a><?php } ?>
					</div>
			</div><!-- lp-block -->
	<?php
} // anima_lpblock_output()
endif;


/**
 * boxes builder
 */
if ( ! function_exists( 'anima_lpboxes' ) ):
function anima_lpboxes( $sid = 1 ) {
	$options = cryout_get_option(
				array(
					 'anima_lpboxmaintitle' . $sid,
					 'anima_lpboxmaindesc' . $sid,
					 'anima_lpboxcat' . $sid,
					 'anima_lpboxrow' . $sid,
					 'anima_lpboxcount' . $sid,
					 'anima_lpboxlayout' . $sid,
					 'anima_lpboxmargins' . $sid,
					 'anima_lpboxanimation' . $sid,
					 'anima_lpboxreadmore' . $sid,
					 'anima_lpboxlength' . $sid,
				 )
			 );

	if ( ( $options['anima_lpboxcount' . $sid] <= 0 ) || ( $options['anima_lpboxcat' . $sid] == '-1' ) ) return;

 	$box_counter = 1;
	$animated_class = "";
	if ( $options['anima_lpboxanimation' . $sid] == 1 ) $animated_class = 'lp-boxes-animated';
	if ( $options['anima_lpboxanimation' . $sid] == 2 ) $animated_class = 'lp-boxes-static';
	if ( $options['anima_lpboxanimation' . $sid] == 3 ) $animated_class = 'lp-boxes-animated lp-boxes-animated2';
	if ( $options['anima_lpboxanimation' . $sid] == 4 ) $animated_class = 'lp-boxes-static lp-boxes-static2';

	$custom_query = new WP_query();
    if ( ! empty( $options['anima_lpboxcat' . $sid] ) ) $cat = $options['anima_lpboxcat' . $sid]; else $cat = '';

	$args = apply_filters( 'anima_boxes_query_args', array(
		'showposts' => $options['anima_lpboxcount' . $sid],
		'cat' => cryout_localize_cat( $cat ),
		'ignore_sticky_posts' => 1,
		'lang' => cryout_localize_code()
	), $options['anima_lpboxcat' . $sid], $sid );

    $custom_query->query( $args );

    if ( $custom_query->have_posts() ) : ?>
		<section id="lp-boxes-<?php echo absint( $sid ) ?>" class="lp-boxes lp-boxes-<?php echo absint( $sid ) ?> <?php  echo esc_attr( $animated_class ) ?> lp-boxes-rows-<?php echo absint( $options['anima_lpboxrow' . $sid] ); ?>">
			<?php if( $options['anima_lpboxmaintitle' . $sid] || $options['anima_lpboxmaindesc' . $sid] ) { ?>
				<header class="lp-section-header">
					<?php if ( ! empty( $options['anima_lpboxmaintitle' . $sid] ) ) { ?> <h2 class="lp-section-title"> <?php echo do_shortcode( wp_kses_post( $options['anima_lpboxmaintitle' . $sid] ) ) ?></h2><?php } ?>
					<?php if ( ! empty( $options['anima_lpboxmaindesc' . $sid] ) ) { ?><div class="lp-section-desc"> <?php echo do_shortcode( wp_kses_post( $options['anima_lpboxmaindesc' . $sid] ) ) ?></div><?php } ?>
				</header>
			<?php } ?>
			<div class="<?php if ( $options['anima_lpboxlayout' . $sid] == 2 ) { echo 'lp-boxes-inside'; } else { echo 'lp-boxes-outside'; }?>
						<?php if ( $options['anima_lpboxmargins' . $sid] == 2 ) { echo 'lp-boxes-margins'; }?>
						<?php if ( $options['anima_lpboxmargins' . $sid] == 1 ) { echo 'lp-boxes-padding'; }?>">
    		<?php while ( $custom_query->have_posts() ) :
		            $custom_query->the_post();
					if ( cryout_has_manual_excerpt( $custom_query->post ) ) {
						$excerpt = get_the_excerpt();
					} elseif ( has_excerpt() ) {
						$excerpt = anima_custom_excerpt( get_the_excerpt(), $options['anima_lpboxlength' . $sid] );
					} else {
						$excerpt = anima_custom_excerpt( get_the_content(), $options['anima_lpboxlength' . $sid] );
					};
		            $box = array();
		            $box['colno'] = $box_counter++;
		            $box['counter'] = $options['anima_lpboxcount' . $sid];
		            $box['title'] = apply_filters('anima_box_title', get_the_title(), get_the_ID() );
		            $box['content'] = $excerpt;
		            list( $box['image'], ) = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'anima-lpbox-' . $sid );
					$box['link'] = apply_filters( 'anima_box_url', get_permalink(), get_the_ID() );
					$box['readmore'] = do_shortcode( wp_kses_post( $options['anima_lpboxreadmore' . $sid] ) );
					$box['target'] = apply_filters( 'anima_box_target', '', get_the_ID() );

					$box['image'] = apply_filters('anima_preview_img_src', $box['image']);

            		anima_lpbox_output( $box );
        		endwhile; ?>
			</div>
		</section><!-- .lp-boxes -->
<?php endif;
	wp_reset_postdata();
} //  anima_lpboxes()
endif;

/**
 * boxes output
 */
if ( ! function_exists( 'anima_lpbox_output' ) ):
function anima_lpbox_output( $data ) {
	$randomness = array ( 6, 8, 1, 5, 2, 7, 3, 4 );
	extract($data); ?>
			<div class="lp-box box<?php echo absint( $colno ); ?> ">
					<div class="lp-box-image lpbox-rnd<?php echo $randomness[$colno%8]; ?>">
						<?php if( ! empty( $image ) ) { ?> <img alt="<?php echo esc_attr( $title ) ?>" src="<?php echo esc_url( $image ) ?>" /> <?php } ?>

						<div class="lp-box-overlay">
							<a class="lp-box-link" <?php if( ! empty( $link ) ) { ?> href="<?php echo esc_url( $link ); ?>"<?php } ?> aria-label="<?php echo esc_attr( $title ); ?>" <?php echo esc_attr( $target ); ?>> <?php echo do_shortcode( wp_kses_post( $readmore ) ) ?> <i class="icon-continue-reading"></i></a>
						</div>
					</div>
					<div class="lp-box-content">
						<?php if ( ! empty( $title ) ) { ?><h5 class="lp-box-title">
							<?php if ( !empty( $readmore ) && !empty( $link ) ) { ?> <a href="<?php echo esc_url( $link ); ?>" <?php echo esc_attr( $target ); ?>><?php } ?>
								<?php echo do_shortcode( $title ); ?>
							<?php if ( !empty( $readmore ) && !empty( $link ) ) { ?> </a> <?php } ?>
						</h5><?php } ?>
						<div class="lp-box-text">
							<?php if ( ! empty( $content ) ) { ?>
								<div class="lp-box-text-inside"> <?php echo do_shortcode( $content ) ?> </div>
							<?php } ?>
							<?php if( ! empty( $readmore ) ) { ?>
								<a class="lp-box-readmore" href="<?php if( ! empty( $link ) ) { echo esc_url( $link ); } ?>" <?php echo esc_attr( $target ); ?>> <?php echo do_shortcode( wp_kses_post( $readmore ) ) ?> <em class="screen-reader-text">"<?php echo esc_attr( $title ) ?>"</em> <i class="icon-continue-reading"></i></a>
							<?php } ?>
						</div>
					</div>
			</div><!-- lp-box -->
	<?php
} // anima_lpbox_output()
endif;


/**
 * text area builder
 */
if ( ! function_exists( 'anima_lptext' ) ):
function anima_lptext( $what = 'one' ) {
	$pageid = cryout_get_option( 'anima_lptext' . $what );
	$pageid = cryout_localize_id( $pageid );
	if ( intval( $pageid ) > 0 ) {
		$page = get_post( $pageid );
		$data = array(
			'title' => apply_filters( 'anima_text_title', get_the_title( $pageid ), $pageid ),
			'text'	=> apply_filters( 'the_content', get_post_field( 'post_content', $pageid ) ),
			'class' => apply_filters( 'anima_text_class', '', $pageid ),
			'id' 	=> $what,
		);
		list( $data['image'], ) = wp_get_attachment_image_src( get_post_thumbnail_id( $pageid ), 'full' );
		anima_lptext_output( $data );
	}
} // anima_lptext()
endif;

/**
 * text area output
 */
if ( ! function_exists( 'anima_lptext_output' ) ):
function anima_lptext_output( $data ){ ?>
	<section class="lp-text" id="lp-text-<?php echo esc_attr( $data['id'] ); ?>"<?php if( ! empty( $data['image'] ) ) { ?> style="background-image: url( <?php echo esc_url( $data['image'] ); ?>);" <?php } ?> >
			<div class="lp-text-inside">
				<?php if( ! empty( $data['title'] ) ) { ?><h2 class="lp-text-title"><?php echo do_shortcode( $data['title'] ) ?></h2><?php } ?>
				<?php if( ! empty( $data['text'] ) ) { ?><div class="lp-text-content"><?php echo do_shortcode( $data['text'] ) ?></div><?php } ?>
			</div>

	</section><!-- .lp-text-<?php echo esc_attr( $data['id'] ); ?> -->
<?php
} // anima_lptext_output()
endif;

/**
 * page or posts output, also used when landing page is disabled
 */
if ( ! function_exists( 'anima_lpindex' ) ):
function anima_lpindex() {

	$anima_lpposts = cryout_get_option('anima_lpposts');

	switch ($anima_lpposts) {

		case 2: // static page

			if ( have_posts() ) :
					?><section id="lp-page"> <div class="lp-page-inside"><?php
					get_template_part( 'content/content', 'page' );
					?></div> </section><!-- #lp-page --><?php
			endif;

		break;

		case 1: // posts

			if ( get_query_var('paged') ) $paged = get_query_var('paged');
			elseif ( get_query_var('page') ) $paged = get_query_var('page');
			else $paged = 1;
			$custom_query = new WP_query( array('posts_per_page'=>get_option('posts_per_page'),'paged'=>$paged) );

			if ( $custom_query->have_posts() ) :  ?>
				<section id="lp-posts"> <div class="lp-posts-inside">
				<div id="content-masonry" class="content-masonry" <?php cryout_schema_microdata( 'blog' ); ?>> <?php
					while ( $custom_query->have_posts() ) : $custom_query->the_post();
						get_template_part( 'content/content', get_post_format() );
					endwhile; ?>
				</div> <!-- content-masonry -->
				</div> </section><!-- #lp-posts -->
				<?php anima_pagination();
				wp_reset_postdata();
			else :
				//get_template_part( 'content/content', 'notfound' );
			endif;

		break;

		case 0: // disabled
		default: break;
	}

} // anima_lpindex()
endif;

// FIN
