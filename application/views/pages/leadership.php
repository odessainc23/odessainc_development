<div id="wrapper">
	<div class="pg_banner pglead__banner">
		<div class="odc-gd__container">
			<div class="pglead__btop">
				<h1 class="pglead__btitle">Leadership</h1>
				<p class="pglead__btext">Our leadership team is comprised of industry leaders and domain experts, bringing decades of cumulative insight and experience to our company and customers.</p>
				<a href="<?php echo base_url();?>careers" class="pglead__baction odc__btn odc__btn--xl odc__btn--more">More about our teams</a>
			</div>
		</div>
	</div>
	<div class="pglead_leaders">
		<div class="odc-gd__container">
			<div class="pglead_ldcards">
				<?php foreach($leaders_list as $item) { ?>
					<div class="pglead_ldcard is-collapsed">
						<div class="pglead_ld-item js-expander">
							<div class="pglead_ld-ithumb">
								<img src="<?php echo $item['thumbnail']; ?>" alt="<?php echo $item['name']; ?>"/>
							</div>
							<div class="pglead_ld-icont">
								<div class="pglead_ld-icname"><?php echo $item['name']; ?></div>
								<div class="pglead_ld-ictitle"><?php echo $item['title']; ?></div>
								<div class="pglead_ld-icmisc">
									<div class="pglead_ld-icmexp"><?php echo $item['experience']; ?></div>
									<?php if ( isset($item['social']) ) { ?>
										<div class="pglead_ld-icmsoc">
											<?php if ( isset($item['social']['linkedin']) ) { ?>
												<a href="<?php echo $item['social']['linkedin']; ?>" class="pglead_ld-icmsitem pglead_ld-icmsitem--linkedin" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" xmlns:v="https://vecta.io/nano"><path d="M12 12h5.535v2.837h.08C18.385 13.457 20.27 12 23.08 12c5.84 0 6.92 3.637 6.92 8.367V30h-5.77v-8.54c0-2.037-.042-4.657-3-4.657-3.005 0-3.463 2.218-3.463 4.5V30H12V12zM2 12h6v18H2V12zm6-5a3 3 0 1 1-6 0 3 3 0 1 1 6 0z"></path></svg></a>
											<?php } ?>
											<?php if ( isset($item['social']['twitter']) ) { ?>
												<a href="<?php echo $item['social']['twitter']; ?>" class="pglead_ld-icmsitem pglead_ld-icmsitem--twitter" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" xmlns:v="https://vecta.io/nano" viewBox="0 0 32 32"><path d="M32 7.075a12.94 12.94 0 0 1-3.769 1.031 6.6 6.6 0 0 0 2.887-3.631 13.21 13.21 0 0 1-4.169 1.594C25.75 4.794 24.043 4 22.155 4c-3.625 0-6.563 2.938-6.563 6.563 0 .512.056 1.012.17 1.494-5.456-.275-10.294-2.888-13.53-6.862a6.56 6.56 0 0 0-.887 3.3c0 2.275 1.156 4.287 2.92 5.463-1.075-.03-2.087-.33-2.975-.82v.08c0 3.18 2.263 5.838 5.27 6.437-.55.15-1.13.23-1.73.23-.425 0-.83-.044-1.237-.12a6.59 6.59 0 0 0 6.131 4.563 13.17 13.17 0 0 1-8.156 2.813 12.96 12.96 0 0 1-1.569-.094C2.907 28.92 6.356 30 10.063 30c12.075 0 18.68-10.006 18.68-18.68a18.35 18.35 0 0 0-.019-.85c1.28-.92 2.394-2.075 3.275-3.394z"></path></svg></a>
											<?php } ?>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="pglead_ld-expander">
							<div class="pglead_ld-expanderinner">
								<span class="pglead_ld-exclose"></span>
								<div class="pglead_ld-exwrap">
									<h3 class="pglead_ld-exname"><?php echo $item['name']; ?></h3>
									<h4 class="pglead_ld-extitle"><?php echo $item['title']; ?></h4>
									<p class="pglead_ld-excontent"><?php echo $item['description']; ?></p>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>

	<!--Innovated Start Here -->
	<section class="innovate_section">
		<div class="odc-gd__container">
			<div class="innovatedivinner">
				<h2 class="wtcol">Come innovate with us</h2>
				<p class="wtcol">Join our diverse teams working to solve the most <br>challenging problems in asset finance.</p>
				<a href="<?php echo base_url();?>careers" class="odc__btn odc__btn--md odc__btn--primary">View open roles</a>
			</div>
		</div>
	</section>
	<!--Innovated End Here --> 
</div>