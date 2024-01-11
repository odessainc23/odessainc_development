
<footer class="footer-main">
	<div class="container">
		<div class="footer_menuwr clearfix">
			<div  class=" footer_li_wrap mobile_view_footer">
				<h4>Get Started</h4>
				<p>If you're considering Odessa to transform your asset finance business or need more platform information, we're here to help.</p>
				<h4 class="footer_li_heading"><a href="tel:888-683-2484">+1 888-683-2484</a></h4>
			</div>
			<div class="footer_li_wrap">
				<h4>Platform</h4>
				<ul>
					<li><a href="<?php echo OD_BASE_URL ?>platform/core">Odessa Core</a></li>
					<li><a href="<?php echo OD_BASE_URL ?>platform/core">Odessa Origination</a></li>
					<li><a href="<?php echo OD_BASE_URL ?>platform/core/">Odessa Servicing</a></li>
					<li><a href="<?php echo OD_BASE_URL ?>platform/developer-tools">Odessa Build</a></li>
					<li><a href="<?php echo OD_BASE_URL ?>automotive-finance-software" hreflang="en">Automotive Finance</a></li>
					<li><a id="features" href="<?php echo OD_BASE_URL ?>platform">View all platform<span> features</span></a></li>
				</ul>
			</div>
			<div class="footer_li_wrap">
				<div class="moblie_view_mrgn">
					<h4>About Odessa</h4>
					<ul>
						<li><a href="<?php echo OD_BASE_URL ?>company">Company</a></li>
						<li><a href="<?php echo OD_BASE_URL ?>careers">Careers</a></li>
						<li><a href="<?php echo OD_BASE_URL ?>newsroom">Events + Webinars</a></li>
						<li><a href="<?php echo OD_BASE_URL ?>newsroom">Newsroom</a></li>
						<li><a id="features" href="<?php echo OD_BASE_URL ?>lets-talk">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="clearmenurwmb"></div>
			<div class="footer_li_wrap">
				<h4>Engage +  Learn</h4>
				<ul>
					<li><a href="https://odessainc.force.com/customer/s/" target="blank">Customer Community</a></li>
					<li><a href="https://odessainc.talentlms.com/" target="blank">Odessa University</a></li>
					<li><a href="<?php echo OD_BASE_URL ?>newsroom">Resources</a></li>
					<li><a href="https://odessainc.force.com/customer/s/" target="blank">Support</a></li>
				</ul>
			</div>
			<div class="footer_li_wrap">
				<div class="moblie_view_mrgn">
					<h4>Why Odessa</h4>
					<ul>
						<li><a href="<?php echo OD_BASE_URL ?>design-principles">Design Principles</a></li>
						<li><a href="<?php echo OD_BASE_URL ?>xaas-everything-as-a-service">As-a-Service</a></li>
						<li><a href="<?php echo OD_BASE_URL ?>xaas-everything-as-a-service">Pay Per Use</a></li>
						<li><a href="<?php echo OD_BASE_URL ?>xaas-everything-as-a-service">Subscription Management</a></li>
						<li><a href="<?php echo OD_BASE_URL ?>cloud">Migrate to Cloud</a></li>
					</ul>
				</div>
			</div>
			<div  class="footer_li_wrap desktop_view_footer">
				<h4>Get Started</h4>
				<p>If you're considering Odessa to transform your asset finance business or need more platform information, we're here to help.</p>
				<h4 class="footer_li_heading"><a href="tel:888-683-2484">+1 888-683-2484</a></h4>
			</div>
		</div>
	</div>	
</footer>
<div class="footermenu_strip">
	<div class="container">
		<div class="footermenu_strip_inner clearfix">
			<div class="socailicons_newsletter">
				<div class="social_icon"> <a href="https://www.facebook.com/OdessaInc/" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="https://twitter.com/OdessaTech" target="_blank" aria-label="Twitter"> <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" style="width: 19px;height: 19px;fill: #fff;vertical-align: -webkit-baseline-middle;font-size: 18px;"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg></a> <a href="https://www.linkedin.com/company/odessa-inc-/" target="blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a> <a href="https://www.instagram.com/odessainc/" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a href="https://www.youtube.com/odessainc" target="blank"><i class="fa fa-youtube" aria-hidden="true"></i></a> </div>
			</div>
			<div id="desktop_social" class="footerbottommenu">
				<ul class="list-unstyled list-inline">
					<li>2024 © Odessa</li>
					<li><a href="<?php echo OD_BASE_URL ?>terms-of-use">Terms of Use</a></li>
					<li><a href="<?php echo OD_BASE_URL ?>privacy-policy">Privacy</a></li>
					<li><a href="<?php echo OD_BASE_URL ?>odessa-modern-slavery-act-statement">Modern Slavery Act Statement</a></li>

				</ul>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
<script async src="https://js.sitesearch360.com/plugin/bundle/49770.js"></script>
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
$(".s").attr("placeholder", "Search Blog");
    });

//     window.onload = function(event) {
//     event.stopPropagation(true);
//     window.location.href="http://www.google.com";
// };
</script>
<script>
	window.intercomSettings = {
	app_id: "b24vf5ox"
	};
	</script> 
<script>
	(function(){var w=window;var ic=w.Intercom;if(typeof
	ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var
	i=function(
	){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var
	l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/b24vf5ox';
	var x=d.getElementsByTagName('script')[0];x
	.parentNode.insertBefore(s,x);};if(w.attachEvent){w.atta
	chEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/script.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4da41fc07fb2a379"></script>
</html>
