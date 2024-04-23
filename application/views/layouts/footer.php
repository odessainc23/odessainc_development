<footer>
		<div class="container">
			<div class="footer_menuwr clearfix">
				<div  class=" footer_li_wrap mobile_view_footer">
					<h2 class="platform_size">Get Started</h2>
					<p>If you're considering Odessa to transform your asset finance business or need more platform information, we're here to help.</p>
					<h2 class="footer_li_heading">+1 888-683-2484</h2>
				</div>
				<div class="footer_li_wrap">
					<h2 class="platform_size">Platform</h2>
					<ul>
						<li><a href="<?php echo base_url(); ?>platform/core">Odessa Core</a></li>
						<li><a href="<?php echo base_url(); ?>platform/core">Odessa Origination</a></li>
						<li><a href="<?php echo base_url(); ?>platform/core/">Odessa Servicing</a></li>
						<li><a href="<?php echo base_url(); ?>platform/developer-tools">Odessa Build</a></li>
						<li><a href="<?php echo base_url(); ?>auto-finance-software" hreflang="en">Odessa Auto Finance</a></li>

						<li><a href="<?php echo base_url(); ?>platform">View all platform<span> features</span></a></li>
					</ul>
				</div>
				<div class="footer_li_wrap">
					<div class="moblie_view_mrgn">
						<h2 class="platform_size">About Odessa</h2>
						<ul>
							<li><a href="<?php echo base_url(); ?>company">Company</a></li>
							<li><a href="<?php echo base_url(); ?>our-people" hreflang="en">Our People</a></li>

							<li><a href="<?php echo base_url(); ?>careers">Careers</a></li>
							<li><a href="<?php echo base_url(); ?>blog">Blog</a></li>
							<li><a href="<?php echo base_url(); ?>newsroom">Newsroom</a></li>
							<li><a  href="<?php echo base_url(); ?>lets-talk">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="clearmenurwmb"></div>
				<div class="footer_li_wrap">
					<h2 class="platform_size">Engage +  Learn</h2>
					<ul>
						<li><a href="https://odessainc.force.com/customer/s/" target="blank">Customer Community</a></li>
						<li><a href="https://odessainc.talentlms.com/" target="blank">Odessa University</a></li>
						<li><a href="<?php echo base_url(); ?>newsroom">Resources</a></li>
						<li><a href="https://odessainc.force.com/customer/s/" target="blank">Support</a></li>
					</ul>
				</div>
				<div class="footer_li_wrap">
					<div class="moblie_view_mrgn">
						<h2 class="platform_size">Why Odessa</h2>
						<ul>
							<li><a href="<?php echo base_url(); ?>design-principles">Design Principles</a></li>
							<li><a href="<?php echo base_url(); ?>xaas-everything-as-a-service">As-a-Service</a></li>

							<li><a href="<?php echo base_url(); ?>xaas-everything-as-a-service">Pay Per Use</a></li>
							<li><a href="<?php echo base_url(); ?>xaas-everything-as-a-service">Subscription Management</a></li>
							<li><a href="<?php echo base_url(); ?>cloud">Migrate to Cloud</a></li>
						</ul>
					</div>
				</div>
				<div  class="footer_li_wrap desktop_view_footer">
					<h2 class="platform_size">Get Started</h2>
					<p>If you're considering Odessa to transform your asset finance business or need more platform information, we're here to help.</p>
					<h2 class="footer_li_heading"><a href="tel:888-683-2484">+1 888-683-2484</a></h2>
				</div>
			</div>
		</div>
	</footer>
	<div class="footermenu_strip">
		<div class="container">
			<div class="footermenu_strip_inner clearfix">
				<div class="stripfbox">
					<div class="socailicons_newsletter">
					<div class="social_icon"> <a href="https://www.facebook.com/OdessaInc/" target="_blank" aria-label="Facebook"><i class="fa fa-facebook" ></i></a> 
					<a href="https://twitter.com/OdessaTech" target="_blank" aria-label="Twitter">                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" style="width: 19px;height: 19px;fill: #fff;"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
</a> 
					<a href="https://www.linkedin.com/company/odessa-inc-/" target="_blank" aria-label="LinkedIn"><i class="fa fa-linkedin" ></i></a> 
					<a href="https://www.instagram.com/odessainc/" target="_blank" aria-label="Instagram"><i class="fa fa-instagram" ></i></a>
					 <a href="https://www.youtube.com/odessainc" target="_blank" aria-label="YouTube"><i class="fa fa-youtube" ></i></a> </div>
					</div>
					<div id="desktop_social" class="footerbottommenu">
						<ul class="list-unstyled list-inline">
							<li>2024 © Odessa</li>
							<li><a href="<?php echo base_url(); ?>terms-of-use">Terms of Use</a></li>
							<li><a href="<?php echo base_url(); ?>privacy-policy">Privacy</a></li>
							<li><a href="<?php echo base_url(); ?>odessa-modern-slavery-act-statement">Modern Slavery Act Statement</a></li>
						</ul>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
	

	<?php
		$this->minify->js( array('owl.carousel.js', 'bootstrap.js', 'jquery.cookieMessage.min.js', 'stickySidebar.min.js', 'v1-script.js', 'script.js') );

		echo $this->minify->deploy_js();
	?>
	
	
	<script src="<?php echo base_url(); ?>assets/js/aos.js?v=7001" async></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js?v=824334" async></script>
	<script src="<?php echo base_url(); ?>assets/js/lazysizes.min.js?v=900232" async></script>
	<script async>

		setTimeout(function(){
			$.cookieMessage({
				'mainMessage': 'This website uses cookies to ensure you get the best experience. <a href="<?php echo base_url(); ?>privacy-policy">Learn More</a>. ',
				'acceptButton': 'Got It!',
			});

			$(function(){
				$('#companyvideoplay').on('show.bs.modal', function () {
					$('#companyvideoplay .modal-body .companypg').html('<div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_d8h88wu7f0 videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>');
				});
				$('#companyvideoplay').on('hidden.bs.modal', function () {
					$('#companyvideoplay .modal-body .companypg').empty();
				});
			});

			AOS.init({
				throttleDelay: 0,
			});
		}, 4000);
		
	</script>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#async=1"></script> 
	<script src="//rum-static.pingdom.net/pa-609d1be23a9c8c0011000021.js" async></script>
	<script async src="https://js.sitesearch360.com/plugin/bundle/50238.js"></script>
	<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
	<script type="text/javascript">
    $(document).ready(function(){
        $('.search-box').hide();
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
});


	$(".overlay").addClass('ov');
     const isLoggedIn = localStorage.getItem("isLoggedIn");
 
     if (isLoggedIn) {
         // Hide the login form and display the welcome message
         $("#welcomeMessage").show();
         $(".overlay").hide();
		 $(".overlay").removeClass('ov');
         $("#loginContainer").hide();
         //$(".overlay").hide();
     }
 
     $("#loginForm").submit(function(event) {
         event.preventDefault(); // Prevent form submission
 
         const username = $("#username").val();
         const password = $("#password").val();
 
         // Check if the username and password match the expected values
         if (username === "odessauser" && password === "password") {
             alert("Access granted.");
             $(".overlay").hide();
			 $(".overlay").removeClass('ov');
             $("#loginContainer").hide();
 
             // Store the login state in local storage
             localStorage.setItem("isLoggedIn", true);
 
             // Reload the page to show the welcome message without the login form
             location.reload();
         } else {
             alert("Please enter correct username and password.");
             $(".form-control").addClass('red');
         }
     });


    });

//     window.onload = function(event) {
//     event.stopPropagation(true);
//     window.location.href="http://www.google.com";
// };
</script>
</body>

</html>