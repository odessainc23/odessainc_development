$(function() {
    $(".dropdown").on("show.bs.dropdown", function() {
        $(this).find(".dropdown-menu").first().stop(!0, !0).fadeIn()
    }), $(".dropdown").on("hide.bs.dropdown", function() {
        $(this).find(".dropdown-menu").first().stop(!0, !0).fadeOut()
    }), $("#nav-icon1").click(function() {
        $(".menuviewwrap").show(), $(this).toggleClass("open"), $(".menuviewwrap").css({
            width: "100%",
            visibility: "visible"
        }), "block" == $(".menuviewwrap").css("display") && $("html").toggleClass("sidePanel")
    }), $(".navbar-toggle").click(function() {
        $(this).toggleClass("active"), $("html").toggleClass("navfixed")
    }), $(".mobile_view_menu ul li a").click(function() {
        $(".mobile_view_menu ul li a").removeClass("active"), $(this).addClass("active")
    })
      // New URL
  var newUrl = "https://dev.odessainc.com/whitepaper/unlocking-xaas-success-signup";

  // Change the href attribute of the anchor tag
  $("#post-1036 .continue-reading-link").attr("href", newUrl);
  $("#post-1036 a").attr("href", newUrl);


  var newUrl2 = "https://dev.odessainc.com/whitepaper/future-ready-asset-finance-api";

  // Change the href attribute of the anchor tag
  $("#post-1040 .continue-reading-link").attr("href", newUrl2);
  $("#post-1040 a").attr("href", newUrl2);


  var newUrl3 = "https://dev.odessainc.com/handbook/next-gen-auto-finance-platform";

  // Change the href attribute of the anchor tag
  $("#post-1058 .continue-reading-link").attr("href", newUrl3);
  $("#post-1058 a").attr("href", newUrl3);



  var newUrl4 = "https://dev.odessainc.com/handbook/cx-asset-finance";

  // Change the href attribute of the anchor tag
  $("#post-1108 .continue-reading-link").attr("href", newUrl4);
  $("#post-1108 a").attr("href", newUrl4);


  $('.postid-1117 .pr_announcementimg').append($('<div class="photo-cap"><b>People in the photo (left to right) are:</b><br> Ankit Parikh, AVP - Leasing Business, Tata Motors Finance; Campbell Clout, MD - APMEA, Odessa; Anand Bang, COO – Sales & Marketing, Tata Motors Finance; Neeloy Majumder, COO – Technology, Tata Motors Finance</div>'))
});




function tabBx(i) {
    "block" == $("#" + i).css("display") || $(".mobileviewmenu").hide(), $("#" + i).show()
}