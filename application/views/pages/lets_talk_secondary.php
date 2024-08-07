<style>
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
   label[for="honeypot"], #honeypot {
   display: none;
   visibility: hidden;
   }
   @media only screen and (max-width: 1200px) {
   .g-recaptcha, #rc-imageselect{
   transform:scale(0.77);
   -webkit-transform:scale(0.77);
   transform-origin:0 0;
   -webkit-transform-origin:0 0;
   }
   .rc-anchor-light.rc-anchor-normal, .rc-anchor-light.rc-anchor-compact{
   border: 0 !important;
   box-shadow:none !important;
   background:none !important
   }
   }
</style>
<div id="wrapper">
<!--Let's Talk Secondary Section Start here-->
<section class="letstalkSecondrywrap">
   <!--Form Section Start Here-->
   <div class="letstalkSecondryform">
      <div class="container">
         <h1 class="wtcol text-center">Discuss your needs with our team </h1>
         <p class="wtcol text-center pdtb">Our sales team will provide feedback based on your requirements so <br>we can set your company up for success.</p>
         <div class="secnformCon">
            <!--<iframe src="http://go.pardot.com/l/310001/2020-07-30/tbr4b9" width="100%" height="500" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
               -->
            <!--<form id="secondaryForm" action="https://go.odessainc.com/l/310001/2021-10-26/2l9dpln" method="post">-->
            <!-- <form id="secondaryForm" action="https://go.odessainc.com/l/310001/2020-06-25/rj5m2v" method="post"> -->
            <form id="secondaryForm" method="post" autocomplete="off">
               <label for="honeypot">Honeypot </label>
               <input id="honeypot" name="honeypot" size="40" type="text" value="" /><br>
               <div class="row clearfix">
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input class="form-control" name="first-name" id = "first_name" type="text" placeholder="First Name" required/>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input class="form-control" name="last-name" id = "last_name" type="text" placeholder="Last Name" required/>
                     </div>
                  </div>
               </div>
               <div class="row clearfix">
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input class="form-control" name="job-title" type="text" placeholder="Job Title" required />
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input class="form-control" name="email" type="text" placeholder="Business Email" value ="<?php if(isset($email)) echo $email; ?>" required/>
                     </div>
                  </div>
               </div>
               <div class="row clearfix">
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input class="form-control" name="company" type="text" placeholder="Company" required/>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input class="form-control" name="phone" type="text" placeholder="Phone" onkeypress="return isNumberKey(event)" required/>
                     </div>
                  </div>
               </div>
               <div class="row clearfix">
                  <div class="col-sm-6">
				  <div class="form-group">
								<!-- <label for="country">Select Country:</label> -->
								<select name="country" class="select form-control selectpicker" id="country" required>
									<option value="" disabled selected>Select a country</option>
									<!-- <option value="Country">Country</option> -->
									<option value="United States">United States</option>
									<option value="Canada">Canada</option>
									<option value="Afghanistan">Afghanistan</option>
									<option value="Albania">Albania</option>
									<option value="Algeria">Algeria</option>
									<option value="American Samoa">American Samoa</option>
									<option value="Andorra">Andorra</option>
									<option value="Angola">Angola</option>
									<option value="Anguilla">Anguilla</option>
									<option value="Antarctica">Antarctica</option>
									<option value="Antigua and Barbuda">Antigua and Barbuda</option>
									<option value="Argentina">Argentina</option>
									<option value="Armenia">Armenia</option>
									<option value="Aruba">Aruba</option>
									<option value="Australia">Australia</option>
									<option value="Austria">Austria</option>
									<option value="Azerbaijan">Azerbaijan</option>
									<option value="Bahamas">Bahamas</option>
									<option value="Bahrain">Bahrain</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="Barbados">Barbados</option>
									<option value="Belarus">Belarus</option>
									<option value="Belgium">Belgium</option>
									<option value="Belize">Belize</option>
									<option value="Benin">Benin</option>
									<option value="Bermuda">Bermuda</option>
									<option value="Bhutan">Bhutan</option>
									<option value="Bolivia">Bolivia</option>
									<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
									<option value="Botswana">Botswana</option>
									<option value="Brazil">Brazil</option>
									<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
									<option value="British Virgin Islands">British Virgin Islands</option>
									<option value="Brunei">Brunei</option>
									<option value="Bulgaria">Bulgaria</option>
									<option value="Burkina Faso">Burkina Faso</option>
									<option value="Burundi">Burundi</option>
									<option value="Cambodia">Cambodia</option>
									<option value="Cameroon">Cameroon</option>
									<option value="Cape Verde">Cape Verde</option>
									<option value="Cayman Islands">Cayman Islands</option>
									<option value="Central African Republic">Central African Republic</option>
									<option value="Chad">Chad</option>
									<option value="Chile">Chile</option>
									<option value="China">China</option>
									<option value="Christmas Island">Christmas Island</option>
									<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
									<option value="Colombia">Colombia</option>
									<option value="Comoros">Comoros</option>
									<option value="Congo">Congo</option>
									<option value="Cook Islands">Cook Islands</option>
									<option value="Costa Rica">Costa Rica</option>
									<option value="Croatia">Croatia</option>
									<option value="Cuba">Cuba</option>
									<option value="Curaçao">Curaçao</option>
									<option value="Cyprus">Cyprus</option>
									<option value="Czech Republic">Czech Republic</option>
									<option value="Côte d’Ivoire">Côte d’Ivoire</option>
									<option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
									<option value="Denmark">Denmark</option>
									<option value="Djibouti">Djibouti</option>
									<option value="Dominica">Dominica</option>
									<option value="Dominican Republic">Dominican Republic</option>
									<option value="Ecuador">Ecuador</option>
									<option value="Egypt">Egypt</option>
									<option value="El Salvador">El Salvador</option>
									<option value="Equatorial Guinea">Equatorial Guinea</option>
									<option value="Eritrea">Eritrea</option>
									<option value="Estonia">Estonia</option>
									<option value="Ethiopia">Ethiopia</option>
									<option value="Falkland Islands">Falkland Islands</option>
									<option value="Faroe Islands">Faroe Islands</option>
									<option value="Fiji">Fiji</option>
									<option value="Finland">Finland</option>
									<option value="France">France</option>
									<option value="French Guiana">French Guiana</option>
									<option value="French Polynesia">French Polynesia</option>
									<option value="French Southern Territories">French Southern Territories</option>
									<option value="Gabon">Gabon</option>
									<option value="Gambia">Gambia</option>
									<option value="Georgia">Georgia</option>
									<option value="Germany">Germany</option>
									<option value="Ghana">Ghana</option>
									<option value="Gibraltar">Gibraltar</option>
									<option value="Greece">Greece</option>
									<option value="Greenland">Greenland</option>
									<option value="Grenada">Grenada</option>
									<option value="Guadeloupe">Guadeloupe</option>
									<option value="Guam">Guam</option>
									<option value="Guatemala">Guatemala</option>
									<option value="Guernsey">Guernsey</option>
									<option value="Guinea">Guinea</option>
									<option value="Guinea-Bissau">Guinea-Bissau</option>
									<option value="Guyana">Guyana</option>
									<option value="Haiti">Haiti</option>
									<option value="Honduras">Honduras</option>
									<option value="Hong Kong S.A.R., China">Hong Kong S.A.R., China</option>
									<option value="Hungary">Hungary</option>
									<option value="Iceland">Iceland</option>
									<option value="India">India</option>
									<option value="Indonesia">Indonesia</option>
									<option value="Iran">Iran</option>
									<option value="Iraq">Iraq</option>
									<option value="Ireland">Ireland</option>
									<option value="Isle of Man">Isle of Man</option>
									<option value="Israel">Israel</option>
									<option value="Italy">Italy</option>
									<option value="Jamaica">Jamaica</option>
									<option value="Japan">Japan</option>
									<option value="Jersey">Jersey</option>
									<option value="Jordan">Jordan</option>
									<option value="Kazakhstan">Kazakhstan</option>
									<option value="Kenya">Kenya</option>
									<option value="Kiribati">Kiribati</option>
									<option value="Kuwait">Kuwait</option>
									<option value="Kyrgyzstan">Kyrgyzstan</option>
									<option value="Laos">Laos</option>
									<option value="Latvia">Latvia</option>
									<option value="Lebanon">Lebanon</option>
									<option value="Lesotho">Lesotho</option>
									<option value="Liberia">Liberia</option>
									<option value="Libya">Libya</option>
									<option value="Liechtenstein">Liechtenstein</option>
									<option value="Lithuania">Lithuania</option>
									<option value="Luxembourg">Luxembourg</option>
									<option value="Macao S.A.R., China">Macao S.A.R., China</option>
									<option value="Macedonia">Macedonia</option>
									<option value="Madagascar">Madagascar</option>
									<option value="Malawi">Malawi</option>
									<option value="Malaysia">Malaysia</option>
									<option value="Maldives">Maldives</option>
									<option value="Mali">Mali</option>
									<option value="Malta">Malta</option>
									<option value="Marshall Islands">Marshall Islands</option>
									<option value="Martinique">Martinique</option>
									<option value="Mauritania">Mauritania</option>
									<option value="Mauritius">Mauritius</option>
									<option value="Mayotte">Mayotte</option>
									<option value="Mexico">Mexico</option>
									<option value="Micronesia">Micronesia</option>
									<option value="Moldova">Moldova</option>
									<option value="Monaco">Monaco</option>
									<option value="Mongolia">Mongolia</option>
									<option value="Montenegro">Montenegro</option>
									<option value="Montserrat">Montserrat</option>
									<option value="Morocco">Morocco</option>
									<option value="Mozambique">Mozambique</option>
									<option value="Myanmar">Myanmar</option>
									<option value="Namibia">Namibia</option>
									<option value="Nauru">Nauru</option>
									<option value="Nepal">Nepal</option>
									<option value="Netherlands">Netherlands</option>
									<option value="New Caledonia">New Caledonia</option>
									<option value="New Zealand">New Zealand</option>
									<option value="Nicaragua">Nicaragua</option>
									<option value="Niger">Niger</option>
									<option value="Nigeria">Nigeria</option>
									<option value="Niue">Niue</option>
									<option value="Norfolk Island">Norfolk Island</option>
									<option value="North Korea">North Korea</option>
									<option value="Northern Mariana Islands">Northern Mariana Islands</option>
									<option value="Norway">Norway</option>
									<option value="Oman">Oman</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Palau">Palau</option>
									<option value="Palestinian Territory">Palestinian Territory</option>
									<option value="Panama">Panama</option>
									<option value="Papua New Guinea">Papua New Guinea</option>
									<option value="Paraguay">Paraguay</option>
									<option value="Peru">Peru</option>
									<option value="Philippines">Philippines</option>
									<option value="Pitcairn">Pitcairn</option>
									<option value="Poland">Poland</option>
									<option value="Portugal">Portugal</option>
									<option value="Puerto Rico">Puerto Rico</option>
									<option value="Qatar">Qatar</option>
									<option value="Romania">Romania</option>
									<option value="Russia">Russia</option>
									<option value="Rwanda">Rwanda</option>
									<option value="Réunion">Réunion</option>
									<option value="Saint Barthélemy">Saint Barthélemy</option>
									<option value="Saint Helena">Saint Helena</option>
									<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
									<option value="Saint Lucia">Saint Lucia</option>
									<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
									<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
									<option value="Samoa">Samoa</option>
									<option value="San Marino">San Marino</option>
									<option value="Sao Tome and Principe">Sao Tome and Principe</option>
									<option value="Saudi Arabia">Saudi Arabia</option>
									<option value="Senegal">Senegal</option>
									<option value="Serbia">Serbia</option>
									<option value="Seychelles">Seychelles</option>
									<option value="Sierra Leone">Sierra Leone</option>
									<option value="Singapore">Singapore</option>
									<option value="Slovakia">Slovakia</option>
									<option value="Slovenia">Slovenia</option>
									<option value="Solomon Islands">Solomon Islands</option>
									<option value="Somalia">Somalia</option>
									<option value="South Africa">South Africa</option>
									<option value="South Korea">South Korea</option>
									<option value="South Sudan">South Sudan</option>
									<option value="Spain">Spain</option>
									<option value="Sri Lanka">Sri Lanka</option>
									<option value="Sudan">Sudan</option>
									<option value="Suriname">Suriname</option>
									<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
									<option value="Swaziland">Swaziland</option>
									<option value="Sweden">Sweden</option>
									<option value="Switzerland">Switzerland</option>
									<option value="Syria">Syria</option>
									<option value="Taiwan">Taiwan</option>
									<option value="Tajikistan">Tajikistan</option>
									<option value="Tanzania">Tanzania</option>
									<option value="Thailand">Thailand</option>
									<option value="Timor-Leste">Timor-Leste</option>
									<option value="Togo">Togo</option>
									<option value="Tokelau">Tokelau</option>
									<option value="Tonga">Tonga</option>
									<option value="Trinidad and Tobago">Trinidad and Tobago</option>
									<option value="Tunisia">Tunisia</option>
									<option value="Turkey">Turkey</option>
									<option value="Turkmenistan">Turkmenistan</option>
									<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
									<option value="Tuvalu">Tuvalu</option>
									<option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
									<option value="Uganda">Uganda</option>
									<option value="Ukraine">Ukraine</option>
									<option value="United Arab Emirates">United Arab Emirates</option>
									<option value="United Kingdom">United Kingdom</option>
									<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
									<option value="Uruguay">Uruguay</option>
									<option value="Uzbekistan">Uzbekistan</option>
									<option value="Vanuatu">Vanuatu</option>
									<option value="Vatican">Vatican</option>
									<option value="Venezuela">Venezuela</option>
									<option value="Viet Nam">Viet Nam</option>
									<option value="Wallis and Futuna">Wallis and Futuna</option>
									<option value="Western Sahara">Western Sahara</option>
									<option value="Yemen">Yemen</option>
									<option value="Zambia">Zambia</option>
									<option value="Zimbabwe">Zimbabwe</option>
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
                        <input class="form-control" name="referring-source" type="text" placeholder="How did you hear about us?" required/>
                     </div>
                     <div class="form-group">
                        <input class="form-control" name="software-used" type="text" placeholder="What software are you currently using?" />
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <textarea rows="3" cols="3" name="message" class="form-control" placeholder="Message" ></textarea>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="capt">
                        <div class="g-recaptcha brochure__form__captcha" id="rcaptcha" data-sitekey="6LfYPqgkAAAAAEg_L0IHcYGkoK6vRSWKv1q4-5dP" data-action='submit' ></div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="disclaimer">
                        By submitting this form, I understand Odessa will process my personal information in accordance with their <a href="<?php echo base_url(); ?>privacy-policy" target="_blank">privacy policy</a>. I understand I can withdraw my consent or update my preferences by clicking the unsubscribe link at the bottom of the email I will receive.
                        <label for="agree">
                        <span class="box"></span>
                        <input type="checkbox" id="agree"> I agree to be contacted and understand I can opt out at any time.
                        </label>
                     </div>
                  </div>
               </div>
               <div class="clearfix secbtntop">
                  <button class="odc__btn odc__btn--primary odc__btn--xl" id="letstalk">Let’s Talk</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!--Form Section End Here--> 
   <!--Get The Latest Start Here-->
   <div class="getthelatestwrap">
      <div class="container">
         <h2 class="text-center">Get the latest</h2>
         <p class="text-center">Learn why companies trust Odessa to help deliver great<br>
            stakeholder experiences.
         </p>
         <div class="latestboxwrap">
            <div class="latestboxCon">
               <div class="equalHMWrap eqWrap clearfix">
                  <div class="col-sm-6 npadrw">
                     <div class="getmainconbx">
                        <div class="getconbx"> </div>
                        <span class="dots"></span> 
                     </div>
                     <div class="getcontext"><a href="<?=base_url();?>blog/<?= $result['0']['post_name'] ?>">
                        <?= $result['0']['post_title'] ?>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-6 npadrw">
                     <div class="getmainconbx">
                        <div class="getconbx bluebg"> </div>
                        <span class="dots"></span> 
                     </div>
                     <div class="getcontext"><a href="<?=base_url();?>blog/<?= $result['1']['post_name'] ?>">
                        <?= $result['1']['post_title'] ?>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="lernmorerw"> <a class="odc__btn--more odc__btn--xl" href="<?= base_url();?>newsroom">More Resources</a> </div>
         </div>
      </div>
   </div>
   <!--Get The Latest End Here--> 
</section>
<!--Let's Talk Secondary Section Start here-->
<link href="<?php echo base_url(); ?>assets/css/lets_talk_secondary.css" rel='stylesheet' />
<script type="application/ld+json">
   {
   "@context": "https://schema.org",
   "address": {HQ PostalAddress},
   "location":[
   {
   "@type": "PostalAddress",
   "streetAddress": "Two Liberty Place, 50 S. 16th St, Ste 1900",
   "addressLocality": "Philadelphia",
   "addressRegion": "PA",
   "postalCode": "19102",
   "addressCountry": "USA"
   }, 
   "@type": "PostalAddress",
   "streetAddress": " GGR Towers, 18/2B, Bellandur Gate, Sarjapur Road",
   "addressLocality": "Bangalore",
   "addressRegion": "Karnataka",
   "postalCode": "560103",
   "addressCountry": India"
   ]
   },
   "contactPoint": {
   "@type": "ContactPoint",
   "telephone": "+1.215.231.9800"
   },
</script> 
<script src= "https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script> 
<script>
  $(document).ready(function() {
    // Custom validator for restricting free email addresses
    $.validator.addMethod("myusername", function(value, element) {
    return /^([\w-\.]+@(?!gmail\.com)(?!gmail\.co)(?!yahoo\.com)(?!hotmail\.com)(?!aol\.com)(?!hotmail\.co\.uk)(?!hotmail\.fr)(?!msn\.com)(?!yahoo\.fr)(?!wanadoo\.fr)(?!orange\.fr)(?!comcast\.net)(?!yahoo\.co\.uk)(?!yahoo\.com\.br)(?!yahoo\.co\.in)(?!live\.com)(?!rediffmail\.com)(?!free\.fr)(?!gmx\.de)(?!web\.de)(?!yandex\.ru)(?!ymail\.com)(?!libero\.it)(?!outlook\.com)(?!uol\.com\.br)(?!bol\.com\.br)(?!mail\.ru)(?!cox\.net)(?!hotmail\.it)(?!sbcglobal\.net)(?!sfr\.fr)(?!live\.fr)(?!verizon\.net)(?!live\.co\.uk)(?!googlemail\.com)(?!yahoo\.es)(?!ig\.com\.br)(?!live\.nl)(?!bigpond\.com)(?!terra\.com\.br)(?!yahoo\.it)(?!neuf\.fr)(?!yahoo\.de)(?!alice\.it)(?!rocketmail\.com)(?!att\.net)(?!laposte\.net)(?!facebook\.com)(?!bellsouth\.net)(?!yahoo\.in)(?!hotmail\.es)(?!charter\.net)(?!yahoo\.ca)(?!yahoo\.com\.au)(?!rambler\.ru)(?!hotmail\.de)(?!tiscali\.it)(?!shaw\.ca)(?!yahoo\.co\.jp)(?!sky\.com)(?!earthlink\.net)(?!optonline\.net)(?!freenet\.de)(?!t-online\.de)(?!aliceadsl\.fr)(?!virgilio\.it)(?!home\.nl)(?!qq\.com)(?!telenet\.be)(?!me\.com)(?!yahoo\.com\.ar)(?!tiscali\.co\.uk)(?!yahoo\.com\.mx)(?!voila\.fr)(?!gmx\.net)(?!mail\.com)(?!planet\.nl)(?!tin\.it)(?!live\.it)(?!ntlworld\.com)(?!arcor\.de)(?!yahoo\.co\.id)(?!frontiernet\.net)(?!hetnet\.nl)(?!live\.com\.au)(?!yahoo\.com\.sg)(?!zonnet\.nl)(?!club-internet\.fr)(?!juno\.com)(?!optusnet\.com\.au)(?!blueyonder\.co\.uk)(?!bluewin\.ch)(?!skynet\.be)(?!sympatico\.ca)(?!windstream\.net)(?!mac\.com)(?!centurytel\.net)(?!chello\.nl)(?!live\.ca)(?!aim\.com)(?!bigpond\.net\.au)([\w-]+\.)+[\w-]{2,4})?$/.test(value);
}, 'Free email addresses are not allowed.');


    // Custom validator for letters only
    $.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Please enter letters only.");

    // Custom validator to disallow spaces
    $.validator.addMethod("noSpace", function(value, element) {
        return value == '' || value.trim().length != 0;
    }, "No spaces allowed! Please don't leave it empty.");

    // Custom validator for mobile numbers
    $.validator.addMethod("mobile", function(phone_number, element) {
        phone_number = phone_number.replace(/\s+/g, "");
        return this.optional(element) || (phone_number.length >= 6 && phone_number.length <= 15 && phone_number.match(/^(\+?\d{1,4}[\s-])?(?!0+\s*,?$)\d{10}\s*,?$/));
    }, "Mobile number should be between 6 to 15 digits.");

    // Form validation rules
    $("#secondaryForm").validate({
        rules: {
            "first-name": {
                required: true,
                maxlength: 50,
                lettersonly: true
            },
            "last-name": {
                required: true,
                maxlength: 50,
                lettersonly: true
            },
            email: {
                required: true,
                myusername: true
            },
            phone: {
                required: true,
                minlength: 6,
                maxlength: 15,
                mobile: true
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
                required: "Please enter your first name",
                maxlength: "First name cannot exceed 50 characters"
            },
            "last-name": {
                required: "Please enter your last name",
                maxlength: "Last name cannot exceed 50 characters"
            },
            email: {
                required: "Please enter your email address",
            },
            phone: {
                required: "Please enter your phone number",
                minlength: "Phone number should be at least 6 digits",
                maxlength: "Phone number should not exceed 15 digits"
            },
            "job-title": {
                required: "Please enter your job title"
            },
            company: {
                required: "Please enter your company name"
            },
            "software-used": {
                required: "Please enter the software you use"
            },
            country: {
                required: "Please select your country"
            }
        },
        submitHandler: function(form) {
            var honeypot_val = $("#honeypot").val();
            if (honeypot_val != '' || grecaptcha.getResponse() == "") {
                if (honeypot_val != '') {
                    window.location.reload();
                    return false;
                } else {
                    $(".capt").addClass("error");
                    return false;
                }
            } else {
                if (honeypot_val == '') {
                    $("#primaryForm").submit();
                    return true;
                } else {
                    $(".capt").removeClass("error");
                    return true;
                }
            }
        }
    });

    // Custom event listener for the form submit
    $('form').on('submit', function(event) {
        const countrySelect = document.getElementById('country');
        if (countrySelect.value === '') {
			$("#country").addClass("error");
            event.preventDefault();
        }
    });

    // Event listener for the 'letstalk' button
    $("#letstalk").click(function() {
        var honeypot_val = $("#honeypot").val();
        if (honeypot_val == '') {
            // Check if the disclaimer checkbox is checked
            if ($('#agree').is(':checked')) {
                $('#secondaryForm').attr('action', 'https://go.odessainc.com/l/310001/2023-09-29/3s36yzd');
                $("#secondaryForm").submit();
                $('.box').hide();
                return true;
            } else {
                // Show an alert or handle the case when the checkbox is not checked
                $('.box').show();
                return false;
            }
        } else {
            window.location.reload();
            return false;
        }
    });

    // Restrict certain characters in 'first_name' and 'last_name' fields
    $("#first_name, #last_name").keypress(function(event) {
        var regex = new RegExp("^[a-zA-Z ]*$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });

    // Prevent cut, copy, paste on form inputs
    $('#secondaryForm input').bind("cut copy paste", function(e) {
        e.preventDefault();
    });

    // Rescale reCAPTCHA on window resize
    function rescaleCaptcha() {
        var width = $('.g-recaptcha').parent().width();
        var scale = width < 302 ? width / 302 : 1;
        $('.g-recaptcha').css('transform', 'scale(' + scale + ')');
        $('.g-recaptcha').css('-webkit-transform', 'scale(' + scale + ')');
        $('.g-recaptcha').css('transform-origin', '0 0');
        $('.g-recaptcha').css('-webkit-transform-origin', '0 0');
    }

    rescaleCaptcha();
    $(window).resize(function() { rescaleCaptcha(); });
});

// Restrict non-numeric input in phone number field
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

</script>
<style amp-custom>
   @import url('../../../../assets/css/bootstrap-select.min.css?v=<?php echo time() ?>');
</style>
<script src="<?= base_url(); ?>assets/js/bootstrap-select.js"></script> 
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
   $(function(){
   	$('.selectpicker').selectpicker();
   });
</script>