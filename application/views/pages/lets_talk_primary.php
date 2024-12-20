
<style>
/* hide that honeypot, robots will still see it */
label[for="honeypot"], #honeypot {
  display: none;
  visibility: hidden;
}

	#page_number{
		color:red;
	}
	.capt{
		border-radius: 4px;
		border: 2px solid transparent;
	}
	.capt.error{
		border: 2px solid #ff495c;
		width: 306px;
		padding: 0;
		height: 80px;
	}
	.letstalkSecondryform .secnformCon textarea.form-control{
		height:92px;
	}
	
	@media only screen and (max-width: 1200px) {
		.g-recaptcha, #rc-imageselect{
		transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"
	}
	.rc-anchor-light.rc-anchor-normal, .rc-anchor-light.rc-anchor-compact{
		border: 0 !important;
		box-shadow:none !important;
		background:none !important
	}
	
}

</style>
<div id="wrapper"> 
	<!--Let's Talk Form Section start here-->
	<section class="letstalkformSection">
		<div class="container clearfix">
			<div class="letstalkformCon">
				<div class="row clearfix">
					<div class="col-sm-6 col-md-7">
						<div class="letstalkinfobox">
							<p>Our teams are here to help you in your digital transformation. Fill
								out the form to the right or call us so we can: </p>
							<ul>
								<li><span></span>Find the right solution for your asset finance business</li>
								<li><span></span>Explain options for licensing the Odessa Platform</li>
								<li><span></span>Connect you with helpful resources</li>
							</ul>
							<div class="letsAddress">
								<div class="addrow">
									<div class="counnm">North America</div>
									<div class="counnum">+1 (215) 231 9800</div>
								</div>
                                                                <div class="addrow">
									<div class="counnm">Europe</div>
									<div class="counnum">+33 (0)1 8824 11 85</div>
								</div>
                                                                 <div class="addrow">
									<div class="counnm">UK </div>
									<div class="counnum">+44 (0)20 4579 9595</div>
								</div>
								<div class="addrow">
									<div class="counnm">APAC</div>
									<div class="counnum">+91 80 4146 4321</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-5">
						<div class="letstalkform">
							<!--<iframe src="http://go.pardot.com/l/310001/2020-07-23/t159xm" width="100%" height="705" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>-->
							<!-- <form id = "primaryForm" action="https://go.odessainc.com/l/310001/2020-06-23/rg54yd" method="post"> -->
						<form id = "primaryForm" method="post" autocomplete="off">
					
						<label for="honeypot">Honeypot </label>
						<input id="honeypot" name="honeypot" size="40" type="text" value="" /><br>
						<div class="form-group">
                            <input class="form-control" name="first-name" id = "first_name" type="text" placeholder="First Name" required/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="last-name" id = "last_name" type="text" placeholder="Last Name" required />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="job-title" type="text" id="job_title" placeholder="Job Title" required/>
                        </div>
                        <div class="form-group">
                            <input class="form-control"  name="email" type="text" id="email" placeholder="Business Email" required />
                        </div>
                        <div class="form-group">
                            <input class="form-control"  name="company" type="text" id="company" placeholder="Company" required/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="phone" type="text" placeholder="Phone" id="phone" onkeypress="return isNumberKey(event)" required/>
                        </div>
                        <div class="form-group">
                            <select name="country" class="select selectpicker" onchange=""><option value=""></option>
								<option value="39461" selected="selected">Country</option>
								<option value="39463">United States</option>
								<option value="39465">Canada</option>
								<option value="39467">Afghanistan</option>
								<option value="39469">Albania</option>
								<option value="39471">Algeria</option>
								<option value="39473">American Samoa</option>
								<option value="39475">Andorra</option>
								<option value="39477">Angola</option>
								<option value="39479">Anguilla</option>
								<option value="39481">Antarctica</option>
								<option value="39483">Antigua and Barbuda</option>
								<option value="39485">Argentina</option>
								<option value="39487">Armenia</option>
								<option value="39489">Aruba</option>
								<option value="39491">Australia</option>
								<option value="39493">Austria</option>
								<option value="39495">Azerbaijan</option>
								<option value="39497">Bahamas</option>
								<option value="39499">Bahrain</option>
								<option value="39501">Bangladesh</option>
								<option value="39503">Barbados</option>
								<option value="39505">Belarus</option>
								<option value="39507">Belgium</option>
								<option value="39509">Belize</option>
								<option value="39511">Benin</option>
								<option value="39513">Bermuda</option>
								<option value="39515">Bhutan</option>
								<option value="39517">Bolivia</option>
								<option value="39519">Bosnia and Herzegovina</option>
								<option value="39521">Botswana</option>
								<option value="39523">Brazil</option>
								<option value="39525">British Indian Ocean Territory</option>
								<option value="39527">British Virgin Islands</option>
								<option value="39529">Brunei</option>
								<option value="39531">Bulgaria</option>
								<option value="39533">Burkina Faso</option>
								<option value="39535">Burundi</option>
								<option value="39537">Cambodia</option>
								<option value="39539">Cameroon</option>
								<option value="39541">Cape Verde</option>
								<option value="39543">Cayman Islands</option>
								<option value="39545">Central African Republic</option>
								<option value="39547">Chad</option>
								<option value="39549">Chile</option>
								<option value="39551">China</option>
								<option value="39553">Christmas Island</option>
								<option value="39555">Cocos (Keeling) Islands</option>
								<option value="39557">Colombia</option>
								<option value="39559">Comoros</option>
								<option value="39561">Congo</option>
								<option value="39563">Cook Islands</option>
								<option value="39565">Costa Rica</option>
								<option value="39567">Croatia</option>
								<option value="39569">Cuba</option>
								<option value="39571">Curaçao</option>
								<option value="39573">Cyprus</option>
								<option value="39575">Czech Republic</option>
								<option value="39577">Côte d’Ivoire</option>
								<option value="39579">Democratic Republic of the Congo</option>
								<option value="39581">Denmark</option>
								<option value="39583">Djibouti</option>
								<option value="39585">Dominica</option>
								<option value="39587">Dominican Republic</option>
								<option value="39589">Ecuador</option>
								<option value="39591">Egypt</option>
								<option value="39593">El Salvador</option>
								<option value="39595">Equatorial Guinea</option>
								<option value="39597">Eritrea</option>
								<option value="39599">Estonia</option>
								<option value="39601">Ethiopia</option>
								<option value="39603">Falkland Islands</option>
								<option value="39605">Faroe Islands</option>
								<option value="39607">Fiji</option>
								<option value="39609">Finland</option>
								<option value="39611">France</option>
								<option value="39613">French Guiana</option>
								<option value="39615">French Polynesia</option>
								<option value="39617">French Southern Territories</option>
								<option value="39619">Gabon</option>
								<option value="39621">Gambia</option>
								<option value="39623">Georgia</option>
								<option value="39625">Germany</option>
								<option value="39627">Ghana</option>
								<option value="39629">Gibraltar</option>
								<option value="39631">Greece</option>
								<option value="39633">Greenland</option>
								<option value="39635">Grenada</option>
								<option value="39637">Guadeloupe</option>
								<option value="39639">Guam</option>
								<option value="39641">Guatemala</option>
								<option value="39643">Guernsey</option>
								<option value="39645">Guinea</option>
								<option value="39647">Guinea-Bissau</option>
								<option value="39649">Guyana</option>
								<option value="39651">Haiti</option>
								<option value="39653">Honduras</option>
								<option value="39655">Hong Kong S.A.R., China</option>
								<option value="39657">Hungary</option>
								<option value="39659">Iceland</option>
								<option value="39661">India</option>
								<option value="39663">Indonesia</option>
								<option value="39665">Iran</option>
								<option value="39667">Iraq</option>
								<option value="39669">Ireland</option>
								<option value="39671">Isle of Man</option>
								<option value="39673">Israel</option>
								<option value="39675">Italy</option>
								<option value="39677">Jamaica</option>
								<option value="39679">Japan</option>
								<option value="39681">Jersey</option>
								<option value="39683">Jordan</option>
								<option value="39685">Kazakhstan</option>
								<option value="39687">Kenya</option>
								<option value="39689">Kiribati</option>
								<option value="39691">Kuwait</option>
								<option value="39693">Kyrgyzstan</option>
								<option value="39695">Laos</option>
								<option value="39697">Latvia</option>
								<option value="39699">Lebanon</option>
								<option value="39701">Lesotho</option>
								<option value="39703">Liberia</option>
								<option value="39705">Libya</option>
								<option value="39707">Liechtenstein</option>
								<option value="39709">Lithuania</option>
								<option value="39711">Luxembourg</option>
								<option value="39713">Macao S.A.R., China</option>
								<option value="39715">Macedonia</option>
								<option value="39717">Madagascar</option>
								<option value="39719">Malawi</option>
								<option value="39721">Malaysia</option>
								<option value="39723">Maldives</option>
								<option value="39725">Mali</option>
								<option value="39727">Malta</option>
								<option value="39729">Marshall Islands</option>
								<option value="39731">Martinique</option>
								<option value="39733">Mauritania</option>
								<option value="39735">Mauritius</option>
								<option value="39737">Mayotte</option>
								<option value="39739">Mexico</option>
								<option value="39741">Micronesia</option>
								<option value="39743">Moldova</option>
								<option value="39745">Monaco</option>
								<option value="39747">Mongolia</option>
								<option value="39749">Montenegro</option>
								<option value="39751">Montserrat</option>
								<option value="39753">Morocco</option>
								<option value="39755">Mozambique</option>
								<option value="39757">Myanmar</option>
								<option value="39759">Namibia</option>
								<option value="39761">Nauru</option>
								<option value="39763">Nepal</option>
								<option value="39765">Netherlands</option>
								<option value="39767">New Caledonia</option>
								<option value="39769">New Zealand</option>
								<option value="39771">Nicaragua</option>
								<option value="39773">Niger</option>
								<option value="39775">Nigeria</option>
								<option value="39777">Niue</option>
								<option value="39779">Norfolk Island</option>
								<option value="39781">North Korea</option>
								<option value="39783">Northern Mariana Islands</option>
								<option value="39785">Norway</option>
								<option value="39787">Oman</option>
								<option value="39789">Pakistan</option>
								<option value="39791">Palau</option>
								<option value="39793">Palestinian Territory</option>
								<option value="39795">Panama</option>
								<option value="39797">Papua New Guinea</option>
								<option value="39799">Paraguay</option>
								<option value="39801">Peru</option>
								<option value="39803">Philippines</option>
								<option value="39805">Pitcairn</option>
								<option value="39807">Poland</option>
								<option value="39809">Portugal</option>
								<option value="39811">Puerto Rico</option>
								<option value="39813">Qatar</option>
								<option value="39815">Romania</option>
								<option value="39817">Russia</option>
								<option value="39819">Rwanda</option>
								<option value="39821">Réunion</option>
								<option value="39823">Saint Barthélemy</option>
								<option value="39825">Saint Helena</option>
								<option value="39827">Saint Kitts and Nevis</option>
								<option value="39829">Saint Lucia</option>
								<option value="39831">Saint Pierre and Miquelon</option>
								<option value="39833">Saint Vincent and the Grenadines</option>
								<option value="39835">Samoa</option>
								<option value="39837">San Marino</option>
								<option value="39839">Sao Tome and Principe</option>
								<option value="39841">Saudi Arabia</option>
								<option value="39843">Senegal</option>
								<option value="39845">Serbia</option>
								<option value="39847">Seychelles</option>
								<option value="39849">Sierra Leone</option>
								<option value="39851">Singapore</option>
								<option value="39853">Slovakia</option>
								<option value="39855">Slovenia</option>
								<option value="39857">Solomon Islands</option>
								<option value="39859">Somalia</option>
								<option value="39861">South Africa</option>
								<option value="39863">South Korea</option>
								<option value="39865">South Sudan</option>
								<option value="39867">Spain</option>
								<option value="39869">Sri Lanka</option>
								<option value="39871">Sudan</option>
								<option value="39873">Suriname</option>
								<option value="39875">Svalbard and Jan Mayen</option>
								<option value="39877">Swaziland</option>
								<option value="39879">Sweden</option>
								<option value="39881">Switzerland</option>
								<option value="39883">Syria</option>
								<option value="39885">Taiwan</option>
								<option value="39887">Tajikistan</option>
								<option value="39889">Tanzania</option>
								<option value="39891">Thailand</option>
								<option value="39893">Timor-Leste</option>
								<option value="39895">Togo</option>
								<option value="39897">Tokelau</option>
								<option value="39899">Tonga</option>
								<option value="39901">Trinidad and Tobago</option>
								<option value="39903">Tunisia</option>
								<option value="39905">Turkey</option>
								<option value="39907">Turkmenistan</option>
								<option value="39909">Turks and Caicos Islands</option>
								<option value="39911">Tuvalu</option>
								<option value="39913">U.S. Virgin Islands</option>
								<option value="39915">Uganda</option>
								<option value="39917">Ukraine</option>
								<option value="39919">United Arab Emirates</option>
								<option value="39921">United Kingdom</option>
								<option value="39923">United States Minor Outlying Islands</option>
								<option value="39925">Uruguay</option>
								<option value="39927">Uzbekistan</option>
								<option value="39929">Vanuatu</option>
								<option value="39931">Vatican</option>
								<option value="39933">Venezuela</option>
								<option value="39935">Viet Nam</option>
								<option value="39937">Wallis and Futuna</option>
								<option value="39939">Western Sahara</option>
								<option value="39941">Yemen</option>
								<option value="39943">Zambia</option>
								<option value="39945">Zimbabwe</option>
								</select>
                        </div>
						<div class="form-group">
							<!--<select name="referring-source" class="select refer-source" onchange="">
								<option value=""></option>
								<option value="" selected="selected">How did you hear about us?</option>
								<option value="Advertisement">Advertisement</option>
								<option value="Event/Conference">Event/Conference</option>
								<option value="Google">Google</option>
								<option value="LinkedIn">LinkedIn</option>
								<option value="Another Client/Partner">Another Client/Partner</option>
								<option value="Blog/PR Publication">Blog/PR Publication</option>
								<option value="Social Media">Social Media</option>
								<option value="Other">Other</option>
							</select>-->
							<input class="form-control" name="referring-source" type="text" id="referring-source" placeholder="How did you hear about us?" required/>
						</div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="software-used"
                                placeholder="What software are you currently using?" required id="software-used"/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Message" id="message"></textarea>
                        </div>
						
						<div class="capt">
						<div class="g-recaptcha brochure__form__captcha" id="rcaptcha" data-sitekey="6LfYPqgkAAAAAEg_L0IHcYGkoK6vRSWKv1q4-5dP" data-action='submit' ></div>
							</div>
						
                        <div class="clearfix">
                            <button class="odc__btn odc__btn--primary odc__btn--xl btnmar" id="letstalk">Let’s Talk</button>
                        </div>
                    </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Let's Talk Form Section End here--> 
	
	<!--Company Office Ban Start Here-->
	<div class="letstalkban"></div>
	<!--Company Office Ban End Here--> 
	
	<!--Already Customer Section Start Here-->
	<div class="alreadyCustomerwrap">
		<div class="container clearfix">
			<h2 class="text-center">Already a customer?</h2>
			<div class="customerboxrow">
				<div class="row equalHMWrap eqWrap clearfix">
					<div class="col-sm-6 customerbox">
						<div class="cusconinfo">
							<div class="customericonrw">
								<div class="customericon"></div>
							</div>
							<h3>Customer Support</h3>
							<div class="boxnormaltxt">For help with your account and ensuring your experience is running
								smoothly, reach out to our global customer success teams.</div>
							<div class="lernmorerw"> <a class="odc__btn--more odc__btn--xl" href="https://odessainc.force.com/customer/">Chat with support</a> </div>
						</div>
					</div>
					<div class="col-sm-6 customerbox">
						<div class="cusconinfo">
							<div class="customericonrw">
								<div class="customericon community"></div>
							</div>
							<h3>Customer Community</h3>
							<div class="boxnormaltxt">Catch up on our latest release notes packed with new features and
								functionality, tap into our knowledge base, and join in on the conversation with Odessa
								users!</div>
							<div class="lernmorerw"> <a class="odc__btn--more odc__btn--xl" href="https://odessainc.force.com/customer/">Check it out</a> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="countryAddressSection">
				<div class="bluedotsview"></div>
				<div class="row clearfix">
					<div class="col-sm-7 col-md-6"> 
						<!--Office Headquarters Section-->
						<div class="countryAddinfo">
							<div class="headingrows"> <span class="customericon programs"></span>
								<h3>Learn about our Alliance Partner Programs</h3>
							</div>
							<p>Interested in partnering with Odessa? <span>Let’s chat about what it
								means to become an integration or strategic services partner.</span></p>
							<div class="letsbutton clearfix"> <a href="mailto:partners@odessainc.com">
								<button class="odc__btn odc__btn--primary odc__btn--xl">Let’s Talk</button>
								</a> </div>
							<div class="headquartersAddbox">
								<div class="headqAdd">
									<div class="headingrows"> <span class="customericon headq"></span>
										<h3 class="mntop">Odessa Headquarters</h3>
									</div>
									<div class="headqinfo">
										<p>Two Liberty Place</p>
										<p>50 South 16th Street, Suite 1900</p>
										<p>Philadelphia, PA 19102</p>
										<p> USA</p>
									</div>
								</div>
								<div class="headqAdd">
									<div class="headingrows">
										<h3 class="mntop pd">Bangalore, India</h3>
									</div>
									<div class="headqinfo">
										<p>GGR Towers</p>
										<p>18/2B, Bellandur Gate, Sarjapur Road</p>
										<p>Bangalore, Karnataka 560103</p>
										<p>India</p>
									</div>
								</div>
							</div>
						</div>
						<!--Office Headquarters Section End--> 
					</div>
					<div class="col-sm-5 col-md-6">
						<div class="officeviewentrybx"> <img src="<?=base_url(); ?>assets/images/odessa_ofice_view.jpg" alt="Office View" /> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Already Customer Section End Here-->
</div>
<script type="application/ld+json">
	{
		"@context" : "https://schema.org",
		"@type" : "Organization",
		"location": {
			"@type": "PostalAddress",
			"name": "Headquarters",
			"streetAddress": "Two Liberty Place, 50 S. 16th St, Ste 1900",
			"addressLocality": "Philadelphia",
			"addressRegion": "PA",
			"postalCode": "19102",
			"addressCountry": "USA"
		}
	}
</script>
<script src= "https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script> 
<script>
$(document).ready(function() {
	$.validator.addMethod("myusername", function(value, element) {
    return /^([\w-\.]+@(?!gmail\.com)(?!gmail\.co)(?!yahoo\.com)(?!hotmail\.com)(?!aol\.com)(?!hotmail\.co\.uk)(?!hotmail\.fr)(?!msn\.com)(?!yahoo\.fr)(?!wanadoo\.fr)(?!orange\.fr)(?!comcast\.net)(?!yahoo\.co\.uk)(?!yahoo\.com\.br)(?!yahoo\.co\.in)(?!live\.com)(?!rediffmail\.com)(?!free\.fr)(?!gmx\.de)(?!web\.de)(?!yandex\.ru)(?!ymail\.com)(?!libero\.it)(?!outlook\.com)(?!uol\.com\.br)(?!bol\.com\.br)(?!mail\.ru)(?!cox\.net)(?!hotmail\.it)(?!sbcglobal\.net)(?!sfr\.fr)(?!live\.fr)(?!verizon\.net)(?!live\.co\.uk)(?!googlemail\.com)(?!yahoo\.es)(?!ig\.com\.br)(?!live\.nl)(?!bigpond\.com)(?!terra\.com\.br)(?!yahoo\.it)(?!neuf\.fr)(?!yahoo\.de)(?!alice\.it)(?!rocketmail\.com)(?!att\.net)(?!laposte\.net)(?!facebook\.com)(?!bellsouth\.net)(?!yahoo\.in)(?!hotmail\.es)(?!charter\.net)(?!yahoo\.ca)(?!yahoo\.com\.au)(?!rambler\.ru)(?!hotmail\.de)(?!tiscali\.it)(?!shaw\.ca)(?!yahoo\.co\.jp)(?!sky\.com)(?!earthlink\.net)(?!optonline\.net)(?!freenet\.de)(?!t-online\.de)(?!aliceadsl\.fr)(?!virgilio\.it)(?!home\.nl)(?!qq\.com)(?!telenet\.be)(?!me\.com)(?!yahoo\.com\.ar)(?!tiscali\.co\.uk)(?!yahoo\.com\.mx)(?!voila\.fr)(?!gmx\.net)(?!mail\.com)(?!planet\.nl)(?!tin\.it)(?!live\.it)(?!ntlworld\.com)(?!arcor\.de)(?!yahoo\.co\.id)(?!frontiernet\.net)(?!hetnet\.nl)(?!live\.com\.au)(?!yahoo\.com\.sg)(?!zonnet\.nl)(?!club-internet\.fr)(?!juno\.com)(?!optusnet\.com\.au)(?!blueyonder\.co\.uk)(?!bluewin\.ch)(?!skynet\.be)(?!sympatico\.ca)(?!windstream\.net)(?!mac\.com)(?!centurytel\.net)(?!chello\.nl)(?!live\.ca)(?!aim\.com)(?!bigpond\.net\.au)([\w-]+\.)+[\w-]{2,4})?$/.test(value);
}, 'Free email addresses are not allowed.');


$.validator.addMethod("lettersonly", function(value, element) {
     return this.optional(element) || /^[a-z\s]+$/i.test(value);},"Please enter letters only."
  );

$.validator.addMethod("noSpace", function(value, element) { 
      return value == '' || value.trim().length != 0;  
    }, "No spaces allowed !! please don't leave it empty.");


    $.validator.addMethod("mobile", function(phone_number, element) {
phone_number = phone_number.replace(/\s+/g, ""); 
return this.optional(element) || phone_number.length >= 6 && phone_number.length <=15
phone_number.match(/^(\+?\d{1,4}[\s-])?(?!0+\s+,?$)\d{10}\s*,?$/);
}, "Mobile number should be of 6 to 15 digits.");



    $("#primaryForm").validate({
        rules: {
            "first-name":{
              required: true,
              maxlength: 50,
              lettersonly:true
            }, 
            "last-name":{
              required: true,
              maxlength: 50,
              lettersonly:true
            },
            email: {
                required: true,
                myusername: true,
            },
            phone: {
                required: true,
                minlength:6,
                maxlength:15,
                mobile:true
              },
            "job-title": {
                required: true
              },
            company: {
                required: true
            },
            "software-used": {
              required: true
            },
            country: {
              required: true
            }
        },
           messages: {
            "first-name": {
              required:"",
              maxlength:""
              }, 
            "last-name": {
              required:"",
              maxlength:""
              },           
            email: {
                required: "",
               },
            phone: {
                required: "",
                minlength:"",
				maxlength:""
               },
            "job-title": {
                required: ""
            },
            company: {
                required: ""
            },
            "software-used": {
              required: "",
            },
            country: {
              required: "",
            }
          },
         submitHandler: function (form) {
			
			var honeypot_val = $("#honeypot").val();
			if (honeypot_val != '' || grecaptcha.getResponse() == ""){
				if(honeypot_val != ''){
					window.location.reload();
					return false;
				}else{
					$(".capt").addClass("error");
					return false;
				}
			} else {
				if(honeypot_val == ''){
					$("#secondaryForm").submit();
					return true;
				}else{
					$(".capt").removeClass("error");
					return true
				}
			}

		
		}
    });
	$("#letstalk").click(function(){
		//console.log($("#honeypot").val())
		var honeypot_val = $("#honeypot").val();
		if(honeypot_val == ''){
			$('#primaryForm').attr('action', 'https://go.odessainc.com/l/310001/2023-09-29/3s36yzd');
			$("#primaryForm").submit();
			return true;
		}else{
			window.location.reload();
			return false;
		}
	})
	
	

    $("#first_name").keypress(function(event){
              var regex = new RegExp("^[a-zA-Z ]*$");
                  console.log(regex);
              var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
              if (!regex.test(key)) {
              event.preventDefault();
              return false;
              }
         });

         $("#last_name").keypress(function(event){
              var regex = new RegExp("^[a-zA-Z ]*$");
                  console.log(regex);
              var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
              if (!regex.test(key)) {
              event.preventDefault();
              return false;
              }
         });

         $('#primaryForm input').bind("cut copy paste",function(e) {
          e.preventDefault();
          });


    
});

$(function(){
  function rescaleCaptcha(){
    var width = $('.g-recaptcha').parent().width();
    var scale;
    if (width < 302) {
      scale = width / 302;
    } else{
      scale = 1; 
    }

    $('.g-recaptcha').css('transform', 'scale(' + scale + ')');
    $('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
    $('.g-recaptcha').css('transform-origin', '0 0');
    $('.g-recaptcha').css('-webkit-transform-origin', '0 0');
  }

  rescaleCaptcha();
  $( window ).resize(function() { rescaleCaptcha(); });

});

function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      
      }
</script>
<link href="<?= base_url(); ?>assets/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
<script src="<?= base_url(); ?>assets/js/bootstrap-select.js"></script> 
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    $(function(){
        $('.selectpicker').selectpicker();
    });
</script>