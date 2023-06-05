<script type="text/javascript">
 
 
String.prototype.escape = function() {
    var tagsToReplace = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;'
    };
    return this.replace(/[&<>]/g, function(tag) {
        return tagsToReplace[tag] || tag;
    });
};

function url_redirect(options){
                var $form = $("<form />");
                 
                 $form.attr("action",options.url);
                 $form.attr("method",options.method);
                 
                 for (var data in options.data)
                 $form.append('<input type="hidden" name="email" value="'+options.data[data]+'" />');
                  
                 $("body").append($form);
                 $form.submit(); 
            }



function letstalkclick(emailId)
{
 
  var email = document.getElementById(emailId).value;
  
 var url="<?= base_url()?>get-started" ;

url_redirect( {url: url,
                  method: "post",
                  data: {"email":email.escape() }
                 });

 
  }


</script>

<div id="wrapper">
	<div class="home-hero">
		<div class="home-hero-bg">
			<div class="home-hero-bggrad"></div>
			<div class="home-hero-bgimg">
				<picture>
					<!-- <source data-srcset="<?= base_url(); ?>assets/images/odessa-partner-banner-bkmenu.webp" type="image/webp">
					
					<source data-srcset="<?= base_url(); ?>assets/images/odessa-partner-banner-bkmenu.jpg" type="image/jpeg"> -->
					<img data-src="<?= base_url(); ?>assets/images/odessa-partner-banner-bkmenu.jpg" alt="" class="lazyload"/>
					
				</picture>
				   
			</div>
		</div>
		<div class="home-hero-content">
			<div class="home-hero-cinner">
				<div class="home-hero-cwrap">
					<p class="home-hero-cstitle" style="font-family: MaisonNeue-Bold;
    color: #2a2d36;margin: 0 0 10px">BUILT TO PERFORM</p>
					<div class="home-hero-ctitlewrap">
						<h1 class="home-hero-ctitle">Your Proven Leasing <br>Platform</h1>
					</div>
					<p class="home-hero-cdesc">Asset-based by design, backed by a robust tech stack. Odessa leverages cross-platform workflow enabled by APIs and integrations.</p>
					<!-- <a class="odc__btn odc__btn--primary odc__btn--md" href="https://www.odessainc.com/platform" target="_self">Explore the platform</a> -->
					<a class="odc__btn odc__btn--primary odc__btn--md" href="<?= base_url(); ?>platform" target="_self">Explore the platform</a>
				</div> 
			</div>
		</div>
	</div>

	<!--Platform Solution Section Start-->
	<div style="clear:both"></div>
	<div class="platformsectionwrap">
		<div class="dotsdesign"> <img data-src="<?= base_url(); ?>assets/images/dots.png" alt="Dots" class="lazyload wh-image"/> </div>
		<div class="container clearfix">
			<h2 class="text-center">One uniﬁed <span>platform solution</span></h2>
			<p class="text-center">See how the Odessa Platform combines asset-based functionality, data intelligence <br>
				and extensibility in one seamless platform for better business performance.</p>
			<div class="assetsfinancebox">
				<h3>Asset Finance</h3>
				<div class="finance_assets_row">
					<div class="row clearfix">
						<div class="col-xs-12 col-sm-4">
							<div class="fin_ass_valrw"> <a href="<?= base_url(); ?>platform">
								<div class="fin_ass_logo"></div>
								<div class="finassname">Origination</div>
								</a> </div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="fin_ass_valrw"> <a href="<?= base_url(); ?>platform">
								<div class="fin_ass_logo servicing"></div>
								<div class="finassname">Servicing</div>
								</a> </div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="fin_ass_valrw lastrw"> <a href="<?= base_url(); ?>platform">
								<div class="fin_ass_logo ass_man"></div>
								<div class="finassname">Asset Management</div>
								</a> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="assets_fin_service">
				<div class="row equalHMWrap eqWrap clearfix">
					<div class="col-sm-2 asswd20 finserbx chained-delay" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
						<div class="assfinconbx">
							<div class="logosrw">
								<div class="finass_ser_logo"></div>
							</div>
							<div class="headingbox">Process Automation</div>
							<div class="fincetext">Seamlessly automate end-to-end business processes.</div>
						</div>
					</div>
					<div class="col-sm-2 asswd20 finserbx chained-delay" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
						<div class="assfinconbx">
							<div class="logosrw">
								<div class="finass_ser_logo om"></div>
							</div>
							<div class="headingbox">Omnichannel <span>+ Mobility</span></div>
							<div class="fincetext">Build engaging experiences for stakeholders – whenever, and wherever.</div>
						</div>
					</div>
					<div class="col-sm-2 asswd20 finserbx chained-delay" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
						<div class="assfinconbx">
							<div class="logosrw">
								<div class="finass_ser_logo di"></div>
							</div>
							<div class="headingbox">Data Intelligence</div>
							<div class="fincetext">Get analytical insights inside your leasing operations and across your business.</div>
						</div>
					</div>
					<div class="col-sm-2 asswd20 finserbx chained-delay" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
						<div class="assfinconbx">
							<div class="logosrw">
								<div class="finass_ser_logo dt"></div>
							</div>
							<div class="headingbox">Developer Tools</div>
							<div class="fincetext">Extend, build, and test functionality with the #1 asset finance platform.</div>
						</div>
					</div>
					<div class="col-sm-2 asswd20 finserbx chained-delay" data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
						<div class="assfinconbx">
							<div class="logosrw">
								<div class="finass_ser_logo api"></div>
							</div>
							<div class="headingbox">API + Integration</div>
							<div class="fincetext">Connect any app, data, or device – in the cloud or on-premise.</div>
						</div>
					</div>
				</div>
			</div>
			<div class="lernmorerw"> <a class="odc__btn--more odc__btn--xl" href="<?= base_url();?>platform">Learn more</a> </div>
		</div>
	</div>
	<!--Platform Solution Section End--> 
	
	<!--Cloud or Server Start Here-->
	<div class="cloudserversection">
		<div class="container clearfix">
			<div class="cloudserverCon">
				<div class="cloudsview1">
					<picture>
						<source data-srcset="<?= base_url(); ?>assets/images/odessa-cloud-2.webp" type="image/webp">
						
						<source data-srcset="<?= base_url(); ?>assets/images/odessa-cloud-2.jpg" type="image/jpeg">
						<img data-src="<?= base_url(); ?>assets/images/odessa-cloud-2.jpg" alt="Clouds Server" class="lazyload wh-image"/>
						
					</picture>
				</div>
				<div class="cloudsview2">
					<picture>
						<source data-srcset="<?= base_url(); ?>assets/images/odessa-cloud-1.webp" type="image/webp">
						
						<source data-srcset="<?= base_url(); ?>assets/images/odessa-cloud-1.jpg" type="image/jpeg">
						<img data-src="<?= base_url(); ?>assets/images/odessa-cloud-1.jpg" alt="Clouds Server" class="lazyload wh-image"/>
						
					</picture>
					 
				</div>
				<h2 class="text-center">Cloud or Server</h2>
				<p class="normaltxt text-center">Our cloud-first design philosophy means the Odessa Platform is optimized to be<br>
					consumed in the cloud, but dynamic enough to be hosted on your servers.
					<span class="nextrw">
						<span>Understand which deployment option is</span>
						<br>
						<a class="odc__btn--more odc__btn--xl" href="<?= base_url(); ?>cloud">best for you</a>
					</span>
				</p>
			</div>
		</div>
	</div>
</div>
<!--Cloud or Server End Here--> 

<!--Integrate with the Tools Start-->
<div class="integratewithtools">
	<div class="container clearfix">
		<div class="integratecon">
			<div class="integrateconmidCon">
				<h2 class="text-center wtcol">Integrate with the tools you <span>already use</span></h2>
				<p class="text-center wtcol">Connect the Odessa Platform to your critical business tools to automate<br>
					cross-platform workflow.
					DocuSign, Salesforce, Vertex, GreatPlains and more. </p>
				<div class="newsletter inlineform">
				<!--	<form id ="letstalkForm" method ="post"> -->
						<div class="input">
						   <input type="email" placeholder="What’s your email?" name ="email" id="email1" required/>  
						</div> 
						<div class="inputbtn">
							<input class="odc__btn odc__btn--primary odc__btn--md" type="submit"  value="Learn more" />
						</div>
			<!--		</form> -->
				</div>
			</div>
		</div>
	</div>
</div>
<!--Integrate with the Tools End--> 

<!--Testimonials Section Start Here-->
<div class="testimonialswrap">
	<div class="container clearfix">
		<div id="clients_view">
			<div class="row equalHMWrap eqWrap clearfix">
				<div class="col-sm-6 col-lg-7">
					<div class="clientsmess">
						<div class="appcllogorw">
							<div class="testicon"><img data-src="<?= base_url(); ?>assets/images/testi_icon.png" alt="Quotation mark" class="lazyload wh-image"/></div>
							<div class="applogo medone"><img data-src="<?= base_url(); ?>assets/images/med-one_logo.png" alt="Med One" class="lazyload wh-image"/></div>
						</div>
						<p>On a daily basis, Odessa is really the backbone of our organization. Everything that we all do runs through the Odessa Platform.</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-5">
					<div class="clientsimgbx">
						<picture>
							<source data-srcset="<?= base_url(); ?>assets/images/jeff.webp" type="image/webp">
							
							<source data-srcset="<?= base_url(); ?>assets/images/jeff.jpg" type="image/jpeg">
							<img data-src="<?= base_url(); ?>assets/images/jeff.jpg" alt="" class="lazyload wh-image"/>
							
						</picture>
					</div>
				</div>
			</div>
		</div>
		<div class="overtrustedwrap">
			<h2 class="headingsection text-center">Trusted by over 9,500 asset ﬁnance <span>users around the world</span></h2>
			<p class="text-center">Learn why companies trust Odessa to help deliver great<br>
				stakeholder experiences.</p>
			<div class="newsletter inlineform">
			<!--	<form id ="letstalkForm1" method ="POST"> -->
					<div class="input">
						<input type="email" placeholder="What’s your email?" name = "email" id="email2" required>
					</div>
					<div class="inputbtn">
						<input class="odc__btn odc__btn--primary odc__btn--md" type="submit" onclick="letstalkclick('email2')" value="Let’s Talk">
					</div>
					<div class="error"></div>
<!--				</form> -->
			</div>
			<div class="trusted_brands_logo">
				<div class="brlogo"> <img data-src="<?= base_url(); ?>assets/images/icons/dell_logo.png" alt="Dell Logo " class="lazyload wh-image-ratio"/> </div>
				<div class="brlogo"> <img data-src="<?= base_url(); ?>assets/images/icons/pnc_logo.png" alt="PNC Logo " class="lazyload wh-image-ratio" /> </div>
				<div class="brlogo"> <img data-src="<?= base_url(); ?>assets/images/icons/canon_logo.png" alt="Canon Logo " class="lazyload wh-image-ratio" /> </div>
				<div class="brlogo"> <img data-src="<?= base_url(); ?>assets/images/icons/truist_logo.png" alt="Truist Logo " class="lazyload wh-image-ratio" /> </div>
				<div class="brlogo"> <img data-src="<?= base_url(); ?>assets/images/icons/attec_logo.png" alt="Attec Logo " class="lazyload wh-image-ratio" /> </div>
			</div>
		</div>
	</div>
</div>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Odessa",
  "url": "<?= base_url(); ?>",
  "logo": "<?= base_url(); ?>",
  "foundingDate": "1998",
  "sameAs": [
    "https://www.facebook.com/OdessaInc/",
    "https://twitter.com/OdessaTech",
    "https://www.instagram.com/odessainc/",
    "https://www.youtube.com/odessainc",
    "https://www.linkedin.com/company/odessa-inc-/"
  ]
}
</script>
