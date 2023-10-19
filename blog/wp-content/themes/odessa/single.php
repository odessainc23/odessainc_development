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
$user_id			= get_the_author_meta( 'ID' );
$user_meta			= get_userdata( $user_id );
$userdata			= get_user_meta( $user_id );
$postID				= get_the_ID();
$image				= wp_get_attachment_image_src( get_post_thumbnail_id( $postID ), 'single-post-thumbnail' );
$category_detail	= get_the_category( $postID );
?>

<div id="wrapper" class="blog_page">
	<section class="pr_anouncement">
		<div class="container">
			<div class="section_width">
				<div class="row displayflex">
					<div class="col-md-6 col-sm-6 col-xs-12 mbpad">
						<div class="pr_announcementimg"><img src="<?php echo $image[0]; ?>" alt=""></div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 mbwidth pdzero">
						<div class="pr_announcementinfo">
							<span>BLOG</span>
							<h1><?php echo the_title(); ?></h1>
							<div class="blogperson_info">
								<div class="blogperson_img"><img src="<?php echo get_wp_user_avatar_src($user_id); ?>" alt=""></div>
								<div class="blogperson_det">
									<?php echo get_the_author_meta( 'display_name', $post->post_author ) ?>
									<span><?php echo $userdata['description']['0']; ?></span>
								</div>
							</div>
							<span class="date"><?php the_time('F j, Y') ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="content">
		<div class="container">
			<div class="section_width blogwd">
				<div class="row displayflex">
					<div class="col-md-4 col-sm-4 sticky_tabheading">
						<?php
							$blogContent = get_post_meta( get_the_ID(), 'yourprefix_group_demo', true );
							if ( $blogContent ):
								if ( isset($blogContent['0']['title']) || isset($blogContent[ '1' ][ 'title' ]) ):
						?>
								<div class="tab_content">
									<div class="tab_heading">TABLE OF CONTENTS</div>
									<div class="tabs_link">
										<?php
											foreach ( $blogContent as $con ) {
												if ( isset($con[ 'title' ]) ) {
													$goto1 = preg_replace('/[^a-zA-Z0-9]+/', '', $con['title']);
													$goto = str_replace([':', ','], '', $goto1);
										?>
													<a href="#<?php echo $goto; ?>"><?php echo $con['title']; ?></a>
										<?php
												}
											}
										?>
									</div>
								</div>
						<?php
								endif;
							endif;
						?>
						<div class="content_img">
							<span><?php the_field('image_text'); ?></span>
							<?php if( get_field('image') ): ?>
								<div class="content_img_inner"> <img src="<?php the_field('image'); ?>" alt=""> </div>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-md-8 col-sm-8 blogpad">
						<div class="content_text">
							<?php
								if( $blogContent ):
									foreach ( $blogContent as $detail ) {
										if( isset($detail['title']) ) :
											$goto2 = preg_replace( '/\s+/', '', $detail[ 'title' ] );
							?>
											<h3 class="scrollheading" id="<?php echo $goto2; ?>"><?php echo $detail['title']; ?></h3>
							<?php
										endif;
							
										if( isset($detail['description']) ) :
							?>
											<p><?php echo $detail['description']; ?></p>
									<?php
										endif;
									}
								endif;
							?>
						</div>
						<h3 class="scrollheading"></h3>
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
						$singleArgs = array( 'numberposts' => 3, 'offset' => 0, 'post_type' => 'Post' );
						$singlePost = get_posts( $singleArgs );

						foreach ( $singlePost as $single ): setup_postdata( $single );
							$singleperm = get_permalink( $single->ID );
							$singleimage = wp_get_attachment_image_src( get_post_thumbnail_id( $single->ID ), 'single-post-thumbnail' );
					?>
					<div class="col-xs-12 col-md-4 col-sm-4 item">
						<a href="<?php echo $singleperm; ?>" class="annoucement_div">
							<div class="annoucement_thumb"><img src="<?php echo $singleimage[0]; ?>" /></div>
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
			<div class="section_width">
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
<script>
	$(document).ready(function() {
		var HeadH = $('.navbar-default').outerHeight();

		$('.tabs_link a').bind('click', function(e) {
			e.preventDefault(); 
			var target = $(this).attr("href"); 

			$('html, body').stop().animate({
				scrollTop: $(target).offset().top - HeadH -10
			}, 600);

			return false;
		});
	});

	$(window).scroll(function() {
		var scrollDistance = $(window).scrollTop();

		$('.scrollheading').each(function(i) {
			if ($(this).position().top <= scrollDistance) {
				$('.tabs_link a.tabs_linkactive').removeClass('tabs_linkactive');
				$('.tabs_link a').eq(i).addClass('tabs_linkactive');
			}
		});
	}).scroll(); 
</script>