<?php
	$current_url = $this->router->fetch_class() . '/' . $this->router->fetch_method();
	$custom_css_list = array( 'leadership/index', 'careers/index', 'platform/index', 'platform/core' );
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $page_title; ?></title>
	<meta name="description" content="<?php echo $description; ?>"/>
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<link rel="canonical" href="<?php echo $canonical_tag; ?>"/>
	<meta name="robots" content="index, follow"/>
	<meta name="language" content="english"/>
	<meta name="viewport" content="width=device-width" />
	<link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon" />
	<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css?v=<?php echo time() ?>"  rel="stylesheet preload" as="style" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css?v=<?php echo time() + 1?>" rel="stylesheet preload" as="style" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/owl.carousel.css?v=<?php echo time() + 2?>" rel="stylesheet preload" as="style" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/style.css?v=<?php echo time() + 3?>" rel="stylesheet"  type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/media.css?v=<?php echo time() + 4?>" rel="stylesheet"  type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/buttons.css?v=<?php echo time() + 5?>" rel="stylesheet"  type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/rs6.css?v=<?php echo time() + 6?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css?v=<?php echo time() + 7?>" rel='stylesheet'/>
	<link href="<?php echo base_url(); ?>assets/css/search.css?v=<?php echo time() + 7 ?>" rel='stylesheet'/>

	<meta name="sitelock-site-verification" content="168" />
	<meta name="yandex-verification" content="d7962e7f3953689e">

	<!-- <?php if ( in_array( $current_url, $custom_css_list ) ) { ?>
		<link href="<?php echo base_url(); ?>assets/css/modular_styles.css" rel="stylesheet preload" as="style" type="text/css" />
	<?php } ?> -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js?v=6001"></script> 
	<script src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script> 
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.cookieMessage.min.js"></script> 
	<script src="<?php echo base_url(); ?>assets/js/rbtools.min.js"></script> 
	<script src="<?php echo base_url(); ?>assets/js/rs6.min.js"></script>
	<script type="text/javascript">
		$.cookieMessage({
			'mainMessage': 'This website uses cookies to ensure you get the best experience. <a href="<?php echo base_url(); ?>privacy-policy" >Learn More</a>. ',
			'acceptButton': 'Got It!',
		});
	</script>
	<script type="text/javascript">
		if(typeof revslider_showDoubleJqueryError === "undefined") {
			function revslider_showDoubleJqueryError(sliderID) {
				var err = "<div class='rs_error_message_box'>";
				err += "<div class='rs_error_message_oops'>Oops...</div>";
				err += "<div class='rs_error_message_content'>";
				err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
				err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
				err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
				err += "</div>";
				err += "</div>";
				var slider = document.getElementById(sliderID); slider.innerHTML = err; slider.style.display = "block";
			}
		}
	</script>
	<script type="text/javascript">
		var	revapi35,
			tpj;
		jQuery(function() {
			tpj = jQuery;
			revapi35 = tpj("#rev_slider_35_1")
			if(revapi35==undefined || revapi35.revolution == undefined){
				revslider_showDoubleJqueryError("rev_slider_35_1");
			}else{
				revapi35.revolution({
					duration:"0ms",
					visibilityLevels:"1240,1024,778,480",
					gridwidth:"1920,1024,778,480",
					gridheight:"900,600,800,700",
					minHeight:"500px",
					maxHeight:"800px",
					perspective:600,
					perspectiveType:"isometric",
					editorheight:"900,600,800,700",
					responsiveLevels:"1240,1024,778,480",
					progressBar:{disableProgressBar:true},
					navigation: {
						onHoverStop:false
					},
					fallbacks: {
						allowHTML5AutoPlayOnAndroid:true
					},
				});
			}

		});
	</script>
	<!-- Google Tag Manager --> 
	<script>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-PSHM9KW');
	</script>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PSHM9KW" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->
	<!--Header Start Here-->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar_wrapper"> <div class="nav-flex"> <a class="navbar-brand" href="<?php echo base_url(); ?>">Odessa</a>
			<div id="nav-icon1"> <span></span> <span></span> <span></span> </div>

			<div class="mobile-men"> 
                    <i class="fa fa-search search" aria-hidden="true"></i>
                    <div class="search-li"><section role="search" data-ss360="true" class="search-box">
                        <input type="search" id="searchBox" placeholder="Search…">
                        <button id="searchButton"></button>
                       
                     </section>
                     
                    </div>
                </div>
				 </div>
				<ul class="nav navbar-nav navbar-right alwaysvisiblemenu">
				<li><a href="<?php echo base_url(); ?>blog">Blog</a></li>
					<li><a href="<?php echo base_url(); ?>lets-talk">Let's talk</a></li>
					<li><a href="https://odessainc.force.com/customer/" target="_blank">Log in</a></li>
					<li> 
                        <i class="fa fa-search search" aria-hidden="true"></i>
                    
                    </li>
                    <li class="search-li"><section role="search" data-ss360="true" class="search-box">
                        <input type="search" id="searchBox" placeholder="Search…">
                        <button id="searchButton"></button>
                       
                     </section>
                     
                    </li>
				</ul>
				<div class="search-overlay"> <div class="close-search"> <i class="fa fa-close close" aria-hidden="true"></i></div></div>
				<div id="navbar" class="navbar-collapse collapse  js-navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown mega-dropdown"><a href="#"  class="dropdown-toggle hideview" data-toggle="dropdown">Platform</a> 
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
												<li class="category-dot category-skb"><a href="<?php echo base_url(); ?>xaas-everything-as-a-service" class="xaas-menu-color" style="color:#000">As-a-Service</a></li>
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
														<li><a href="<?php echo base_url(); ?>platform">Odessa Reports</a></li>
														<li><a href="<?php echo base_url(); ?>platform">Data Warehousing</a></li>
													</ul>
												</div>
												<div class="col-xs-6 col-sm-3 menuwd20">
													<ul>
														<li class="category-dot category-skb">Cloud Services</li>
														<li><a href="<?php echo base_url(); ?>cloud">App Monitoring</a></li>
														<li><a href="<?php echo base_url(); ?>cloud">Security Monitoring</a></li>
														<li><a href="<?php echo base_url(); ?>cloud">Autoscaling</a></li>
													</ul>
													<ul>
														<li class="category-dot category-cx">Developer Tools</li>
														<li><a href="<?php echo base_url(); ?>platform/developer-tools">Odessa Build</a></li>
														<li><a href="<?php echo base_url(); ?>platform/developer-tools">Odessa Test</a></li>
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
						<li class="dropdown mega-dropdown"><a href="#"  class="dropdown-toggle hideview"
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
																<li><a href="<?php echo base_url(); ?>xaas-everything-as-a-service">Pay Per Use</a></li>
																<li><a href="<?php echo base_url(); ?>platform/core">Business Agility</a></li>
																<li><a href="<?php echo base_url(); ?>cloud">Migrate to Cloud</a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-md-7">
													<div class="row eqWrap equalHMWrap clearfix">
														<div class="col-sm-7 col-md-8 colmenubg">
															<div class="menuimgbox"> <img src="<?php echo base_url(); ?>assets/images/covid_distance.jpg" alt="Technology role during covid" />
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
						<li class="dropdown mega-dropdown"><a href="#"  class="dropdown-toggle hideview"
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
																<li><a href="<?php echo base_url(); ?>our-people">Our People</a></li>
																<li><a href="<?php echo base_url(); ?>careers">Careers</a></li>
															</ul>
														</div>
														<div class="col-xs-6 col-sm-6">
															<ul>
																<li class="category-dot category-bxd">Engage with us</li>
																<li><a href="<?php echo base_url(); ?>newsroom">Newsroom</a></li>
																<!-- <li><a href="<?php echo base_url(); ?>newsroom">Events</a></li> -->
																<li><a href="<?php echo base_url(); ?>newsroom">Resources</a></li>
																<li><a href="<?php echo base_url(); ?>lets-talk">Contact Us</a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-md-7">
													<div class="row eqWrap equalHMWrap clearfix">
														<div class="col-sm-7 col-md-8 colmenubg">
															<div class="menuimgbox"> <img src="<?php echo base_url(); ?>assets/images/menu_company_view.jpg" alt="Odessa company view" />
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
							<li><a class="active" href="<?php echo base_url(); ?>platform"  onclick="tabBx('platformmenu')">Platform</a></li>
								<li><a href="<?php echo base_url(); ?>design-principles"  onclick="tabBx('whyodessamenu')">Why Odessa</a></li>
								<li><a href="<?php echo base_url(); ?>company"  onclick="tabBx('companymenu')">Company</a></li>
								<li><a href="<?php echo base_url(); ?>lets-talk">Let's Talk</a></li>
							</ul>
						</div>
						<div class="menubtmline"></div>
						<!--Platform Menu Start Here-->
						<div id="platformmenu" class="servicemenuwrap mobileviewmenu" style="display:block">
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
                                            <li><a href="<?php echo base_url(); ?>xaas-everything-as-a-service" class="service"><b>As-a-Service</b></a></li>
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
											<li><a href="<?php echo base_url(); ?>our-people">Our People</a></li>
											<li><a href="<?php echo base_url(); ?>careers">Careers</a></li>
										</ul>
									</div>
									<div class="col-xs-6">
										<ul>
											<li>Engage with us</li>
											<li><a href="<?php echo base_url(); ?>newsroom">Newsroom</a></li>
											<!-- <li><a href="<?php echo base_url(); ?>newsroom">Events</a></li> -->
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