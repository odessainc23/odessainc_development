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
						<h2>In the News</h2>
					</div>
				</div>
				<div class="clearfix">
					<div class="news_div upperdiv">
						<div class="col-md-6 col-sm-6 col-xs-12 news_lt">
						<img data-src="<?= base_url(); ?>assets/images/LeasingLife_footer.webp" alt="Dots" class="lazyload wh-image"/> 
							</div>
						<div class="col-md-6 col-sm-6 col-xs-12 nopad">
							<div class="news_rt">
								<span class="date">March 8, 2024</span>
								<!-- <h3></h3> -->
								<h3>Decoding tech solutions for lease accounting: key questions for vendors</h3>
								<p><a href="https://www.leasinglife.com/comment/decoding-tech-solutions-for-lease-accounting-key-questions-for-vendors/" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
							</div>
						</div>
					</div>
					<div class="bottomdiv">
						<div class="col-md-4 col-sm-4 col-xs-12  pd10">
						<div class="news_div">
						<span class="date">January 29, 2024</span>
								<!-- <h3>The Equipment Finance Ecosystem's Journey Toward Inclusion</h3> -->
								<h3>Three Ways Equipment Finance Will Evolve In 2024</h3>
								<p><a href="https://www.forbes.com/sites/forbesbusinesscouncil/2024/01/29/three-ways-equipment-finance-will-evolve-in-2024/?sh=5fa1510071c2" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
							</div>
					</div>
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
					
					
					
						
					
					</div>
				
			 
					<div class="bottomdiv">
						<div class="col-md-4 col-sm-4 col-xs-12  pd10">
							<div class="news_div">
							<span class="date">January 8, 2024</span>
									<!-- <h3>The Equipment Finance Ecosystem's Journey Toward Inclusion</h3> -->
									<h3>The five key trends transforming auto finance in 2024</h3>
									<p><a href="https://www.motorfinanceonline.com/comment/the-five-key-trends-transforming-auto-finance-in-2024/" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
								</div>
						</div>
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
								<span class="date">Sep 17, 2021</span>
								<!-- <h3>Odessa SVP Sumandeep Kaur Named Women’s Leader in Equipment Finance</h3> -->
								<h3>Odessa secures investment from Boston private equity</h3>
								
								<p><a href="https://www.bizjournals.com/philadelphia/news/2021/09/17/fast-growing-local-fintech-secures-investment.html" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
							</div>
						</div>
						
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
					
				
			 </div>
			 <div class="bottomdiv">
				<div class="col-md-4 col-sm-4 col-xs-12 pd10">
					<div class="news_div">
						<span class="date">July 10, 2019</span>
						<h3>Living in the Future: The Monitor 2019 Tech Roundtable </h3>
						<p><a href="https://www.monitordaily.com/article-posts/living-in-the-future-the-monitor-2019-tech-roundtable/" class="odc__btn--more odc__btn--xl" target="_blank">Read more</a></p>
					</div>
				</div>
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