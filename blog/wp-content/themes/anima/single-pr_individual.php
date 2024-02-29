<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
while ( have_posts() ): the_post();
$user_id = get_the_author_meta( 'ID' );
$postID = get_the_ID();
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $postID ), 'single-post-thumbnail' );
?>

<section class="pr_anouncement">
	<div class="container">
		<div class="section_width">
			<div class="row displayflex">
				<?php if(isset($image[0])) {?>
					<div class="col-md-6 col-sm-6 col-xs-12 mbpad">
						<div class="pr_announcementimg">
							<?php if(isset($image[0])):?>
								<img src="<?php echo $image[0]; ?>" alt="">
							<?php endif; ?> 
						</div> 
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mbwidth pdzero">
				<?php } else { ?>
					<div class="col-md-12 col-sm-12 col-xs-12 mbwidth pdzero">		
				<?php } ?>
					<div class="pr_announcementinfo"> <span>ANNOUNCEMENT</span>
						<h1><?php echo the_title(); ?></h1>
						<p>
							<?php the_field('pr_short_description'); ?>
						</p>
						<span class="date">
						<?php the_time('F j, Y') ?>
						</span> </div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="content">
	<div class="container">
		<div class="section_width blogwd">
			<div class="row displayflex">
			<?php if( the_field('image_text') || get_field('image') ||  get_field('image_link')) { ?>
				<div class="col-md-4 col-sm-4 blogpad">
					<div class="content_img"> <span>
						<?php the_field('image_text'); ?>
						</span>
						<?php if( get_field('image') ): ?>
						<div class="content_img_inner"> <img src="<?php the_field('image'); ?>" alt=""> </div>
						<?php endif; ?>
						<?php if( get_field('image_link') ): ?>
						<a href="<?php the_field('image_link'); ?>" class="cmsbtns_style" style="margin-top: 10px;">Learn More</a>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-8 col-sm-8 blogpad">
				<?php }else{ ?>
					<div class="col-md-12 col-sm-12 blogpad">
				<?php } ?>
					<div class="content_text"> <?php echo the_content(); ?> </div>
					<div class="addthis_responsive_sharing_37zh content_socialicons"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; wp_reset_postdata(); wp_reset_query();   ?>
	<section class="morelikethis">
		<div class="container">
			<div class="section_width blogwd">
				<h3>More like this</h3>
				<div id="morelikethis_slider" class="row">
					<?php
						$singleArgs = array( 'numberposts' => 3, 'offset' => 1, 'post_type' => 'Post' );
						$singlePost = get_posts( $singleArgs );

						foreach ( $singlePost as $single ): setup_postdata( $single );
							$singleperm = get_permalink( $single->ID );
							$singleimage = wp_get_attachment_image_src( get_post_thumbnail_id( $single->ID ), 'single-post-thumbnail' );
					?>
					<div class="col-xs-12 col-md-4 col-sm-4 item">
						<a href="<?php echo $singleperm; ?>" class="annoucement_div">
							<div class="annoucement_thumb"><img src="<?php echo $singleimage[1]; ?>" /></div>
							<div class="annoucement_content">
								<h3><?php echo get_the_title($single->ID); ?></h3>
							</div>
						</a>
					</div>
					<?php endforeach; wp_reset_postdata(); wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>
<div class="lettalk">
	<div class="container">
		<div class="section_width blogwd">
			<div class="letstalkinner">
				<p>Learn why companies trust Odessa to help deliver great stakeholder experiences.</p>
				<a href="<?php echo OD_BASE_URL ?>lets-talk" class="odc__btn odc__btn--primary odc__btn--xl">Let’s Talk</a>
			</div>
		</div>
	</div>
</div>
</div>
<?php
get_footer();
?>
