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

// Target the container where the Wistia video will be embedded
const videoContainer = document.getElementById('video-container');

// Create the first script element for Wistia JSONP
const script1 = document.createElement('script');
script1.src = "https://fast.wistia.com/embed/medias/rcpjx3ys63.jsonp";
script1.async = true;

// Create the second script element for Wistia external assets
const script2 = document.createElement('script');
script2.src = "https://fast.wistia.com/assets/external/E-v1.js";
script2.async = true;

// Create the transcript script for the video
const transcriptScript2 = document.createElement('script');
transcriptScript2.src = "https://fast.wistia.net/assets/external/transcript.js";
transcriptScript2.async = true;

// Create the div structure for the Wistia video
const wistiaDiv = document.createElement('div');
wistiaDiv.className = "wistia_responsive_padding";
wistiaDiv.style = "padding:56.25% 0 0 0;position:relative;";
wistiaDiv.innerHTML = `
    <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
        <div class="wistia_embed wistia_async_rcpjx3ys63 seo=false videoFoam=true" style="height:100%;position:relative;width:100%;">
            <div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;">
                <img src="https://fast.wistia.com/embed/medias/rcpjx3ys63/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" />
            </div>
        </div>
    </div>
`;

// Create the transcript div for the video
const transcriptDiv2 = document.createElement('wistia-transcript');
transcriptDiv2.setAttribute('media-id', 'rcpjx3ys63'); // Add the Wistia ID of the video

// Append the Wistia div, transcript, and scripts to the container
videoContainer.appendChild(wistiaDiv);
videoContainer.appendChild(transcriptDiv2);
document.body.appendChild(script1);
document.body.appendChild(script2);
document.body.appendChild(transcriptScript2);




 // Target the container where the second Wistia video will be embedded
 const videoContainer2 = document.getElementById('video-container-2'); // Ensure this container exists in your HTML

 // Create the first script element for Wistia JSONP for the second video
 const script3 = document.createElement('script');
 script3.src = "https://fast.wistia.com/embed/medias/x5ueou8su9.jsonp"; // Use the Wistia ID of the second video
 script3.async = true;
 
 // Create the second script element for Wistia external assets for the second video
 const script4 = document.createElement('script');
 script4.src = "https://fast.wistia.com/assets/external/E-v1.js";
 script4.async = true;
 
 // Create the transcript script for the second video
 const transcriptScript = document.createElement('script');
 transcriptScript.src = "https://fast.wistia.net/assets/external/transcript.js";
 transcriptScript.async = true;
 
 // Create the div structure for the second Wistia video
 const wistiaDiv2 = document.createElement('div');
 wistiaDiv2.className = "wistia_responsive_padding";
 wistiaDiv2.style = "padding:56.25% 0 0 0;position:relative;"; // Maintain aspect ratio of 16:9
 wistiaDiv2.innerHTML = `
    <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
       <div class="wistia_embed wistia_async_x5ueou8su9 seo=false videoFoam=true" style="height:100%;position:relative;width:100%">
          <div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;">
             <img src="https://fast.wistia.com/embed/medias/x5ueou8su9/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" />
          </div>
       </div>
    </div>
 `;
 
 // Create the transcript div for the second video
 const transcriptDiv = document.createElement('wistia-transcript');
 transcriptDiv.setAttribute('media-id', 'x5ueou8su9'); // Add the Wistia ID of the video
 
 // Append the second Wistia div, transcript, and scripts to the container
 videoContainer2.appendChild(wistiaDiv2);
 videoContainer2.appendChild(transcriptDiv);
 document.body.appendChild(script3);
 document.body.appendChild(script4);
 document.body.appendChild(transcriptScript);
 




  

function tabBx(i) {
    "block" == $("#" + i).css("display") || $(".mobileviewmenu").hide(), $("#" + i).show()
}