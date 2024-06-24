<style>
	.legal-page{
		margin:120px 0 0
	}
  .checklist {
  font-size: 1.2rem;
  list-style-type: none;
  margin: 10px 20px 30px 20px !important;
  padding: 0;
}

.checkmark, ul.checklist li {
  position: relative;
  padding-left: 0.8em;
}
.checkmark::before, ul.checklist li::before {
  content: "";
  display: inline-block;
  position: absolute;
  left: -0.5em;
  top: 0;
  transform: rotate(45deg);
  height: 1em;
  width: 0.5em;
  border-bottom: 0.15em solid #00abc8;
  border-right: 0.15em solid #00abc8;
}

	</style>


<div id="wrapper">
  <div class="container">
    <div class="legal-page">
    <div class="legal-pheader">
				<h1 class="legal-phtitle">Cookie Notice</h1>
				<!-- <span class="legal-phicon"></span> -->
			</div>
      <section class="legal-ppost">
       
		<div class="legal-ppcontent">
        
          <div id="Collect" class="legal-pcontent legal-ppcontab">
			<!-- <h3></h3> -->
            <p>A cookie is a small piece of data (text file) that a website – when visited by a user – asks your browser to store on your device in order to remember information about you, such as your language preference or login information. Those cookies are set by us and called first-party cookies. We also use third-party cookies – which are cookies from a domain different than the domain of the website you are visiting – for our advertising and marketing efforts.</p>
            <p>More specifically, we use cookies and other tracking technologies for the following purposes:</p>
            <ul class="checklist">
              <li>Assisting you in navigation;</li>
              <li>Assisting in registration to our events, login, and your ability to provide feedback;</li>
              <li>Analyzing your use of our products, services or applications;</li>
              <li>Assisting with our promotional and marketing efforts. (including behavioral advertising)</li>
            </ul>
            <p>Below is a detailed list of the cookies we use on our Website. Our Website is scanned with our cookie scanning tool regularly to maintain a list as accurate as possible. We classify cookies in the following categories:</p>
            <ul class="checklist">
              <li>Strictly Necessary Cookies</li>
              <li>Performance Cookies</li>
              <li>Functional Cookies</li>
              <li>Targeting Cookies</li>
            </ul>
			
            </div>
          </div>
        
      </section>
    </div>
  </div>

  <!--terms section end here -->
</div>
<script>
  var MenuHeight = $('.navbar-default').outerHeight() + 10;
  var HeaderHeight = $('.navbar-default').outerHeight() + 10;
  var NavItems = $('.legal-ppnavlist').find('a');
  var scrollItems = NavItems.map(function() {
    var item = $($(this).attr("href"));
    if (item.length) {
      return item;
    }
  });
  $(document).ready(function() {
    $('.legal-ppnavlist a').bind('click', function(e) {
      e.preventDefault();
      var target = $(this).attr("href");
      $('html, body').stop().animate({
        scrollTop: $(target).offset().top - MenuHeight
      }, 500);
      return false;
    });
  });
  // Bind to scroll
  $(window).scroll(function() {
    var fromTop = $(this).scrollTop();
    var cur = scrollItems.map(function() {
      if ($(this).attr('id') == 'OnPremise') {
        return this;
      } else {
        if ($(this).offset().top - HeaderHeight - MenuHeight <= fromTop) return this;
      }
    });
    // Get the id of the current element
    cur = cur[cur.length - 1];
    var id = cur && cur.length ? cur[0].id : "";
    NavItems.removeClass('active').filter("[href='#" + id + "']").addClass('active');
  });
</script>




