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
            <!-- Design of Principle Screen  Start here -->
            <!-- Header section Start here -->
            <div class="page_banner">
                <div class="header_contant_wrap">
                    <div class="header_contant">
                    <h1 class="text-center wtcol">Our platform is <span>different by design</span></h2>
                        <p class="text-center wtcol">Three core principles drive our innovation engine, creating the most<br> dynamic solutions for customers</p>
                    </div>
                </div>
                <div class="tab_arrow_wrap">
                    <img src="<?= base_url(); ?>assets/images/tabs_arrow.png" alt="arrow" />
                </div>
            </div>
            <div class="open_design_wrap">
                <div class="container">
                        <div class="row clearfix">
                            <div class="col-md-4">
                                <div class="design_icon">
                                    <img src="<?= base_url(); ?>assets/images/principle_logo.svg" alt="Odessa-design-logo" />
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab_data_wapper">
                                    <div class="designtabs owl-carousel owl-theme">
                                        <div class="items design_tabactive"><a data-toggle="tab" href="#tab_default_1">Design open</a></div>
                                        <div class="items"><a data-toggle="tab" href="#tab_default_2">Think user first</a></div>
                                        <div class="items"><a data-toggle="tab" href="#tab_default_3">Build for change</a></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab_default_1">
                                            <div class="tab_contant_data">
                                                <p>Our philosophy has always been one unified solution – no disparate front end and back end, no siloed data. Open, connected design provides for efficiency across business topology. Leverage a leading, non-proprietary technology stack that always ‘plays nice in the sandbox.'</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab_default_2">
                                        <div class="tab_contant_data">
                                            <p>The Odessa Platform offers intuitive, useful, information-rich experiences for the enterprise. By equipping you with a data-driven solution that enables business intelligence, you can broaden the stakeholder experience by thinking about all users: customers, partners, and employees.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab_default_3">
                                        <div class="tab_contant_data">
                                            <p>At the core of the Odessa Platform is an intelligent ERP for asset finance, complimented by an extensibility suite that enables you to work at your own pace. We enable you to configure business logic and keep pace with the latest innovations in technology. Business agility and self-service – at scale.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                </div>
            </div>
        </div>
        <!-- Header section End here -->

        <!-- ERP Section Start Here -->
        <div class="erp_section_wrap">
        <h2 class="text-center">Intelligent ERP for <span>asset finance</span></h2>
            <div class="container">
                <div class="top_arrow">
                    <img src="<?= base_url(); ?>assets/images/nav_arrow.png" alt="navigational arrow" />
                </div>
                <div class="row clearfix">
                    <div class="col-md-4 col-sm-4">
                        <div class="erp_card_wrap">
                            <div class="erp_card">
                                <h4 class="text-center">Full-stack Automation</h4>
                                <p>Workflow, business logic, RPA and AI – all integrated in one platform.</p>
                            </div>
                            <div class="card_img_lft">
                                <img src="<?= base_url(); ?>assets/images/left_arrow.png" alt="left arrow icon" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="erp_card_wrap">
                            <div class="erp_card">
                                <h4 class="text-center">Extensibility</h4>
                                <p>Extend Odessa Core, build new applications, and accelerate time to market – easily.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="erp_card_wrap">
                            <div class="erp_card">
                                <h4 class="text-center">Omnichannel</h4>
                                <p>Customer, Partner and Lessor portals deliver unified CX to all stakeholders – at work, and on the go.</p>
                            </div>
						<div class="card_img_rte">
                                <img src="<?= base_url(); ?>assets/images/right_arrow.png" alt="right arrow" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ERP Section End Here -->
        <!-- Discover latest section Start here -->
        <div class="discover_banner">
            <div class="discover_contant_wrap">
                <div class="discover_contant">
                    <div class="discover_icons">
                        <ul>
                            <li>
                                <a href="javascript:void(0)"> <img src="<?= base_url(); ?>assets/images/discover_icon_1.png" alt="flower icon" /></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> <img src="<?= base_url(); ?>assets/images/discover_icon_2.png" alt="sun icon" /></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> <img src="<?= base_url(); ?>assets/images/discover_icon_3.png" alt="leaf icon" /></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> <img src="<?= base_url(); ?>assets/images/discover_icon_4.png" alt="icon" /></a>
                            </li>
                        </ul>
                    </div>
                    <h2 class="text-center wtcol">Discover more from the <span>latest platform release</span></h2>
                    <p class="text-center wtcol">New and enhanced features to help move your business forward. Check out highlights on the<br> blog, and log into the Customer Community for the full release notes.</p>
                    <div class="learn_more_btn">
                        <a href="https://odessainc.force.com/customer/" class="odc__btn odc__btn--primary odc__btn--md" target="_blank">Learn more</a>
                        <a href=" https://odessainc.force.com/customer/" class="odc__btn odc__btn--primary odc__btn--md" target="_blank">Release Notes</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Discover latest section End here -->
        <!-- Have Question section Start here -->
        <div class="have_question_wrap">
          <h2 class="text-center">Have questions?</h2>
          <p class="text-center">Get in touch to discuss the right mix of platform features <br>and services to power your business</p>
            <div class="inlineform">
			<!--	<form id ="letstalkForm1" action = "<?= base_url()?>get-started" method ="POST"> -->
                <div class="input">
                    <input type="email" placeholder="What’s your email?" name ="email" id="email1" required/>
                </div>
                <div class="inputbtn">
                    <input class="odc__btn odc__btn--primary odc__btn--md" type="submit" onclick="letstalkclick('email1'); return;" value="Let's Talk" />
                </div>
           <!--     </form> -->
            </div>

            <!-- Have Question section End here -->
            <!-- Design of Principle Screen End here -->
        </div>
        <link href="<?php echo base_url(); ?>assets/css/design_principles.css" rel='stylesheet' />
