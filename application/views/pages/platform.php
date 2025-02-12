<!--rooban-->

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
	<section class="pg_banner pgplat__banner">
		<div class="odc-gd__container">
			<div class="odc-gd__row">
				<div class="pgplat__bleft odc-gd__col-xxs-12 odc-gd__col-xs-6">
					<h1 class="pgplat__btitle">A smarter way to do lease management</h1>
					<p class="pgplat__btext">Learn why companies trust the Odessa Platform to help deliver great stakeholder experiences. Your single solution, from origination to remarketing.</p>
				 <div class="pgplat__bform" >   
						<input type="email" placeholder="What’s your email?" name="email" id="email1" required=""><button class="odc__btn odc__btn--primary odc__btn--md" type="submit" onclick="letstalkclick('email1'); return;">Let’s Talk</button>
 		</div>  
				</div>
			</div>
		</div>
		<div class="pgplat__banner-image"></div>
	</section>

	<div class="pgplat_feat">
		<div class="odc-gd__container">
			<div class="pgplat_ftgroup odc-gd__row">
				<div class="pgplat_ftgmain odc-gd__col-xxs-12 odc-gd__col-xs-3">
					<h3 class="pgplat_ftgtitle">Asset Finance Platform Core</h3>
				</div>
				<div class="pgplat_ftgsub odc-gd__col-xxs-12 odc-gd__col-xs-3">
					<div class="pgplat_ftgsicon">
						<img src="<?php echo base_url(); ?>assets/images/platformicon/Origination.svg" alt="Odessa Core Origination" />
					</div>
					<h4 class="pgplat_ftgstitle">Odessa Core: Origination</h4>
					<p class="pgplat_ftgstext">Seamlessly bring sales and operations together for efficiency in pricing, documents, funding - everything you need to close the deal.</p>
					<p><a href="<?php echo base_url();?>platform/core" class="odc__btn odc__btn--more odc__btn--xl pgplat_ftgslink">Learn more</a></p>
				</div>
				<div class="pgplat_ftgsub odc-gd__col-xxs-12 odc-gd__col-xs-3">
					<div class="pgplat_ftgsicon">
						<img src="<?php echo base_url(); ?>assets/images/platformicon/Servicingic.svg" alt="Odessa Core Servicing" />
					</div>
					<h4 class="pgplat_ftgstitle">Odessa Core: Servicing</h4>
					<p class="pgplat_ftgstext">Simplify and automate core asset management processes so you can boost productivity, and focus on bringing new products to market.</p>
					<p><a href="<?php echo base_url();?>platform/core" class="odc__btn odc__btn--more odc__btn--xl pgplat_ftgslink">Learn more</a></p>
				</div>
			</div>
			<div class="pgplat_ftgroup odc-gd__row">
				<div class="pgplat_ftgmain odc-gd__col-xxs-12 odc-gd__col-xs-3">
					<h3 class="pgplat_ftgtitle">Omnichannel + Mobility</h3>
				</div>

				<div class="pgplat_ftgsub odc-gd__col-xxs-12 odc-gd__col-xs-3">
					<div class="pgplat_ftgsicon">
						<img src="<?php echo base_url(); ?>assets/images/platformicon/CustomerPortalic.svg" alt="Odessa Customer Portal" />
					</div>
					<h4 class="pgplat_ftgstitle">Customer Portal</h4>
					<p class="pgplat_ftgstext">Delight your customers with the gift of omnichannel intelligence and self-service to increase efficiency.</p>
					<p><a href="<?php echo base_url();?>platform/core" class="odc__btn odc__btn--more odc__btn--xl pgplat_ftgslink">Learn more</a></p>
				</div>
				<div class="pgplat_ftgsub odc-gd__col-xxs-12 odc-gd__col-xs-3">
					<div class="pgplat_ftgsicon">
						<img src="<?php echo base_url(); ?>assets/images/platformicon/PartnerPortalic.svg" alt="Odessa Partner Portal" />
					</div>
					<h4 class="pgplat_ftgstitle">Partner Portal</h4>
					<p class="pgplat_ftgstext">Accelerate the speed of funding for your broker network through an intuitive, mobile-enabled portal.</p>
					<p><a href="<?php echo base_url();?>platform/core" class="odc__btn odc__btn--more odc__btn--xl pgplat_ftgslink">Learn more</a></p>
				</div>
				<div class="pgplat_ftgsub odc-gd__col-xxs-12 odc-gd__col-xs-3">
					<div class="pgplat_ftgsicon">
						<img src="<?php echo base_url(); ?>assets/images/platformicon/Mobilityic.svg" alt="Odessa Mobility" />
					</div>
					<h4 class="pgplat_ftgstitle">Odessa Mobility</h4>
					<p class="pgplat_ftgstext">Harness the full power of Odessa Build to extend or create beautifully simple mobile apps.</p>
					<p><a href="<?php echo base_url();?>platform/developer-tools" class="odc__btn odc__btn--more odc__btn--xl pgplat_ftgslink">Learn more</a></p>
				</div>
			</div>
			<div class="pgplat_ftgroup odc-gd__row">
				<div class="pgplat_ftgmain odc-gd__col-xxs-12 odc-gd__col-xs-3">
					<h3 class="pgplat_ftgtitle">Data Intelligence + Integration</h3>
				</div>
				<div class="pgplat_ftgsub odc-gd__col-xxs-12 odc-gd__col-xs-3">
					<div class="pgplat_ftgsicon">
						<img src="<?php echo base_url(); ?>assets/images/platformicon/Reporteric.svg" alt="Odessa Reportbuilder" />
					</div>
					<h4 class="pgplat_ftgstitle">Odessa Reportbuilder</h4>
					<p class="pgplat_ftgstext">Reduce the time it takes to transform data into insights, empowering you to make more informed strategic decisions.</p>
					<p><a href="<?php echo base_url();?>platform/core" class="odc__btn odc__btn--more odc__btn--xl pgplat_ftgslink">Learn more</a></p>
				</div>
				<div class="pgplat_ftgsub odc-gd__col-xxs-12 odc-gd__col-xs-3">
					<div class="pgplat_ftgsicon">
						<img src="<?php echo base_url(); ?>assets/images/platform/datamart-flatten.svg" alt="Odessa Insights" />
					</div>
					<h4 class="pgplat_ftgstitle">Odessa Insights</h4>
					<p class="pgplat_ftgstext">Maximize the value of your data collected to enable more detailed business analysis.</p>
					<p><a href="<?php echo base_url();?>platform/core" class="odc__btn odc__btn--more odc__btn--xl pgplat_ftgslink">Learn more</a></p>
				</div>
			</div>
			<div class="pgplat_ftgroup odc-gd__row">
				<div class="pgplat_ftgmain odc-gd__col-xxs-12 odc-gd__col-xs-3">
					<h3 class="pgplat_ftgtitle">Developer Tools</h3>
				</div>

				<div class="pgplat_ftgsub odc-gd__col-xxs-12 odc-gd__col-xs-3">
					<div class="pgplat_ftgsicon">
						<img src="<?php echo base_url(); ?>assets/images/platformicon/Buidic.svg" alt="Odessa Build" />
					</div>
					<h4 class="pgplat_ftgstitle">Odessa Build</h4>
					<p class="pgplat_ftgstext">Access the same technology and framework that our developers use to build Odessa applications.</p>
					<p><a href="<?php echo base_url();?>platform/developer-tools" class="odc__btn odc__btn--more odc__btn--xl pgplat_ftgslink">Learn more</a></p>
				</div>
				<div class="pgplat_ftgsub odc-gd__col-xxs-12 odc-gd__col-xs-3">
					<div class="pgplat_ftgsicon">
						<img src="<?php echo base_url(); ?>assets/images/platform/test-flatten.svg" alt="Odessa Test" />
					</div>
					<h4 class="pgplat_ftgstitle">Odessa Test</h4>
					<p class="pgplat_ftgstext">Bring efficiency to your application development lifecycle with comprehensive test automation.</p>
					<p><a href="<?php echo base_url();?>platform/developer-tools" class="odc__btn odc__btn--more odc__btn--xl pgplat_ftgslink">Learn more</a></p>
				</div>
				<div class="pgplat_ftgsub odc-gd__col-xxs-12 odc-gd__col-xs-3">
					<div class="pgplat_ftgsicon">
						<img src="<?php echo base_url(); ?>assets/images/platform/api-flatten.svg" alt="Odessa API" />
					</div>
					<h4 class="pgplat_ftgstitle">Odessa APIs</h4>
					<p class="pgplat_ftgstext">Connect Odessa to your critical business tools to automate cross-platform workflow.</p>
					<p><a href="<?php echo base_url();?>platform/developer-tools" class="odc__btn odc__btn--more odc__btn--xl pgplat_ftgslink">Learn more</a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="pgplat_cloud">
		<div class="odc-gd__container">
			<div class="pgplat_cldwrap">
				<h2 class="pgplat_cldtitle">Odessa in the Cloud</h2>
				<p class="pgplat_cldtext">Designed with features that meet the needs of enterprises, Odessa’s SaaS solution offers the business critical functionality, premier support, and strategic services you need to get the most out of your Odessa applications.</p>
				<p><a href="<?php echo base_url();?>cloud" class="odc__btn odc__btn--lg odc__btn--primary">Learn more</a></p>
			</div>
		</div>
	</div>

	<section class="pgplat_teams">
		<div class="odc-gd__container">
			<div class="pgplat_tmwrap">
				<h2 class="pgplat_tmtitle">One platform for all your teams</h2>
				<div class="pgplat_tmcontent">
					<div class="pgplat_tmctabnav owl-carousel owl-theme">
						<div class="pgplat_tmctab-item tabactive" data-toggle="tab" href="#accounting">
							<div class="pgplat_tmctabiimage">
								<img src="<?php echo base_url(); ?>assets/images/platform/accounting.png" alt="Lease Accounting">
							</div>
							<div class="pgplat_tmctabitext">Accounting</div>
						</div>
						<div class="pgplat_tmctab-item" data-toggle="tab" href="#customerservice">
							<div class="pgplat_tmctabiimage">
								<img src="<?php echo base_url(); ?>assets/images/platform/customerservice.png" alt="Customer Servicing">
							</div>
							<div class="pgplat_tmctabitext">Customer Service</div>
						</div>
						<div class="pgplat_tmctab-item" data-toggle="tab" href="#it">
							<div class="pgplat_tmctabiimage">
								<img src="<?php echo base_url(); ?>assets/images/platform/it.png" alt="Information Technology">
							</div>
							<div class="pgplat_tmctabitext">IT</div>
						</div>
						<div class="pgplat_tmctab-item" data-toggle="tab" href="#management">
							<div class="pgplat_tmctabiimage">
								<img src="<?php echo base_url(); ?>assets/images/platform/management.png" alt="Lease Management">
							</div>
							<div class="pgplat_tmctabitext">Management</div>
						</div>
					</div>
					<div class="pgplat_tmctabcontent tab-content">
						<div id="accounting" class="pgplat_tmctc-item pane-tab tabsopen tab-pane fade in active">
							<p class="pgplat_tmctci-text">Structure deals and manage transactions without worrying about accounting complexity. With Odessa, your accounting and compliance across your A/P and A/R relationships is automated.</p>
							<div class="pgplat_tmctci-tags">
								<span class="pgplat_tmctci-tagitem">#assetmanagement</span>
								<span class="pgplat_tmctci-tagitem">#accountspayable</span>
								<span class="pgplat_tmctci-tagitem">#contractmanagement</span>
								<span class="pgplat_tmctci-tagitem">#salestax</span>
								<span class="pgplat_tmctci-tagitem">#collections</span>
								<span class="pgplat_tmctci-tagitem">#leasing</span>
								<span class="pgplat_tmctci-tagitem">#loans</span>
							</div>
						</div>
						<div id="customerservice" class="pgplat_tmctc-item pane-tab tabsopen tab-pane fade">
							<p class="pgplat_tmctci-text">Easily serve, upsell, and retain top customers. With a single agile platform and portal ecosystem to manage your stakeholders, you gain the insight and flexibility needed to nurture ongoing success.</p>
							<div class="pgplat_tmctci-tags">
								<span class="pgplat_tmctci-tagitem">#customerportal</span>
								<span class="pgplat_tmctci-tagitem">#omnichannel</span>
								<span class="pgplat_tmctci-tagitem">#selfservice</span>
								<span class="pgplat_tmctci-tagitem">#personalization</span>
								<span class="pgplat_tmctci-tagitem">#userfriendly</span>
								<span class="pgplat_tmctci-tagitem">#equipmentleasing</span>
							</div>
						</div>
						<div id="it" class="pgplat_tmctc-item pane-tab tabsopen tab-pane fade">
							<p class="pgplat_tmctci-text">Simplify your IT landscape and retire your bolt-ons while boosting back-office productivity. With Odessa, you get a system that’s quick to deploy, easy to integrate, and continuously innovative.</p>
							<div class="pgplat_tmctci-tags">
								<span class="pgplat_tmctci-tagitem">#digitaltransformation</span>
								<span class="pgplat_tmctci-tagitem">#framework</span>
								<span class="pgplat_tmctci-tagitem">#automation</span>
								<span class="pgplat_tmctci-tagitem">#leasemanagement</span>
								<span class="pgplat_tmctci-tagitem">#cloud</span>
								<span class="pgplat_tmctci-tagitem">#azure</span>
							</div>
						</div>
						<div id="management" class="pgplat_tmctc-item pane-tab tabsopen tab-pane fade">
							<p class="pgplat_tmctci-text">With Odessa, you can automate transaction processes, maintain control and compliance, adapt to change on the fly – and save on operating costs in the process.</p>
							<div class="pgplat_tmctci-tags">
								<span class="pgplat_tmctci-tagitem">#equipmentfinance</span>
								<span class="pgplat_tmctci-tagitem">#operations</span>
								<span class="pgplat_tmctci-tagitem">#efficiency</span>
								<span class="pgplat_tmctci-tagitem">#businessintelligence</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<link href="<?php echo base_url(); ?>assets/css/platform.css" rel='stylesheet' />
<style>
	.navbar-default {
		background-color: #0075a2;
		box-shadow: none;
	}
	.navbar-default .navbar-nav > li > a,.xm-nav .top-nav .nav-item a{
		color: #fff;
	}
	.navbar-default .xm-nav .top-nav .nav-item a{
		box-shadow:none;
	}
	.navbar-default #nav-icon1 span{
		 background-color: #fff;
	}
	.navbar-default .navbar-brand {
		background: url('<?php echo base_url(); ?>assets/images/logo_wt.png') no-repeat;
		background-size: 100% 100%;
	}
	.navbar-default .xm-nav .xm-bg-desktop,
	.navbar-default .xm-nav .primary-nav li a::before{
		background:none;
	}
</style>
<script type="application/ld+json">{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Odessa Platform",
  "image": "<?= base_url(); ?>assets/images/platformheaderimg.png",
  "description": "Learn why companies trust the Odessa Platform to help deliver great stakeholder experiences. Your single solution, from origination to remarketing.",
  "brand": "Odessa",
  "review": {
    "@type": "Review",
    "reviewBody": "On a daily basis, Odessa is really the backbone of our organization. Everything that we all do runs through the Odessa Platform.",
    "author": {"@type": "Person", "name": "Jeff Easton CFO, MedOne Capital"}
  }
}
</script>


