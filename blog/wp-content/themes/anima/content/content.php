<?php
/**
 * The default template for displaying content
 *
 * @package Anima
 */

$options = cryout_get_option( array( 'anima_excerptarchive', 'anima_excerptsticky', 'anima_excerpthome' ) );

?><?php cryout_before_article_hook(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'hentry' ); cryout_schema_microdata( 'blogpost' ); ?>>

	<?php if ( false == get_post_format() ) { cryout_featured_hook(); } ?>
	<div class="article-inner">
		<header class="entry-header">
			<div class="entry-meta beforetitle-meta">
				<?php cryout_post_title_hook(); ?>
			</div><!-- .entry-meta -->

			<?php
			$title = get_the_title();
			if (strlen(strip_tags($title)) > 35) {
				$title = substr($title, 0, 35).'...';
			}
			
			echo '<h2 class="entry-title"' . cryout_schema_microdata('entry-title', 0) . '><a href="' . esc_url(get_permalink()) . '" ' . cryout_schema_microdata('mainEntityOfPage', 0) . ' rel="bookmark">' . esc_html($title) . '</a></h2>';
			?>

			<!-- /custom description show-->
			<div class="entry-meta aftertitle-meta">
				<?php
				$blogContent = get_post_meta( get_the_ID(), 'yourprefix_group_demo', true );
				if( $blogContent ):
					if( isset($blogContent[0]['description']) ) :
				?>
				<p>
					<?php 
					$description = substr(strip_tags($blogContent[0]['description']), 0, 150);
					if (strlen(strip_tags($blogContent[0]['description'])) > 150) {
						$description .= '...';
					}
					//$description = $blogContent[0]['description'];
					echo $description;
					?>
					
				</p>
				<?php
					endif;
					endif;
				?>
				<?php //cryout_post_meta_hook(); ?>
			</div>
			<!--Custom description end-->
			<!-- <h2 class="entry-title<?php echo cryout_schema_microdata('entry-title', 0); ?>">
				<?php echo wp_trim_words(get_the_title())?>
				<a href="<?php echo esc_url(get_permalink()); ?>" <?php echo cryout_schema_microdata('mainEntityOfPage', 0); ?> rel="bookmark" title="<?php the_title_attribute(); ?>">
				<?php echo wp_trim_words(get_the_title(), 6, '...'); ?>
				</a>
			</h2> -->	
			

		</header><!-- .entry-header -->

		<?php cryout_before_inner_hook();

		$mode = 'excerpt'; // default
		if ( $options['anima_excerptarchive'] == "full" ) { $mode = 'content'; }
		if ( is_sticky() && $options['anima_excerptsticky'] == "full" ) { $mode = 'content'; }
		if ( $options['anima_excerpthome'] == "full" && ! is_archive() && ! is_search() ) { $mode = 'content'; }
		if ( false != get_post_format() ) { $mode = 'content'; }

		switch ( $mode ) {
			case 'content': ?>

				<div class="entry-content" <?php cryout_schema_microdata( 'entry-content' ); ?>>
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'anima' ), 'after' => '</div>' ) ); ?>
					<?php cryout_post_content_hook(); ?>
				</div><!-- .entry-content -->
				<div class="entry-meta entry-utility">
					<?php cryout_meta_format_hook(); ?>
					<?php cryout_post_utility_hook(); ?>
				</div><!-- .entry-utility -->
				

			<?php break;

			case 'excerpt':
			default: ?>

				<div class="entry-summary" <?php cryout_schema_microdata( 'entry-summary' ); ?>>
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
				<div class="entry-meta entry-utility">
					<?php cryout_meta_format_hook(); ?>
					<?php cryout_post_utility_hook(); ?>
				</div><!-- .entry-utility -->
				<footer class="post-continue-container">
					<?php cryout_post_excerpt_hook(); ?>
				</footer>

			<?php break;
		}; ?>

		<?php cryout_after_inner_hook();  ?>
	</div><!-- .article-inner -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php cryout_after_article_hook(); ?>
