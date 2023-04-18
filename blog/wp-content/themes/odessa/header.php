<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<meta charset="utf-8">
	<?php /*<title>Odessa</title>*/ ?>
	
	<meta name="viewport" content="width=device-width">
	<meta name="yandex-verification" content="d7962e7f3953689e">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
	<link href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/assets/css/media.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/assets/css/cmsstyle.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/assets/css/cmsmedia.css" rel="stylesheet" type="text/css">
	<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery-2.1.1.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.cookieMessage.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/owl.carousel.js"></script> 
	<script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.js"></script> 

	<!-- Google Tag Manager --> 
	<script>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-PSHM9KW');
	</script>
	<!-- End Google Tag Manager -->
	<script>
		$.cookieMessage({
			'mainMessage': 'This website uses cookies to ensure you get the best experience. <a href="<?php echo OD_BASE_URL; ?>privacy-policy">Learn More</a>. ',
			'acceptButton': 'Got It!',
		});
	</script>
	<style>
		#cookie-msg {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			position: fixed;
			bottom: -100%;
			width: 100%;
			text-align: center;
			padding: 20px;
			background-color: rgb(137, 212, 225);
			transition: all 0.3s ease-out 0s;
			color: rgb(42, 45, 54);
			font-family: MaisonNeue-Book;
			font-size: 15px;
			z-index: 99999;
		}
		
		#cookie-msg span a {
			color: rgb(42, 45, 54);
			text-decoration: underline;
		}

		#cookie-msg a.btn-aceptar {
			color: rgb(42, 45, 54);
			text-decoration: none;
			padding: 8px 0px;
			margin: 15px 0 0 0;
			border: 2px solid rgb(0, 117, 162);
			border-radius: 0px;
			background-color: transparent;
			font-size: 15px;
			min-width: 120px;
			display: inline-block;
		}

		@media only screen and (min-width: 767px) {
			#cookie-msg {
				flex-direction: row;
				font-size: 16px;
			}
			
			#cookie-msg a.btn-aceptar {
				margin: 0 0 0 20px;
				min-width: 150px;
			}
		}
	</style>
</head>
<body data-gr-c-s-loaded="true">
	<?php wp_body_open(); ?>
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PSHM9KW" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) --> 

	<!--Header Start Here-->
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar_wrapper">
			<a class="navbar-brand" href="<?php echo OD_BASE_URL; ?>">Odessa</a>
			<div id="nav-icon1">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<ul class="nav navbar-nav navbar-right alwaysvisiblemenu">
				<li><a href="<?php echo OD_BASE_URL; ?>lets-talk">Let's talk</a></li>
				<li><a href="https://odessainc.force.com/customer/" target="_blank">Log in</a></li>
			</ul>
			<div id="navbar" class="navbar-collapse collapse  js-navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown mega-dropdown"><a href="javascript:void(0)" class="dropdown-toggle hideview" data-toggle="dropdown">Platform</a> 
						<!--Services Menu Start Here-->
						<ul class="dropdown-menu mega-dropdown-menu">
							<div class="container pos">
								<div class="servicemenuwrap">
									<div class="menuwrap">
										<div class="row eqWrap equalHMWrap clearfix">
											<div class="col-xs-6 col-sm-3 menuwd20">
												<ul>
													<li class="category-dot category-cx">Asset Finance</li>
													<li><a href="<?php echo OD_BASE_URL; ?>platform/core">Odessa Core</a></li>
													<li class="pdl"><a href="<?php echo OD_BASE_URL; ?>platform/core">Origination</a></li>
													<li class="pdl"><a href="<?php echo OD_BASE_URL; ?>platform/core">Servicing</a></li>
													<li class="pdl"><a href="<?php echo OD_BASE_URL; ?>platform/core">Lease Management</a></li>
													<li class="pdl"><a href="<?php echo OD_BASE_URL; ?>platform/core">Loan Management</a></li>
												</ul>
												<ul>
													<li class="category-dot category-bx">Developer Tools</li>
													<li><a href="<?php echo OD_BASE_URL; ?>platform/developer-tools">Odessa Build</a></li>
													<li><a href="<?php echo OD_BASE_URL; ?>platform/developer-tools">Odessa Test</a></li>
												</ul>
											</div>
											<div class="col-xs-6 col-sm-3 menuwd20">
												<ul>
													<li class="category-dot category-bxd">Omnichannel + Mobility</li>
													<li><a href="<?php echo OD_BASE_URL; ?>platform">Customer Portal</a></li>
													<li><a href="<?php echo OD_BASE_URL; ?>platform">Partner Portal</a></li>
													<li><a href="<?php echo OD_BASE_URL; ?>platform">Odessa Mobility</a></li>
												</ul>
												<ul>
													<li class="category-dot category-skb">Data Intelligence</li>
													<li><a href="<?php echo OD_BASE_URL; ?>platform">Odessa Reports</a></li>
													<li><a href="<?php echo OD_BASE_URL; ?>platform">Data Warehousing</a></li>
												</ul>
											</div>
											<div class="col-xs-6 col-sm-3 menuwd20">
												<ul>
													<li class="category-dot category-bx">Cloud Services</li>
													<li><a href="<?php echo OD_BASE_URL; ?>cloud">App Monitoring</a></li>
													<li><a href="<?php echo OD_BASE_URL; ?>cloud">Security Monitoring</a></li>
													<li><a href="<?php echo OD_BASE_URL; ?>cloud">Autoscaling</a></li>
												</ul>
											</div>
											<div class="col-xs-6 col-sm-3 menuwd20 mnmargintop">
												<ul>
													<li class="category-dot category-bx">LEARN MORE</li>
													<li><a href="<?php echo OD_BASE_URL; ?>design-principles">Design Principles</a></li>
													<li><a href="<?php echo OD_BASE_URL; ?>platform/developer-tools">Odessa APIs</a></li>
													<li><a href="<?php echo OD_BASE_URL; ?>platform/developer-tools">Workflow</a></li>
													<li><a href="<?php echo OD_BASE_URL; ?>platform/developer-tools">Security + Compliance</a></li>
													<li><a href="<?php echo OD_BASE_URL; ?>platform/developer-tools">Integrations</a></li>
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
					<li class="dropdown mega-dropdown"><a href="javascript:void(0);" class="dropdown-toggle hideview"
                data-toggle="dropdown"> Why Odessa</a>
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
															<li><a href="<?php echo OD_BASE_URL; ?>design-principles">Why Odessa</a></li>
															<li><a href="<?php echo OD_BASE_URL; ?>design-principles">Design Principles</a></li>
														</ul>
													</div>
													<div class="col-xs-6 col-sm-6">
														<ul>
															<li class="category-dot category-bxd">LEARN MORE</li>
															<li><a href="<?php echo OD_BASE_URL; ?>platform/core">Pay Per Use</a></li>
															<li><a href="<?php echo OD_BASE_URL; ?>platform/core">Business Agility</a></li>
															<li><a href="<?php echo OD_BASE_URL; ?>cloud">Migrate to Cloud</a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-7">
												<div class="row eqWrap equalHMWrap clearfix">
													<div class="col-sm-7 col-md-8 colmenubg">
														<div class="menuimgbox"> <img src="<?php echo OD_BASE_URL; ?>assets/images/covid_distance.jpg" alt="" />
															<div class="imgdownlink"> <a href="https://odessainc.com/blog/reimagined-technology-role-during-covid/">From the blog: Digital Transformation in the time of COVID</a> </div>
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
					<li class="dropdown mega-dropdown"><a href="javascript:void(0)" class="dropdown-toggle hideview"
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
															<li><a href="<?php echo OD_BASE_URL; ?>company">About Odessa</a></li>
															<!-- <li><a href="<?php echo OD_BASE_URL; ?>leadership">Leadership</a></li> -->
															<li><a href="<?php echo OD_BASE_URL; ?>careers">Careers</a></li>
														</ul>
													</div>
													<div class="col-xs-6 col-sm-6">
														<ul>
															<li class="category-dot category-bxd">Engage with us</li>
															<li><a href="<?php echo OD_BASE_URL; ?>newsroom">Newsroom</a></li>
															<li><a href="<?php echo OD_BASE_URL; ?>newsroom">Events</a></li>
															<li><a href="<?php echo OD_BASE_URL; ?>newsroom">Resources</a></li>
															<li><a href="<?php echo OD_BASE_URL; ?>lets-talk">Contact Us</a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-7">
												<div class="row eqWrap equalHMWrap clearfix">
													<div class="col-sm-7 col-md-8 colmenubg">
														<div class="menuimgbox"> <img src="<?php echo OD_BASE_URL; ?>assets/images/menu_company_view.jpg" alt="" />
															<div class="imgdownlink"> <a href="<?php echo OD_BASE_URL; ?>careers">We’re hiring! Come join us</a> </div>
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
							<li><a class="active" href="javascript:void(0)" onclick="tabBx('platformmenu')">Platform</a></li>
							<li><a href="javascript:void(0)" onclick="tabBx('whyodessamenu')">Why Odessa</a></li>
							<li><a href="javascript:void(0)" onclick="tabBx('companymenu')">Company</a></li>
							<li><a href="javascript:void(0)">Let's Talk</a></li>
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
										<li><a href="<?php echo OD_BASE_URL; ?>platform/core">Odessa Core</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>platform/core">Origination</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>platform/core">Servicing</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>platform/core">Lease Management</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>platform/core">Loan Management</a></li>
									</ul>
								</div>
								<div class="col-xs-6">
									<ul>
										<li>Developer Tools</li>
										<li><a href="<?php echo OD_BASE_URL; ?>platform/developer-tools">Odessa Build</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>platform/developer-tools">Odessa Test</a></li>
									</ul>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-xs-6">
									<ul>
										<li>Omnichannel + Mobility</li>
										<li><a href="<?php echo OD_BASE_URL; ?>platform">Customer Portal</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>platform">Partner Portal</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>platform">Odessa Mobility</a></li>
									</ul>
								</div>
								<div class="col-xs-6">
									<ul>
										<li>Data Intelligence</li>
										<li><a href="<?php echo OD_BASE_URL; ?>platform">Odessa Reports</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>platform">Data Warehousing</a></li>
									</ul>
								</div>
							</div>
							<div class="row clearfix">
								<div class="col-xs-6">
									<ul>
										<li>Cloud Services</li>
										<li><a href="<?php echo OD_BASE_URL; ?>cloud">App Monitoring</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>cloud">Security Monitoring</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>cloud">Autoscaling</a></li>
									</ul>
								</div>
								<div class="col-xs-6">
									<ul>
										<li>LEARN MORE</li>
										<li><a href="<?php echo OD_BASE_URL; ?>design-principles">Design Principles</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>platform/developer-tools">Odessa APIs</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>platform/developer-tools">Workflow</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>platform/developer-tools">Security + Compliance</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>platform/developer-tools">Integrations</a></li>
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
										<li><a href="<?php echo OD_BASE_URL; ?>design-principles"">Why Odessa</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>design-principles">Design Principles</a></li>
									</ul>
								</div>
								<div class="col-xs-6">
									<ul>
										<li>LEARN MORE</li>
										<li><a href="<?php echo OD_BASE_URL; ?>platform/core">Pay Per Use</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>platform/core">Business Agility</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>cloud">Migrate to Cloud</a></li>
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
										<li><a href="<?php echo OD_BASE_URL; ?>company">About Odessa</a></li>
										<!-- <li><a href="<?php echo OD_BASE_URL; ?>leadership">Leadership</a></li> -->
										<li><a href="<?php echo OD_BASE_URL; ?>careers">Careers</a></li>
									</ul>
								</div>
								<div class="col-xs-6">
									<ul>
										<li>Engage with us</li>
										<li><a href="<?php echo OD_BASE_URL; ?>newsroom">Newsroom</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>newsroom">Events</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>newsroom">Resources</a></li>
										<li><a href="<?php echo OD_BASE_URL; ?>lets-talk">Contact Us</a></li>
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

<!--Header End Here-->
<div id="wrapper">
