<html lang="en-US">
<!--Google analytics code-->
<script>
(function (i, s, o, g, r, a, m) {
i['GoogleAnalyticsObject'] = r;
i[r] = i[r] || function () {
(i[r].q = i[r].q || []).push(arguments)
}, i[r].l = 1 * new Date();
a = s.createElement(o), m = s.getElementsByTagName(o)[0];
a.async = 1;
a.src = g;
m.parentNode.insertBefore(a, m)
})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-39757434-1', 'auto');
ga('send', 'pageview');
</script>
<!--End of Google analytics code-->
<meta property="og:title" content="Title" />
<meta property="og:description" content="Des" />
<meta property="og:image" content="Image URL" />
<meta property="og:type" content="Event" />
<meta property="og:site_name" content="Odessa" />
<meta property="og:url" content="Page URL" />
<meta property="twitter:title" content="Title" />
<meta property="twitter:description" content="Des" />
<meta property="twitter:image:src" content="image URL" />

<?php $is_home = $this->uri->segment(1);?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="keywords" content="<?php echo $keywords; ?>"/>
<meta name="description" content="<?php echo $description; ?>"/>
<link rel="canonical" href="<?php echo $canonical; ?>" />

<link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico"  type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon" />
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/media.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/component.css" rel="stylesheet" type="text/css">
<!--<link href="<?php echo base_url(); ?>assets/css/default.css" rel="stylesheet" type="text/css">-->
<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>assets/js/modernizr.custom.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>
<script src="<?php echo base_url(); ?>assets/js/masonry.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/imagesloaded.js"></script>
<script src="<?php echo base_url(); ?>assets/js/classie.js"></script>
<script src="<?php echo base_url(); ?>assets/js/AnimOnScroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/jquery.fancybox.min.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/source/jquery.fancybox.min.css?v=2.1.5" media="screen" />

<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="<?php echo base_url(); ?>assets/source/helpers/jquery.fancybox-buttons.min.js?v=1.0.5"></script>
</head>

<body>
<div id="wrapper"> 
  <!--Header Section Start Here-->
  <nav class="navbar navbar-default navbar-fixed-top <?php echo($is_home=='')?'':'innerpg'?>">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url();?>">Innovate logo</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse <?php echo($is_home=='')?'':'hide-text'?>">
        <ul class="nav navbar-nav navbar-right">
          <li>Sign up for updates on innovate >></li>
        </ul>
      </div>
      <a class="regbtns <?php echo($is_home=='')?'':'hide-text'?>" href="#signup"><div class="regheaderbtn">Join the list</div></a>
    </div>
  </nav>
  <!--Header Section End Here--> 
