<div id="wrapper"> 
	<section class="newsroom">
		<div class="container">
			<div class="section_width">
				<div class="col-md-12">
					<h1 class="text-center">Newsroom</h1>
				</div>
				<div class="col-md-12">
					<div class="newsroomcarousel">
						<div id="newroomslider" class="owl-carousel owl-theme text-center">
							<?php for ($i = 0; $i < 3; $i++) { ?>
								<div class="item">
									<div class="newsroominner">
										<div class="newsroomimg" style="background:url(<?php echo $result1[$i]->image; ?>) no-repeat;"> </div>
										<div class="newsroominfo">
											<div class="newsroomcontent"><?php echo $result1[$i]->post_title; ?> </div>
											<a href="<?php echo base_url(); ?>blog/<?php echo $result1[$i]->post_name; ?>" class="odc__btn odc__btn--primary odc__btn--md" target="_blank">Read more</a></p>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="annoucement" id="announcements">
		<div class="container">
			<div class="section_width">
				<div class="col-md-12">
					<div class="heading_div text-center"> <span class="annoucement_icon"></span>
						<h1 class="text-center">Announcements</h1>
					</div>
				</div>
				<div class="annoucementsliderwr">
					<div id="annoucementslider" class="owl-carousel owl-theme"> 
						<!--repeat start here-->
						<?php $i = 0;
								do {
							?>
						<div class="item">
							<div class="annouce_sliderwrinner">
								<div class="annoucement_div upperdiv">
									<div class="col-md-3 col-sm-3 col-xs-12 annoucement_lt"> <img src="<?php echo base_url();?>assets/images/newsroomodessalogo.png" alt="Odessa-news" /> </div>
									<?php if(isset($result[$i])) { ?>
									<div class="col-md-9 col-sm-9 col-xs-12 nopad">
										<div class="annoucement_rt"> <span class="date">
											<?= $result[$i]->post_date; ?>
											</span>
											<h3>
												<?= $result[$i]->post_title; ?>
											</h3>
											<p>
												<?php
												$pos = strpos( $result[ $i ]->post_content, ' ', 150 );
												echo substr( $result[ $i ]->post_content, 0, $pos ) . ' ...';
												?>
											</p>
											<p><a href="<?php echo base_url(); ?>blog/<?= $result[$i]->post_name; ?>" class="odc__btn--more odc__btn--xl" target="_blank">Read more </a></p> </div>
									</div>
									<?php } ?>
								</div>
								<div class="bottomdiv">
									<?php if(isset($result[$i+1])) { ?>
									<div class="col-md-4 col-sm-4 col-xs-12 pd10">
										<div class="annoucement_div"> <span class="date">
											<?= $result[$i+1]->post_date; ?>
											</span>
											<h3>
												<?= $result[$i+1]->post_title; ?>
											</h3>
											<p><a href="<?php echo base_url(); ?>blog/<?= $result[$i+1]->post_name; ?>" class="odc__btn--more odc__btn--xl" target="_blank">Read more </a></p> </div>
									</div>
									<?php } ?>
									<?php if(isset($result[$i+2])) { ?>
									<div class="col-md-4 col-sm-4 col-xs-12 pd10">
										<div class="annoucement_div"> <span class="date">
											<?= $result[$i+2]->post_date; ?>
											</span>
											<h3>
												<?= $result[$i+2]->post_title; ?>
											</h3>
											<p><a href="<?php echo base_url(); ?>blog/<?= $result[$i+2]->post_name; ?>" class="odc__btn--more odc__btn--xl" target="_blank">Read more </a></p> </div>
									</div>
									<?php } ?>
									<?php if(isset($result[$i+3])) { ?>
									<div class="col-md-4 col-sm-4 col-xs-12 pd10">
										<div class="annoucement_div"> <span class="date">
											<?= $result[$i+3]->post_date; ?>
											</span>
											<h3>
												<?= $result[$i+3]->post_title; ?>
											</h3>
											<p><a href="<?php echo base_url(); ?>blog/<?= $result[$i+3]->post_name; ?>" class="odc__btn--more odc__btn--xl" target="_blank">Read more </a> </p></div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
						<!--repeat end here-->
						<?php
						$i = $i + 4;
						}
						while ( $i < count( $result ) );
						?>
					</div>
				</div>
				<div class="center-change">
					<p><a href="<?php echo base_url();?>newsroom/announcements" class="odc__btn--more odc__btn--xl">See All Announcements</a></p>
				</div>
			</div>
		</div>
	</section>
	<section class="news" id="inTheNews">
		<div class="section_width">
			<div class="innerwidth_section">
				<div class="col-md-12">
					<div class="heading_div text-center">
						<span class="news_icon"></span>
						<h1>In the News</h1>
					</div>
				</div>
				<div class="clearfix">
					<div class="news_div upperdiv">
						<div class="col-md-6 col-sm-6 col-xs-12 news_lt">
							<svg class="fs-icon fs-icon--forbes-logo" style="width: 200px;fill: #fff; xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 54"><path d="M113.3 18.2c0-5.8.1-11.2.4-16.2L98.4 4.9v1.4l1.5.2c1.1.1 1.8.5 2.2 1.1.4.7.7 1.7.9 3.2.2 2.9.4 9.5.3 19.9 0 10.3-.1 16.8-.3 19.3 5.5 1.2 9.8 1.7 13 1.7 6 0 10.7-1.7 14.1-5.2 3.4-3.4 5.2-8.2 5.2-14.1 0-4.7-1.3-8.6-3.9-11.7-2.6-3.1-5.9-4.6-9.8-4.6-2.6 0-5.3.7-8.3 2.1zm.3 30.8c-.2-3.2-.4-12.8-.4-28.5.9-.3 2.1-.5 3.6-.5 2.4 0 4.3 1.2 5.7 3.7 1.4 2.5 2.1 5.5 2.1 9.3 0 4.7-.8 8.5-2.4 11.7-1.6 3.1-3.6 4.7-6.1 4.7-.8-.2-1.6-.3-2.5-.4zM41 3H1v2l2.1.2c1.6.3 2.7.9 3.4 1.8.7 1 1.1 2.6 1.2 4.8.8 10.8.8 20.9 0 30.2-.2 2.2-.6 3.8-1.2 4.8-.7 1-1.8 1.6-3.4 1.8l-2.1.3v2h25.8v-2l-2.7-.2c-1.6-.2-2.7-.9-3.4-1.8-.7-1-1.1-2.6-1.2-4.8-.3-4-.5-8.6-.5-13.7l5.4.1c2.9.1 4.9 2.3 5.9 6.7h2V18.9h-2c-1 4.3-2.9 6.5-5.9 6.6l-5.4.1c0-9 .2-15.4.5-19.3h7.9c5.6 0 9.4 3.6 11.6 10.8l2.4-.7L41 3zm-4.7 30.8c0 5.2 1.5 9.5 4.4 12.9 2.9 3.4 7.2 5 12.6 5s9.8-1.7 13-5.2c3.2-3.4 4.7-7.7 4.7-12.9s-1.5-9.5-4.4-12.9c-2.9-3.4-7.2-5-12.6-5s-9.8 1.7-13 5.2c-3.2 3.4-4.7 7.7-4.7 12.9zm22.3-11.4c1.2 2.9 1.7 6.7 1.7 11.3 0 10.6-2.2 15.8-6.5 15.8-2.2 0-3.9-1.5-5.1-4.5-1.2-3-1.7-6.8-1.7-11.3C47 23.2 49.2 18 53.5 18c2.2-.1 3.9 1.4 5.1 4.4zm84.5 24.3c3.3 3.3 7.5 5 12.5 5 3.1 0 5.8-.6 8.2-1.9 2.4-1.2 4.3-2.7 5.6-4.5l-1-1.2c-2.2 1.7-4.7 2.5-7.6 2.5-4 0-7.1-1.3-9.2-4-2.2-2.7-3.2-6.1-3-10.5H170c0-4.8-1.2-8.7-3.7-11.8-2.5-3-6-4.5-10.5-4.5-5.6 0-9.9 1.8-13 5.3-3.1 3.5-4.6 7.8-4.6 12.9 0 5.2 1.6 9.4 4.9 12.7zm7.4-25.1c1.1-2.4 2.5-3.6 4.4-3.6 3 0 4.5 3.8 4.5 11.5l-10.6.2c.1-3 .6-5.7 1.7-8.1zm46.4-4c-2.7-1.2-6.1-1.9-10.2-1.9-4.2 0-7.5 1.1-10 3.2s-3.8 4.7-3.8 7.8c0 2.7.8 4.8 2.3 6.3 1.5 1.5 3.9 2.8 7 3.9 2.8 1 4.8 2 5.8 2.9 1 1 1.6 2.1 1.6 3.6 0 1.4-.5 2.7-1.6 3.7-1 1.1-2.4 1.6-4.2 1.6-4.4 0-7.7-3.2-10-9.6l-1.7.5.4 10c3.6 1.4 7.6 2.1 12 2.1 4.6 0 8.1-1 10.7-3.1 2.6-2 3.9-4.9 3.9-8.5 0-2.4-.6-4.4-1.9-5.9-1.3-1.5-3.4-2.8-6.4-4-3.3-1.2-5.6-2.3-6.8-3.3-1.2-1-1.8-2.2-1.8-3.7s.4-2.7 1.3-3.7 2-1.4 3.4-1.4c4 0 6.9 2.9 8.7 8.6l1.7-.5-.4-8.6zm-96.2-.9c-1.4-.7-2.9-1-4.6-1-1.7 0-3.4.7-5.3 2.1-1.9 1.4-3.3 3.3-4.4 5.9l.1-8-15.2 3v1.4l1.5.1c1.9.2 3 1.7 3.2 4.4.6 6.2.6 12.8 0 19.8-.2 2.7-1.3 4.1-3.2 4.4l-1.5.2v1.9h21.2V49l-2.7-.2c-1.9-.2-3-1.7-3.2-4.4-.6-5.8-.7-12-.2-18.4.6-1 1.9-1.6 3.9-1.8 2-.2 4.3.4 6.7 1.8l3.7-9.3z"></path></svg></div>
						<div class="col-md-6 col-sm-6 col-xs-12 nopad">
							<div class="news_rt">
								<span class="date">January 29, 2024</span>
								<!-- <h3></h3> -->
								<h3>Three Ways Equipment Finance Will Evolve In 2024</h3>
								<p><a href="https://www.forbes.com/sites/forbesbusinesscouncil/2024/01/29/three-ways-equipment-finance-will-evolve-in-2024/?sh=5fa1510071c2" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
							</div>
						</div>
					</div>
					<div class="bottomdiv">
					<div class="col-md-4 col-sm-4 col-xs-12  pd10">
						<div class="news_div">
						<span class="date">January 2024</span>
								<!-- <h3>The Equipment Finance Ecosystem's Journey Toward Inclusion</h3> -->
								<h3>Five Factors Shaping Equipment Finance’s Shift to Subscriptions</h3>
								<p><a href="https://www.monitordaily.com/opinion-posts/five-factors-shaping-equipment-finances-shift-to-subscriptions/" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
							</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12  pd10">
						<div class="news_div">
						<span class="date">January 05, 2024</span>
								<!-- <h3>The Equipment Finance Ecosystem's Journey Toward Inclusion</h3> -->
								<h3>Four Use Cases for AI in Asset Finance</h3>
								<p><a href="https://www.equipmentfa.com/blogs/37470/four-use-cases-for-ai-in-asset-finance" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
							</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12  pd10">
						<div class="news_div">
						<span class="date">January 8, 2024</span>
								<!-- <h3>The Equipment Finance Ecosystem's Journey Toward Inclusion</h3> -->
								<h3>The five key trends transforming auto finance in 2024</h3>
								<p><a href="https://www.motorfinanceonline.com/comment/the-five-key-trends-transforming-auto-finance-in-2024/" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
							</div>
					</div>
					
					
						
					
					</div>
				
			 
					<div class="bottomdiv">
					<div class="col-md-4 col-sm-4 col-xs-12  pd10">
						<div class="news_div">
								<span class="date">Sept/Oct 2023</span>
								<!-- <h3>The Equipment Finance Ecosystem's Journey Toward Inclusion</h3> -->
								<h3>Fear Not: The Only Way to Fail with Technology is to Do Nothing</h3>
								
								<p><a href="https://www.monitordaily.com/article-posts/monitor-tech-roundtable-fall-conference-issue/" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
							</div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12  pd10">
						
						<div class="news_div">
							<span class="date">Mar 7, 2023</span>
							<!-- <h3>The Equipment Finance Ecosystem's Journey Toward Inclusion</h3> -->
							<h3>Odessa named Most Innovative in Asset Finance 2022 </h3>
							
							<p><a href="https://www.monitordaily.com/reinvention-odessa/" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-12  pd10">
							<div class="news_div">
								<span class="date">Sep 17, 2021</span>
								<!-- <h3>Odessa SVP Sumandeep Kaur Named Women’s Leader in Equipment Finance</h3> -->
								<h3>Odessa secures investment from Boston private equity</h3>
								
								<p><a href="https://www.bizjournals.com/philadelphia/news/2021/09/17/fast-growing-local-fintech-secures-investment.html" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
							</div>
						</div>
						
						
					</div>
					<div class="bottomdiv">
				
					
					
					<!-- <div class="col-md-4 col-sm-4 col-xs-12  pd10">
							<div class="news_div">
								<span class="date">January 9, 2021</span>
								<h3>The Equipment Finance Ecosystem's Journey Toward Inclusion</h3>
								<p><a href="https://www.magazine.monitordaily.com/the-equipment-finance-ecosystems-journey-toward-inclusion" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
							</div>
						</div>
					
						<div class="col-md-4 col-sm-4 col-xs-12 pd10">
							<div class="news_div">
								<span class="date">January 10, 2021</span>
								<h3>Odessa SVP Sumandeep Kaur Named Women’s Leader in Equipment Finance</h3>
								<p><a href="https://www.magazine.monitordaily.com/sumandeep-kaur" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
							</div>
						</div>
						 -->
						
						
					</div>
					<div class="bottomdiv">
					<div class="col-md-4 col-sm-4 col-xs-12  pd10">
							<div class="news_div">
								<span class="date">May 15, 2021</span>
								<h3>Mission Critical Technology Delivers Flexibility for Asset Finance</h3>
								<p><a href="https://www.monitordaily.com/article-posts/mission-critical-technology-delivers-the-flexibility-and-agility-to-compete/" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
							</div>
						</div>
					<div class="col-md-4 col-sm-4 col-xs-12 pd10">
							<div class="news_div">
								<span class="date">June 25, 2020</span>
								<h3>Accelerating Digital Transformation After COVID-19 </h3>
								<p><a href="https://www.monitordaily.com/article-posts/critical-technology-accelerating-digital-transformation-after-covid-19/" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
							</div> 
						</div>
					<!-- <div class="col-md-4 col-sm-4 col-xs-12 pd10">
							<div class="news_div">
								<span class="date">February 20, 2020</span>
								<h3>Odessa SVP Keelie Fitzgerald Named Top 50 Women in Equipment Finance</h3>
								<p><a href="https://www.magazine.monitordaily.com/keelie-fitzgerald" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
							</div>
						</div> -->
						<div class="col-md-4 col-sm-4 col-xs-12 pd10">
							<div class="news_div">
								<span class="date">July 10, 2019</span>
								<h3>Living in the Future: The Monitor 2019 Tech Roundtable </h3>
								<p><a href="https://www.monitordaily.com/article-posts/living-in-the-future-the-monitor-2019-tech-roundtable/" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
							</div>
						</div>
				
			 </div>
			 <div class="bottomdiv">
			
			 <div class="col-md-4 col-sm-4 col-xs-12 pd10">
							<div class="news_div">
								<span class="date">July 1, 2018</span>
								<h3>The Next Big Trend: Equipment Finance is Ready for a Platform</h3>
								<p><a href="https://www.monitordaily.com/article-posts/next-big-trend-equipment-finance-ready-platform/" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
							</div>
						</div>
					</div>
			</div>
		</div>
	</section>
	<section class="awards" id="awardsRecognition">
		<div class="section_width">
			<div class="col-md-12">
				<div class="heading_div text-center"> <span class="award_icon"></span>
					<h1>Awards and Recognition</h1>
				</div>
			</div>
			<div class="col-md-12">
				<div class="awardswr">
					<div class="awardswr_upperrow">
						<img src="<?php echo base_url();?>assets/images/awards/elfa.webp" alt="ELFA" />
						<img src="<?php echo base_url();?>assets/images/awards/Monitor-Innovation-Badge.webp" alt="Monitor Innovation Badge" />
						<img src="<?php echo base_url();?>assets/images/awards/inc.webp" alt="INC 5000" />
					</div>
					<div class="awardswr_upperrow awardswr_middle">
						<img src="<?php echo base_url();?>assets/images/awards/2020_Philadelphia_Badges_BTWC_Winner.webp" alt="2020 Philadelphia Badges BTWC Winner" />
						<img src="<?php echo base_url();?>assets/images/awards/philadelphia.webp" alt="Philadelphia 100 fast growing company 2019" />
						<img src="<?php echo base_url();?>assets/images/awards/workingmother.webp" alt="100 best company for Working mothers" />

					</div>
					<div class="awardswr_bottomrow">
						<img src="<?php echo base_url();?>assets/images/awards/stpi.webp" alt="STPI" />
					</div>
				</div>
			</div>
			<div class="col-md-12 email_div">
				<h4><span class="email"></span>For media enquiries contact&nbsp;<a href="mailto:'press@odessainc.com'">press@odessainc.com</a></h4>
			</div>
		</div>
	</section>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.search-box').hide();
		$('input[type="search"]').val();
$('.search').click(function() {
    // $('.search-box').toggleClass("op");
    $('.search-box').toggleClass("ser");
    $(".close-search").toggleClass("op");
    $('.search-overlay').toggleClass("op");
    $('.close-search').toggleClass("op");
});

$(".close-search").click(function() {
    $('.search-box').removeClass("ser");
    $(this).removeClass("op"); // Corrected this line
    $('.search-overlay').removeClass("op");
	$('input[type="search"]').val();
});
    });

//     window.onload = function(event) {
//     event.stopPropagation(true);
//     window.location.href="http://www.google.com";
// };
</script>
<style>
	img {
  		width: 100%;
  		height: auto;
	}
</style>