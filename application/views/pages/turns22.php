
<link href="<?php echo base_url(); ?>assets/css/modular_styles.css?v=3452345" rel="stylesheet" type="text/css" />
<style>
	.turns22,
.turns22 .block-number {
  background: #fff;
  display: -ms-flexbox;
}
.turns22 .section-hero .hero-content .hero-copy .hero-paragraph a,
.turns22 .section-lesson-3 a,
.turns22 .section-lesson-7-8 a {
  color: #b8e3ec;
  font-family: MaisonNeue-Demi;
}
@font-face {
  font-family: MaisonNeue-Demi;
  src: url("../fonts/MaisonNeue-Demi.woff") format("woff");
  font-weight: 400;
  font-style: normal;
}
.turns22 {
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
}
.turns22 a {
  color: #00abc8;
}
.turns22 .wrap-inner {
  margin: 0 auto;
  overflow: visible;
  position: relative;
  width: 85%;
}
.turns22 .section {
  min-height: 100vh;
  width: 100%;
}
.turns22 .text-link:hover {
  text-decoration: none;
}
.turns22 .section-grid {
  display: -ms-flexbox;
  display: flex;
}
.turns22 .section-grid .grid-column {
  display: -ms-flexbox;
  display: flex;
  width: 50%;
}
.turns22 .section-grid .grid-column .column-inner-wrap {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: start;
  justify-content: flex-start;
  text-align: center;
  width: calc(1083px / 2);
}
@media only screen and (max-width: 1083px) {
  .turns22 .section-grid .grid-column .column-inner-wrap {
    width: calc(975px / 2);
  }
}
.turns22 .section-grid .grid-column:nth-child(odd) {
  -ms-flex-pack: end;
  justify-content: flex-end;
}
.turns22 .section-grid .grid-column:nth-child(2n) {
  -ms-flex-pack: start;
  justify-content: flex-start;
}
.turns22 .block-number {
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-item-align: start;
  align-self: flex-start;
  display: flex;
  font-size: 24px;
  height: 95px;
  -ms-flex-pack: center;
  justify-content: center;
  margin: 0 auto;
  text-align: center;
  width: 95px;
}
.turns22 .block-copy {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -ms-flex-pack: center;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 75px;
}
.turns22 .block-header {
  color: #fff;
  font-size: 40px;
  margin: 0 0 30px;
  line-height: 1.3;
}
.turns22 .block-paragraph {
  color: #fff;
  font-size: 16px;
  margin: 0;
}
.turns22 .block-hashtag {
  color: #03363d;
  font-weight: 700;
  margin: 30px 0 0;
}
.turns22 .handhelds-show {
  display: none;
}
.turns22 .handhelds-hide {
  display: block;
}
.turns22 .section-hero {
  background: #00abc8;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
}
.turns22 .section-hero .wrap-inner {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: row;
  flex-direction: row;
  padding: 100px 0;
}
.turns22 .section-hero .hero-number {
  text-align: center;
  width: 50%;
}
.turns22 .section-hero .hero-number-image {
  margin-top: 100px;
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
  width: 95%;
  height:auto;
}
.turns22 .section-hero .hero-logo {
  margin: 0 auto 40px;
  width: 30px;
}
.turns22 .section-hero .hero-arrow-link {
  margin: 60px auto 0;
  transition: 0.2s;
  width: 30px;
}
.turns22 .section-hero .hero-arrow-link img {
  width: 100%;
}
.turns22 .section-hero .hero-arrow-link:focus,
.turns22 .section-hero .hero-arrow-link:hover {
  transform: translateY(5px);
}
.turns22 .section-hero .hero-content {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  text-align: center;
  width: 50%;
}
.turns22 .section-hero .hero-content .hero-copy {
  color: #fff;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  width: 100%;
}
.turns22 .section-hero .hero-content .hero-copy .hero-heading {
  margin: 0;
  color: #fff;
  font-size: 26px;
  font-weight: 500;
}
.turns22 .section-hero .hero-content .hero-copy .hero-subheading {
  font-size: 46px;
  margin: 40px auto 20px;
  max-width: 380px;
  color: #fff;
}
.turns22 .section-hero .hero-content .hero-copy .hero-paragraph {
  font-size: 17px;
  margin: 0 auto;
  max-width: 380px;
  color: #fff;
}
.turns22 .section-intro {
  background: #fff;
  min-height: auto;
  padding: 100px 0;
  text-align: center;
}
.turns22 .section-intro .block-header {
  color: #2a2d36;
  margin: 0 auto;
  max-width: 500px;
}
.turns22 .section-lesson-1 .grid-column:nth-child(odd) {
  background: url(../assets/images/turns22/lesson_1_bg.jpg) top left/cover no-repeat
    #fff;
}
.turns22 .section-lesson-1 .grid-column:nth-child(2n),
.turns22 .section-lesson-7-8 .grid-column:nth-child(odd) {
  background: #0075a3;
}
.turns22 .section-lesson-1 .block-copy {
  padding-top: 100px;
  padding-bottom: 100px;
}
.turns22 .section-lesson-1 .block-header {
  max-width: 280px;
}
.turns22 .section-lesson-1 .block-paragraph {
  max-width: 320px;
}
.turns22 .section-lesson-2 .grid-column:nth-child(odd),
.turns22 .section-lesson-7-8 .grid-column:nth-child(2n) {
  background: #263746;
}
.turns22 .section-lesson-2 .grid-column:nth-child(2n) .tweet-shirt {
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
  background: #fff;
  max-width: 70%;
  margin: 0 auto;
}
.turns22 .section-lesson-2 .block-header {
  max-width: 200px;
}
.turns22 .section-lesson-2 a {
  font-family: MaisonNeue-Demi;
}
.turns22 .section-lesson-3 {
  background-image: url(../assets/images/turns22/lesson_3_bg.jpg);
  background-size: cover;
  -ms-flex-align: center;
  align-items: center;
  background-position: center;
  background-repeat: no-repeat;
  display: -ms-flexbox;
  display: flex;
}
.turns22 .section-lesson-3 .lesson-content {
  background: #296fb7;
  margin: 150px auto;
  padding: 0 30px 50px;
  width: 75%;
}
@media only screen and (max-width: 975px) {
  .turns22 .section-grid .grid-column .column-inner-wrap {
    width: calc(778px / 2);
  }
  .turns22 .block-copy {
    padding: 50px;
  }
  .turns22 .block-header {
    font-size: 36px;
  }
  .turns22 .block-paragraph {
    padding: 0 30px;
  }
  .turns22 .section-hero .hero-content .hero-copy .hero-paragraph {
    width: 82%;
  }
  .turns22 .section-lesson-3 .lesson-content {
    width: auto;
  }
}
.turns22 .section-lesson-3 .block-header {
  font-size: 30px;
  max-width: 420px;
  margin: 30px auto 0;
}
.turns22 .section-lesson-3 .block-copy {
  padding: 20px 0;
  text-align: center;
}
.turns22 .section-lesson-3 .block-paragraph {
  margin: 30px auto 0;
  max-width: 300px;
}
.turns22 .section-lesson-3 a {
  font-size: 18px;
}
.turns22 .section-lesson-4-5 .grid-column:nth-child(odd) .block-header {
  max-width: 350px;
}
.turns22 .section-lesson-4-5 .grid-column:nth-child(2n) .block-paragraph,
.turns22 .section-lesson-4-5 .grid-column:nth-child(odd) .block-paragraph {
  max-width: 330px;
}
.turns22 .section-lesson-4-5 .grid-column:nth-child(2n) .block-header,
.turns22 .section-lesson-7-8 .grid-column:nth-child(2n) .block-header,
.turns22 .section-lesson-7-8 .grid-column:nth-child(odd) .block-header {
  max-width: 300px;
  margin-bottom: 10px;
}
.turns22
  .section-lesson-4-5
  .grid-column:nth-child(2n)
  .block-header:first-child {
  margin-bottom: 0;
}
.turns22 .section-lesson-4-5 .block-header,
.turns22 .section-lesson-4-5 .block-paragraph {
  color: #2b2e37;
}
.turns22 .section-lesson-4-5 .block-paragraph a {
  color: #0075a3;
  font-family: MaisonNeue-Demi;
}
.turns22 .section-lesson-10 .block-number,
.turns22 .section-lesson-4-5 .grid-column:nth-child(odd) {
  background: #b8e3ec;
}
.turns22 .section-lesson-4-5 .grid-column:nth-child(2n) {
  background: #89d3e0;
}
.turns22 .section-lesson-6 .block-header {
  max-width: 280px;
  margin: 0 auto;
}
.turns22 .section-lesson-6 .grid-column:nth-child(odd) {
  background-image: url(../assets/images/turns22/lesson_6_bg.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
@media (min--moz-device-pixel-ratio: 1.3),
  (-webkit-min-device-pixel-ratio: 1.3),
  (min-device-pixel-ratio: 1.3),
  (min-resolution: 1.3dppx) {
  .turns22 .section-lesson-6 .grid-column:nth-child(odd) {
    background-image: url(../assets/images/turns22/lesson_6_bg.jpg);
    background-size: cover;
  }
}
.turns22 .section-lesson-6 .grid-column:nth-child(2n) {
  background: #296fb7;
}
.turns22 .section-lesson-9 .grid-column:nth-child(odd) {
  background: #00abc8;
}
.turns22 .section-lesson-9 .grid-column:nth-child(2n) {
  background: #fff;
}
.turns22 .section-lesson-9 .content-logo {
  margin: 10px 20px;
  width: 180px;
}
.turns22 .section-lesson-9 .block-header {
  color: #fff;
  max-width: 280px;
}
.turns22 .section-lesson-9 .block-paragraph {
  color: #263746;
  font-size: 24px;
  margin-bottom: 10px;
  max-width: 300px;
}
.turns22 .section-lesson-9 .block-paragraph-bold {
  font-family: MaisonNeue-Bold;
}
.turns22 .section-lesson-9 .block-tag {
  color: #00acc8;
}
.turns22 .section-lesson-9 ul {
  width: 85%;
  margin: 20px auto;
  text-align: left;
  counter-reset: number;
  list-style-type: none;
}
.turns22 .section-lesson-9 ul li:before {
  position: absolute;
  left: 0;
  counter-increment: number;
  content: counter(number) "\a0";
}
.turns22 .section-lesson-9 ul li {
  position: relative;
  max-width: 280px;
  color: #2b2e37;
  padding-left: 15px;
}
.turns22 .section-lesson-10 .grid-column:nth-child(2n) {
  background: url(../assets/images/turns22/lesson_10_bg.png) top right/cover no-repeat;
}
.turns22 .section-lesson-10 .block-header,
.turns22 .section-lesson-11 .block-paragraph {
  color: #2b2e37;
  max-width: 300px;
}
.turns22 .section-lesson-10 .block-paragraph {
  color: #2b2e37;
  margin: 10px auto 40px;
  max-width: 250px;
}
.turns22 .section-lesson-11 {
  background-color: #f3f3f5;
}
.turns22 .section-lesson-11 .grid-column:nth-child(odd) {
  background: url(../assets/images/turns22/lesson_11_bg.png) center right/cover
    no-repeat #f3f3f5;
}
.turns22 .section-lesson-11 .complicated-relationships {
  margin: 0 auto 35px;
  width: 75%;
}
.turns22 .section-lesson-11 .block-header {
  max-width: 300px;
  color: #2b2e37;
}
.turns22 .section-lesson-11 .odc__btn {
  margin-top: 40px;
}
.turns22 .section-casablanca {
  background: url(../assets/images/turns22/casblanca_bg.jpg) 0 0 / cover no-repeat;
  display: -ms-flexbox;
  display: flex;
  text-align: center;
}
.turns22 .section-casablanca .wrap-inner {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
}
.turns22 .section-casablanca .block-header {
  color: #fff;
  margin: 0 auto 40px;
  max-width: 650px;
}
.turns22 .section-casablanca .casablanca-logo-image {
  height: auto;
  width: 60px;
}
.turns22 .section-snapchat {
  display: -ms-flexbox;
  display: flex;
  text-align: center;
}
.turns22 .section-snapchat .wrap-inner {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: justify;
  justify-content: space-between;
}
.turns22 .section-snapchat .snapchat-follow {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -ms-flex-pack: center;
  justify-content: center;
}
.turns22 .section-snapchat .snapchat-logo {
  height: 150px;
  margin: 0 auto;
  width: 150px;
}
.turns22 .section-snapchat .block-header {
  color: #2b2e37;
  font-size: 28px;
  margin: 40px 0 0;
}
@media only screen and (max-width: 700px) {
  .turns22 .section-grid {
    -ms-flex-direction: column;
    flex-direction: column;
  }
  .turns22 .section-grid .grid-column {
    min-height: 100vh;
    width: 100%;
  }
  .turns22 .section-grid .grid-column .column-inner-wrap {
    width: 100%;
  }
  .turns22 .block-copy {
    padding: 50px 15%;
  }
  .turns22 .block-header {
    font-size: 28px;
  }
  .turns22 .block-paragraph {
    padding: 0;
  }
  .turns22 .block-hashtag {
    margin: 30px 0;
  }
  .turns22 .handhelds-show {
    display: block;
  }
  .turns22 .handhelds-hide,
  .turns22 .section-lesson-11 .grid-column:nth-child(odd) {
    display: none;
  }
  .turns22 .section-hero .wrap-inner {
    -ms-flex-direction: column;
    flex-direction: column;
    padding: 60px 0;
  }
  .turns22 .section-hero .hero-number {
    height: auto;
    width: 100%;
    -ms-flex-direction: column;
    flex-direction: column;
  }
  .turns22 .section-hero .hero-number-image {
    margin: 40px auto;
    max-width: 90%;
  }
  .turns22 .section-hero .hero-logo {
    margin-bottom: 30px;
  }
  .turns22 .section-hero .hero-content {
    padding: 20px 0;
    width: 100%;
  }
  .turns22 .section-hero .hero-content .hero-copy .hero-heading,
  .turns22 .section-snapchat .block-header {
    font-size: 22px;
  }
  .turns22 .section-hero .hero-content .hero-copy .hero-subheading {
    font-size: 40px;
  }
  .turns22 .section-intro {
    padding: 80px 15%;
  }
  .turns22 .section-lesson-2 .grid-column:nth-child(2n) .tweet-shirt {
    max-width: 100%;
  }
  .turns22 .section-lesson-3 .block-header {
    font-size: 22px;
    width: 100%;
  }
  .turns22 .section-lesson-9 .content-logo {
    margin-bottom: 40px;
  }
}
.turns22 .section-snapchat .block-paragraph {
  color: #2b2e37;
  font-size: 13px;
  margin: 0 auto 30px;
  max-width: 700px;
}

	
	</style>

<article class="turns22">
	<section class="section section-hero">
		<div class="wrap-inner">
			<div class="hero-number">
				<a class="handhelds-show" href="<?php echo base_url(); ?>">
					<img class="hero-logo" src="<?php echo base_url(); ?>assets/images/turns22/o_logo.png" alt="Logo: OdessaInc">
				</a>
				<img class="hero-number-image" src="<?php echo base_url(); ?>assets/images/turns22/aniv_22.png" alt="The number 22">
			</div>
			<div class="hero-content">
				<a class="handhelds-hide" href="<?php echo base_url(); ?>">
					<img class="hero-logo" src="<?php echo base_url(); ?>assets/images/turns22/o_logo.png" alt="Logo: OdessaInc">
				</a>
				<div class="hero-copy">
					<h1 class="hero-heading">Odessa is 22 years old</h1>
					<h2 class="hero-subheading">Like a fine vintage, we get better with age</h2>
					<p class="hero-paragraph">It’s true... we’re now 22, and we’ve seen some things. Back when we started, the <a href="https://512pixels.net/wp-content/uploads/S3/2012-12-13-bondi-blue.jpeg" target="_blank">Apple iMac</a> was the colorful craze in technology and a little something called <a href="https://mybeeponline.com/wp-content/uploads/2018/09/98google-1.jpg" target="_blank">Google</a> launched at Stanford. From a college dorm in the midwest, Odessa’s co-founders were about to start their own journey. Times sure have changed. We have too.</p>
				</div>
				<a class="hero-arrow-link js-down-arrow" href="javascript:void(0)"><img class="hero-arrow-image" src="<?php echo base_url(); ?>/assets/images/turns22/arrow.png" alt="Icon: down arrow"></a>
			</div>
		</div>
	</section>
	<section class="section section-intro js-section-intro">
		<h2 class="block-header">Here are a few of the lessons we’ve learned along the&nbsp;way.</h2>
	</section>
	<section class="section section-grid section-lesson-1">
		<div class="grid-column"> </div>
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">01</div>
				<div class="block-copy">
					<h3 class="block-header">Always think of the customer.</h3>
					<p class="block-paragraph">It’s a partnership not just a purchase. Stick with the customer for smooth sailing, choppy waters, and everything in between. Just steer clear of icebergs.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-grid section-lesson-2">
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">02</div>
				<div class="block-copy">
					<h3 class="block-header">Don’t test releases in production. Ever.</h3>
					<p class="block-paragraph"><span class="SL_swap" id="turns-10-blog-link"><a href="<?php echo base_url(); ?>assets/images/production-testing.jpg" target="_blank">People will be annoyed</a></span></p>
				</div>
			</div>
		</div>
		<div class="grid-column"> <img class="tweet-shirt" src="<?php echo base_url(); ?>assets/images/turns22/lesson_2_bg.jpg" alt="Photo: T-shirt"> </div>
	</section>
	<section class="section section-lesson-3">
		<div class="wrap-inner">
			<div class="lesson-content">
				<div class="block-number">03</div>
				<div class="block-copy">
					<h3 class="block-header">Business teams are made of people, and those people have care and compassion for their communities.</h3>
					<p class="block-paragraph">Keep community engagement front and center. Be mindful, responsible, and generous with time and profit.</p>
					<p class="block-paragraph block-paragraph-bold"><a class="text-link" href="https://www.odessainc.com/blog/non-profit-foundation-launch/" target="_blank">See what we’re doing</a></p>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-grid section-lesson-4-5">
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">04</div>
				<div class="block-copy">
					<h3 class="block-header">All companies will make mistakes from time to time. It’s ok.</h3>
					<p class="block-paragraph">Stay nimble, stay open, and above all else – fail fast and keep moving.</p>
					<p class="block-hashtag">#callitagile</p>
				</div>
			</div>
		</div>
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">05</div>
				<div class="block-copy">
					<h3 class="block-header">The B’s in B2B still represent people.</h3>
					<h3 class="block-header">Make selling enterprise software fun.</h3>
					<p class="block-paragraph">
						<a class="text-link" href="<?php echo base_url(); ?>/assets/images/turns22/who-we.jpg" target="_blank">How we do</a>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-grid section-lesson-6">
		<div class="grid-column"> </div>
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">06</div>
				<div class="block-copy">
					<h3 class="block-header">Celebrate all the wins – the small and the big ones.</h3>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-grid section-lesson-7-8">
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">07</div>
				<div class="block-copy">
					<h3 class="block-header">Ups and downs are great for trampolines. In business, aim for a straight line up and to the right.</h3>
					<p class="block-paragraph block-paragraph-bold"><a class="text-link" href="https://www.odessainc.com/blog/odessa-recognized-on-inc5000-list" target="_blank">Just ask Inc 5000</a></p>
				</div>
			</div>
		</div>
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">08</div>
				<div class="block-copy">
					<h3 class="block-header">Being good people attracts more good people.</h3>
					<p class="block-paragraph"><a class="text-link" href="https://www.odessainc.com/blog/navigating-virtual-interviews-remote-work/" target="_blank">Here’s how we pick ‘em</a></p>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-grid section-lesson-9">
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">09</div>
				<div class="block-copy">
					<h3 class="block-header">Make sure to name your company something truly <i>epic</i>.</h3>
				</div>
			</div>
		</div>
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number"></div>
				<div class="block-copy">
					<img class="content-logo" src="<?php echo base_url(); ?>assets/images/logo.png" alt="Logo: OdessaInc">
					<p class="block-paragraph block-paragraph-bold">né odyssey</p>
					<p class="block-tag">noun  |  od•ys•sey  |  \ä-də-sē\</p>
					<ul>
						<li>: a long wandering or voyage usually marked by many changes of fortune</li>
						<li>: an intellectual or spiritual wandering or quest • an odyssey of self-discovery</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-grid section-lesson-10">
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">10</div>
				<div class="block-copy">
					<h3 class="block-header">Be innovative. Think bigger. Build solutions that work well together.</h3>
					<p class="block-paragraph">Like a masterful game of Tetris, but for asset finance.</p>
					<a href="https://www.odessainc.com/platform" class="odc__btn odc__btn--primary odc__btn--md" target="_blank">Explore the Platform</a>
				</div>
			</div>
		</div>
		<div class="grid-column"> </div>
	</section>
	<section class="section section-grid section-lesson-11">
		<div class="grid-column"> </div>
		<div class="grid-column">
			<div class="column-inner-wrap">
				<div class="block-number">11</div>
				<div class="block-copy">
					<img class="complicated-relationships handhelds-show" src="<?php echo base_url(); ?>assets/images/turns22/lesson_11_bg.png" alt="Illustration: people working together">
					<h3 class="block-header">Growth can get complicated. Keep it simple.</h3>
					<p class="block-paragraph">We’ve shared ours. Now your turn. Let us be a part of your transformation.</p>
					<a href="https://www.odessainc.com/get-started" class="odc__btn odc__btn--primary odc__btn--md" target="_blank">Get Started</a>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-casablanca">
		<div class="wrap-inner">
			<h3 class="block-header">Here’s to the next 22 trips around the sun – we hope you’ll join us</h3>
			<a class="casablanca-logo-link" href="<?php echo base_url(); ?>">
				<img class="casablanca-logo-image" src="<?php echo base_url(); ?>assets/images/turns22/o_logo.png" alt="Logo: OdessaInc">
			</a>
		</div>
	</section>
	<section class="section section-snapchat">
		<div class="wrap-inner">
			<div class="snapchat-follow"> <img class="snapchat-logo" src="<?php echo base_url(); ?>assets/images/turns22/instagram_logo.png" alt="Logo: Snapchat">
				<h3 class="block-header">Follow us <a class="text-link" href="https://www.instagram.com/odessainc/" target="_blank">@OdessaInc</a></h3>
			</div>
			<p class="block-paragraph">iMac is a trademark or registered trademark of Apple, Inc. Google is a trademark or registered trademark of Alphabet, Inc. Tetris is a trademark or registered trademark of The Tetris Company, LLC.</p>
		</div>
	</section>
</article>
<script>
	$(document).ready(function() {
		$('.js-down-arrow').on('click', function() {
			$('html, body').animate({
				scrollTop: $('.js-section-intro').offset().top
			}, 500);
		});
	});
</script>