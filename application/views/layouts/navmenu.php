<!-- Nav Menu -->
<nav class="navbar navbar-default navbar-fixed-top navbar--js">
<?php $is_home = $this->router->fetch_class() === 'home' ? true : false;
if($is_home){?>
	<!-- <div class="t-alert-covid bg-alert">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="covid-alert">
						<div class="alert  alert-dismissible fade in ">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<p class="covid-alert__para text-center">
                                                        Discover our innovative and intuitive UI experience called Neos experience. Available now in the Spring ’22 release. 🚀 
                                                            <a target="_blank" href="https://www.odessainc.com/blog/odessa-accelerates-innovation-with-neos-unveils-new-ui-for-spring-22-release/" class="covid-alert__link alert-link">Learn more<i class="fa fa-angle-right"></i></a>
                                                        </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
<?php } ?> 
	<div class="container">
		
		<div class="navbar_wrapper row"> <a class="navbar-brand" href="<?php echo base_url(); ?>">Odessa</a>
			<div id="nav-icon1"> <span></span> <span></span> <span></span> </div>
			<ul class="nav navbar-nav navbar-right alwaysvisiblemenu">
				<li><a href="<?php echo base_url(); ?>lets-talk">Let's talk</a></li>
				<li><a href="https://odessainc.force.com/customer/" target="_blank">Log in</a></li>
			</ul>
			<div id="navbar" class="navbar-collapse collapse  js-navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown mega-dropdown"><a href="#" rel="nofollow" class="dropdown-toggle hideview" data-toggle="dropdown">Platform</a> 
						<!--Services Menu Start Here-->
						<ul class="dropdown-menu mega-dropdown-menu">
							<div class="container pos">
								<div class="servicemenuwrap">
									<div class="menuwrap">
										<div class="row eqWrap equalHMWrap clearfix">
											<div class="col-xs-6 col-sm-3 menuwd20">
												<ul>
													<li class="category-dot category-cx">Asset Finance</li>
													<li><a href="<?php echo base_url(); ?>platform/core">Odessa Core</a></li>
													<li class="pdl"><a href="<?php echo base_url(); ?>platform/core">Origination</a></li>
													<li class="pdl"><a href="<?php echo base_url(); ?>platform/core">Servicing</a></li>
													<li class="pdl"><a href="<?php echo base_url(); ?>platform/core">Lease Management</a></li>
													<li class="pdl"><a href="<?php echo base_url(); ?>platform/core">Loan Management</a></li>
												</ul>
												<ul>
													<li class="category-dot category-bx">Developer Tools</li>
													<li><a href="<?php echo base_url(); ?>platform/developer-tools">Odessa Build</a></li>
													<li><a href="<?php echo base_url(); ?>platform/developer-tools">Odessa Test</a></li>
												</ul>
											</div>
											<div class="col-xs-6 col-sm-3 menuwd20">
												<ul>
													<li class="category-dot category-bxd">Omnichannel + Mobility</li>
													<li><a href="<?php echo base_url(); ?>platform">Customer Portal</a></li>
													<li><a href="<?php echo base_url(); ?>platform">Partner Portal</a></li>
													<li><a href="<?php echo base_url(); ?>platform">Odessa Mobility</a></li>
												</ul>
												<ul>
													<li class="category-dot category-skb">Data Intelligence</li>
													<li><a href="<?php echo base_url(); ?>platform">Odessa Reportbuilder</a></li>
													<li><a href="<?php echo base_url(); ?>platform">Odessa Insights</a></li>
												</ul>
											</div>
											<div class="col-xs-6 col-sm-3 menuwd20">
												<ul>
													<li class="category-dot category-bx">Cloud Services</li>
													<li><a href="<?php echo base_url(); ?>cloud">App Monitoring</a></li>
													<li><a href="<?php echo base_url(); ?>cloud">Security Monitoring</a></li>
													<li><a href="<?php echo base_url(); ?>cloud">Autoscaling</a></li>
												</ul>
											</div>
											<div class="col-xs-6 col-sm-3 menuwd20 mnmargintop">
												<ul>
													<li class="category-dot category-bx">LEARN MORE</li>
													<li><a href="<?php echo base_url(); ?>design-principles">Design Principles</a></li>
													<li><a href="<?php echo base_url(); ?>platform/developer-tools">Odessa APIs</a></li>
													<li><a href="<?php echo base_url(); ?>platform/developer-tools">Workflow</a></li>
													<li><a href="<?php echo base_url(); ?>platform/developer-tools">Security + Compliance</a></li>
													<li><a href="<?php echo base_url(); ?>platform/developer-tools">Integrations</a></li>
												</ul>
											</div>
											<div class="col-xs-6 col-sm-3 menuwd20 colmenubg">
												<div class="headerchildnav"> <a href="https://odessainc.force.com/customer/s/" target="blank">Customer Community</a> <a href="https://odessainc.talentlms.com/" target="blank">Odessa University</a> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</ul>
						<!--Services Menu End Here--> 
					</li>
					<li class="dropdown mega-dropdown"><a href="#" rel="nofollow" class="dropdown-toggle hideview"
				data-toggle="dropdown">Why Odessa</a>
						<ul class="dropdown-menu mega-dropdown-menu">
							<div class="container pos">
								<div class="servicemenuwrap">
									<div class="menuwrap">
										<div class="row clearfix">
											<div class="col-sm-6 col-md-5">
												<div class="row clearfix">
													<div class="col-xs-6 col-sm-6">
														<ul>
															<li class="category-dot category-bx">Get to know us</li>
															<li><a href="<?php echo base_url(); ?>design-principles">Why Odessa</a></li>
															<li><a href="<?php echo base_url(); ?>design-principles">Design Principles</a></li>
														</ul>
													</div>
													<div class="col-xs-6 col-sm-6">
														<ul>
															<li class="category-dot category-bxd">LEARN MORE</li>
															<li><a href="<?php echo base_url(); ?>platform/core">Pay Per Use</a></li>
															<li><a href="<?php echo base_url(); ?>platform/core">Business Agility</a></li>
															<li><a href="<?php echo base_url(); ?>cloud">Migrate to Cloud</a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-7">
												<div class="row eqWrap equalHMWrap clearfix">
													<div class="col-sm-7 col-md-8 colmenubg">
														<div class="menuimgbox"> 
															<picture>
																<source data-srcset="<?= base_url(); ?>assets/images/covid_distance.webp" type="image/webp">
																
																<source data-srcset="<?= base_url(); ?>assets/images/covid_distance.webp" type="image/webp">
																<img data-src="<?= base_url(); ?>assets/images/covid_distance.webp" alt="Technology role during covid" class="lazyload"/>
																
															</picture>

															<div class="imgdownlink"> <a href="<?php echo base_url(); ?>blog/reimagined-technology-role-during-covid//">From the blog: Digital Transformation in the time of COVID</a> </div>
														</div>
													</div>
													<div class="col-sm-5 col-md-4 colmenubg">
														<div class="headerchildnav lzer"> <a href="https://odessainc.force.com/customer/s/" target="blank">Customer Community</a> <a href="https://odessainc.talentlms.com/" target="blank">Odessa University</a> </div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</ul>
					</li>
					<li class="dropdown mega-dropdown"><a href="#" rel="nofollow" class="dropdown-toggle hideview"
			  data-toggle="dropdown">Company</a>
						<ul class="dropdown-menu mega-dropdown-menu">
							<div class="container pos">
								<div class="servicemenuwrap">
									<div class="menuwrap">
										<div class="row clearfix">
											<div class="col-sm-6 col-md-5">
												<div class="row clearfix">
													<div class="col-xs-6 col-sm-6">
														<ul>
															<li class="category-dot category-bx">Company</li>
															<li><a href="<?php echo base_url(); ?>company">About Odessa</a></li>
															<li><a href="<?php echo base_url(); ?>leadership">Leadership</a></li>
															<li><a href="<?php echo base_url(); ?>careers">Careers</a></li>
														</ul>
													</div>
													<div class="col-xs-6 col-sm-6">
														<ul>
															<li class="category-dot category-bxd">Engage with us</li>
															<li><a href="<?php echo base_url(); ?>newsroom">Newsroom</a></li>
															<li><a href="<?php echo base_url(); ?>newsroom">Events</a></li>
															<li><a href="<?php echo base_url(); ?>newsroom">Resources</a></li>
															<li><a href="<?php echo base_url(); ?>lets-talk">Contact Us</a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-7">
												<div class="row eqWrap equalHMWrap clearfix">
													<div class="col-sm-7 col-md-8 colmenubg">
														<div class="menuimgbox"> 
															<picture>
																<source data-srcset="<?= base_url(); ?>assets/images/menu_company_view.webp" type="image/webp">
																
																<source data-srcset="<?= base_url(); ?>assets/images/menu_company_view.webp" type="image/webp">
																<img data-src="<?= base_url(); ?>assets/images/menu_company_view.webp" alt="Odessa company view" class="lazyload"/>
																
															</picture>
															<div class="imgdownlink"> <a href="<?php echo base_url(); ?>careers">We’re hiring! Come join us</a> </div>
														</div>
													</div>
													<div class="col-sm-5 col-md-4 colmenubg">
														<div class="headerchildnav lzer"> <a href="https://odessainc.force.com/customer/s/" target="blank">Customer Community</a> <a href="https://odessainc.talentlms.com/" target="blank">Odessa University</a> </div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</ul>
					</li>
				</ul>
			</div>

			<!--Mobile Navigation Start Here-->
			<div class="menuviewwrap">
				<div class="container">
					<div class="mobile_view_menu">
						<ul>
							<li><a class="active" href="#" rel="nofollow" onclick="tabBx('platformmenu')">Platform</a></li>
							<li><a href="#" rel="nofollow" onclick="tabBx('whyodessamenu')">Why Odessa</a></li>
							<li><a href="#" rel="nofollow" onclick="tabBx('companymenu')">Company</a></li>
							<li><a href="<?php echo base_url(); ?>lets-talk">Let's Talk</a></li>
						</ul>
					</div>
					<div class="menubtmline"></div>
					<!--Platform Menu Start Here-->
					<div id="platformmenu" class="servicemenuwrap mobileviewmenu"  style="display:block">
						<div class="menuwrap">
							<div class="row clearfix">
								<div class="col-xs-6">
									<ul>
										<li>Asset Finance</li>
										<li><a href="<?php echo base_url(); ?>platform/core">Odessa Core</a></li>
										<li><a href="<?php echo base_url(); ?>platform/core">Origination</a></li>
										<li><a href="<?php echo base_url(); ?>platform/core">Servicing</a></li>
										<li><a href="<?php echo base_url(); ?>platform/core">Lease Management</a></li>
										<li><a href="<?php echo base_url(); ?>platform/core">Loan Management</a></li>
									</ul>
								</div>
								<div class="col-xs-6">
									<ul>
										<li>Developer Tools</li>
										<li><a href="<?php echo base_url(); ?>platform/developer-tools">Odessa Build</a></li>
										<li><a href="<?php echo base_url(); ?>platform/developer-tools">Odessa Test</a></li>
									</ul>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-xs-6">
									<ul>
										<li>Omnichannel + Mobility</li>
										<li><a href="<?php echo base_url(); ?>platform">Customer Portal</a></li>
										<li><a href="<?php echo base_url(); ?>platform">Partner Portal</a></li>
										<li><a href="<?php echo base_url(); ?>platform">Odessa Mobility</a></li>
									</ul>
								</div>
								<div class="col-xs-6">
									<ul>
										<li>Data Intelligence</li>
										<li><a href="<?php echo base_url(); ?>platform">Odessa Reports</a></li>
										<li><a href="<?php echo base_url(); ?>platform">Data Warehousing</a></li>
									</ul>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-xs-6">
									<ul>
										<li>Cloud Services</li>
										<li><a href="<?php echo base_url(); ?>cloud">App Monitoring</a></li>
										<li><a href="<?php echo base_url(); ?>cloud">Security Monitoring</a></li>
										<li><a href="<?php echo base_url(); ?>cloud">Autoscaling</a></li>
									</ul>
								</div>
								<div class="col-xs-6">
									<ul>
										<li>LEARN MORE</li>
										<li><a href="<?php echo base_url(); ?>design-principles">Design Principles</a></li>
										<li><a href="<?php echo base_url(); ?>platform/developer-tools">Odessa APIs</a></li>
										<li><a href="<?php echo base_url(); ?>platform/developer-tools">Workflow</a></li>
										<li><a href="<?php echo base_url(); ?>platform/developer-tools">Security + Compliance</a></li>
										<li><a href="<?php echo base_url(); ?>platform/developer-tools">Integrations</a></li>
									</ul>
								</div>
							</div>
							<div class="headerchildnav"> <a href="https://odessainc.force.com/customer/s/" target="blank">Customer Community</a> <a href="https://odessainc.talentlms.com/" target="blank">Odessa University</a> </div>
						</div>
					</div>
					<!--Platform Menu End Here--> 

					<!--Why Odessa Menu Start Here-->
					<div id="whyodessamenu" class="servicemenuwrap mobileviewmenu">
						<div class="menuwrap">
							<div class="row clearfix">
								<div class="col-xs-6">
									<ul>
										<li>Get to know us</li>
										<li><a href="<?php echo base_url(); ?>design-principles">Why Odessa</a></li>
										<li><a href="<?php echo base_url(); ?>design-principles">Design Principles</a></li>
									</ul>
								</div>
								<div class="col-xs-6">
									<ul>
										<li>LEARN MORE</li>
										<li><a href="<?php echo base_url(); ?>platform/core">Pay Per Use</a></li>
										<li><a href="<?php echo base_url(); ?>platform/core">Business Agility</a></li>
										<li><a href="<?php echo base_url(); ?>cloud">Migrate to Cloud</a></li>
									</ul>
								</div>
							</div>
							<div class="headerchildnav"> <a href="https://odessainc.force.com/customer/s/" target="blank">Customer Community</a> <a href="https://odessainc.talentlms.com/" target="blank">Odessa University</a> </div>
						</div>
					</div>
					<!--Why Odessa Menu End Here--> 

					<!--Company Menu Start Here-->
					<div id="companymenu" class="servicemenuwrap mobileviewmenu">
						<div class="menuwrap">
							<div class="row clearfix">
								<div class="col-xs-6">
									<ul>
										<li>Company</li>
										<li><a href="<?php echo base_url(); ?>company">About Odessa</a></li>
										<li><a href="<?php echo base_url(); ?>leadership">Leadership</a></li>
										<li><a href="<?php echo base_url(); ?>careers">Careers</a></li>
									</ul>
								</div>
								<div class="col-xs-6">
									<ul>
										<li>Engage with us</li>
										<li><a href="<?php echo base_url(); ?>newsroom">Newsroom</a></li>
										<li><a href="<?php echo base_url(); ?>newsroom">Events</a></li>
										<li><a href="<?php echo base_url(); ?>newsroom">Resources</a></li>
										<li><a href="<?php echo base_url(); ?>lets-talk">Contact Us</a></li>
									</ul>
								</div>
							</div>
							<div class="headerchildnav"> <a href="https://odessainc.force.com/customer/s/" target="blank">Customer Community</a> <a href="https://odessainc.talentlms.com/" target="blank">Odessa University</a> </div>
						</div>
					</div>
				</div>
			</div>
			<!--Mobile Navigation End Here--> 
		</div>
	</div>
</nav>