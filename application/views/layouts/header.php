<?php
	$current_url = $this->router->fetch_class() . '/' . $this->router->fetch_method();
	$custom_css_list = array( 'leadership/index', 'careers/index', 'platform/index', 'platform/core' );
?>
<!doctype html>
<html lang="en">
<head>
	<?php if ( isset($meta_title) ) { ?>
		<title><?php echo $meta_title; ?></title>
	<?php } ?>
	<?php if ( isset($meta_description) ) { ?>
		<meta name="description" content="<?php echo $meta_description; ?>">
	<?php } ?>
	<?php if ( isset($meta_keyword) ) { ?>
		<meta name="keywords" content="<?php echo $meta_keyword; ?>">
	<?php } ?>
	<?php if ( isset($nofollow) && $nofollow ) { ?>
		<meta name="robots" content="noindex, nofollow" />
	<?php } else { ?>
		<meta name="robots" content="index, follow">		
	<?php } ?>

	<meta http-equiv="Content-Language" content="en_US">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=11; IE=10; IE=9; IE=8; IE=7; IE=EDGE">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="sitelock-site-verification" content="168" />
	<meta name="yandex-verification" content="d7962e7f3953689e">

	<meta http-equiv='cache-control' content='no-cache'>
	<meta http-equiv='expires' content='0'>
	<meta http-equiv='pragma' content='no-cache'>

	<!-- <link rel="prefetch" href="<?= base_url(); ?>assets/images/odessa-partner-banner-bkmenu.jpg"> -->
	<link rel="preload" as="image" href="<?php echo base_url(); ?>assets/images/odessa-partner-banner-bkmenu.webp" imagesrcset="" imagesizes="50vw">

	<!-- Open Graph Tags -->
	<?php if ( isset($og_title) && !empty($og_title) ) { ?>
		<meta property="og:title" content="<?php echo $og_title; ?>">
	<?php } ?>
	<?php if ( isset($og_description) && !empty($og_description) ) { ?>
		<meta property="og:description" content="<?php echo $og_description; ?>">
	<?php } ?>
	<?php if ( isset($og_image) && !empty($og_image) ) { ?>
		<meta property="og:image" content="<?php echo $og_image; ?>">
	<?php } else { ?>
		<meta property="og:image" content="<?php echo base_url(); ?>assets/images/default.jpg">
	<?php } ?>
	<meta property="og:site_name" content="OdessaInc.Com">
	<meta property="og:type" content="website">
	<meta property="og:locale" content="en_US">

	<!-- Twitter Cards -->
	<?php if ( isset($tc_title) && !empty($tc_title) ) { ?>
		<meta property="twitter:title" content="<?php echo $tc_title; ?>">
	<?php } ?>
	<?php if ( isset($tc_description) && !empty($tc_description) ) { ?>
		<meta property="twitter:description" content="<?php echo $tc_description; ?>">
	<?php } ?>
	<?php if ( isset($tc_image) && !empty($tc_image) ) { ?>
		<meta property="twitter:image" content="<?php echo $tc_image; ?>">
	<?php } else { ?>
		<meta property="twitter:image" content="<?php echo base_url(); ?>assets/images/default.jpg">
	<?php } ?>
	<meta property="twitter:site" content="OdessaInc.Com">
	<meta property="twitter:card" content="summary">
	<!-- Canonical URL -->
	<link rel="canonical" href="<?php echo current_url(); ?>" />
	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>favicon.ico">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>favicon.ico">
	<link rel="preload" href="<?php echo base_url(); ?>assets/fonts/MaisonNeue-Book.otf" as="font" type="font/otf" crossorigin>
	<link rel="preload" href="<?php echo base_url(); ?>assets/fonts/MaisonNeue-Bold.otf" as="font" type="font/otf" crossorigin>
	<link rel="stylesheet preload" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css?v=<?php echo time() ?>" as="style" crossorigin />
	<link rel="stylesheet preload" href="<?php echo base_url(); ?>assets/css/bootstrap.css?v=<?php echo time() + 1?>" as="style" crossorigin />
	<link rel="stylesheet preload" href="<?php echo base_url(); ?>assets/css/owl.carousel.css?v=<?php echo time() + 2?>" as="style" crossorigin />
	<link href="<?php echo base_url(); ?>assets/css/buttons.css?v=<?php echo time() + 3?>" rel="stylesheet"  type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/rs6.css?v=<?php echo time() + 4?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css?v=<?php echo time() + 5?>" rel='stylesheet'/>

	<link rel="stylesheet preload" href="<?php echo base_url(); ?>assets/css/style.css?v=<?php echo time() + 6?>"  />
	<link rel="stylesheet preload" href="<?php echo base_url(); ?>assets/css/media.css?v=<?php echo time() + 7?>" />
	
	<?php if ( in_array( $current_url, $custom_css_list ) ) { ?>
		<link rel="stylesheet preload" as="style" href="<?php echo base_url(); ?>assets/css/modular_styles.css" crossorigin />
		<link href="<?php echo base_url(); ?>assets/css/modular_styles.css?v=<?php echo time() + 8?>" rel="stylesheet preload" type="text/css" />
	<?php } ?>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/aos.css?v=<?php echo time() + 9?>" />


	<!-- Google Tag Manager --> 
	<script defer>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.defer=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-PSHM9KW');
	</script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-2.2.1.min.js?v=6001"></script>
	
</head>
<body class="">
	<?php $this->load->view('layouts/navmenu'); ?>