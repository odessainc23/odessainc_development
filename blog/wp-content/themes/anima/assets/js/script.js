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
  var newUrl = "https://www.odessainc.com/whitepaper/unlocking-xaas-success-signup";

  // Change the href attribute of the anchor tag
  $("#post-811 .continue-reading-link").attr("href", newUrl);
  $("#post-811 a").attr("href", newUrl);


  var newUrl2 = "https://www.odessainc.com/whitepaper/future-ready-asset-finance-api";

  // Change the href attribute of the anchor tag
  $("#post-808 .continue-reading-link").attr("href", newUrl2);
  $("#post-808 a").attr("href", newUrl2);


  var newUrl3 = "https://www.odessainc.com/handbook/next-gen-auto-finance-platform";

  // Change the href attribute of the anchor tag
  $("#post-829 .continue-reading-link").attr("href", newUrl3);
  $("#post-829 a").attr("href", newUrl3);


  var newUrl4 = "https://www.odessainc.com/handbook/cx-asset-finance";

// Change the href attribute of the anchor tag
$("#post-895 .continue-reading-link").attr("href", newUrl4);
$("#post-895 a").attr("href", newUrl4);


var newUrl5 = "https://www.odessainc.com/whitepaper/master-as-a-service-offerings-asset-finance-whitepaper";

  // Change the href attribute of the anchor tag
  $("#post-928 .continue-reading-link").attr("href", newUrl5);
  $("#post-928 a").attr("href", newUrl5);


});



function tabBx(i) {
    "block" == $("#" + i).css("display") || $(".mobileviewmenu").hide(), $("#" + i).show()
}