function cryoutLpBoxesRatios(){for(index=1;index<=cryout_theme_settings.lpboxratios.length;++index)jQuery(".lp-boxes-"+index+" .lp-box-image").keepRatio(cryout_theme_settings.lpboxratios[index-1])}function cryoutMenuAnimate(){jQuery("#access > .menu ul li > a:not(:only-child)").attr("aria-haspopup","true"),jQuery("#access li").on("mouseenter",function(){jQuery(this).addClass("menu-hover")}).on("mouseleave",function(){jQuery(this).removeClass("menu-hover")}),jQuery("#access ul").find("a").on("focus",function(){}),jQuery("#access ul").find("a").on("blur",function(){})}function cryoutBackToTop(){jQuery(window).on("scroll",function(){jQuery(this).scrollTop()>500?jQuery("#toTop").addClass("toTop-show"):jQuery("#toTop").removeClass("toTop-show"),jQuery(this).scrollTop()>70?jQuery(".anima-fixed-menu #site-header-main").addClass("header-fixed"):jQuery(".anima-fixed-menu #site-header-main").removeClass("header-fixed")}),jQuery("#toTop").on("click",function(t){return t.preventDefault(),jQuery("html, body").animate({scrollTop:0},500),!1})}function cryoutSearchFormAnimation(){var t=jQuery("#access .menu-search-animated > a"),e=jQuery(".menu-search-animated .searchform, .menu-main-search .icon-cancel"),o=jQuery("#access .menu-search-animated .s");t.on("click",function(t){t.preventDefault(),e.fadeIn(200,function(){o.trigger("focus"),o.css("outline","none")}),t.stopPropagation()}),e.on("click",function(t){t.stopPropagation()}),o.on("blur",function(){e.fadeOut(200)})}function cryoutMobileMenuInit(){jQuery("#nav-toggle").on("click",function(){jQuery("#mobile-menu").show().animate({left:"0"},500),jQuery("body").addClass("noscroll")}),jQuery("#nav-cancel").on("click",function(){jQuery("#mobile-menu").animate({left:"100%"},500,function(){jQuery(this).css("left","-100%").hide()}),jQuery("body").removeClass("noscroll")}),jQuery("#mobile-menu .menu-main-search").removeClass("menu-search-animated"),jQuery("#mobile-menu > div").append(jQuery("#sheader").clone()),jQuery("#mobile-menu #sheader").attr("id","smobile")}function cryoutInitNav(t){(container=jQuery(t)).find(".menu-item-has-children > a").after('<button class="dropdown-toggle" aria-expanded="false"></button>'),container.find(".page_item_has_children > a").after('<button class="dropdown-toggle" aria-expanded="false"></button>'),container.find(".current-menu-ancestor > button, .current-page-ancestor > button").addClass("toggle-on"),container.find(".current-menu-ancestor > .sub-menu, .current-page-ancestor > .sub-menu, .current-menu-ancestor .children, .current-page-ancestor .children").show(0).addClass("toggled-on"),container.find(".dropdown-toggle").on("click",function(t){var e=jQuery(this);t.preventDefault(),e.toggleClass("toggle-on"),e.hasClass("toggle-on")?(e.next(".children, .sub-menu").show(0).addClass("toggled-on"),e.prev("a").addClass("toggled-on")):(e.next(".children, .sub-menu").removeClass("toggled-on"),e.next(".children, .sub-menu").find(".children, .sub-menu").removeClass("toggled-on"),e.next(".children, .sub-menu").find("a").removeClass("toggled-on"),e.next(".children, .sub-menu").find(".dropdown-toggle").removeClass("toggled-on"),e.prev("a").removeClass("toggled-on"),setTimeout(function(){e.next(".children, .sub-menu").hide(0),e.next(".children, .sub-menu").find(".children, .sub-menu").hide(0)},600)),e.attr("aria-expanded","false"===e.attr("aria-expanded")?"true":"false")}),jQuery("body").on("click","#mobile-nav a",function(){jQuery("#nav-cancel i").trigger("click")})}function animateScroll(t){var t=jQuery(t);t.each(function(t,e){var e=jQuery(e);e.visible(!0)||e.addClass("animated-article")}),jQuery(window).on({scroll:function(e){t.each(function(t,e){var e=jQuery(e);e.visible(!0)&&e.removeClass("animated-article")})}})}function cryoutSocialTitles(){jQuery(".socials a").each(function(){jQuery(this).attr("title",jQuery(this).children().html()),jQuery(this).html("")})}function cryoutBodyClasses(){-1!=navigator.userAgent.indexOf("Safari")&&-1==navigator.userAgent.indexOf("Chrome")&&jQuery("body").addClass("safari"),jQuery("#content-masonry").length>0&&jQuery("body").addClass("anima-with-masonry")}function cryoutTabsWidget(){var t=jQuery(".cryout-wtabs-nav"),e=t.children("li");jQuery(".cryout-wtabs-container"),t.each(function(){var t=jQuery(this);t.next().children(".cryout-wtab").stop(!0,!0).children("li").hide().parent().siblings(t.find("a").attr("href")).children("li").show(),t.children("li").first().addClass("active").stop(!0,!0).show()}),e.on("click",function(t){var e=jQuery(this);e.siblings().removeClass("active").end().addClass("active"),e.parent().next().children(".cryout-wtab").stop(!0,!0).children("li").hide().parent().siblings(e.find("a").attr("href")).children("li").each(function(t){jQuery(this).fadeIn(200*(t+1))}),t.preventDefault()}).children(window.location.hash?'a[href="'+window.location.hash+'"]':"a:first").trigger("click")}function cryoutMasonry(){1==cryout_theme_settings.masonry&&1!=cryout_theme_settings.magazine&&void 0!==jQuery.fn.masonry&&jQuery("#content-masonry").masonry({itemSelector:"article",columnWidth:"article",percentPosition:!0,isRTL:cryout_theme_settings.rtl})}function cryoutPortfolioMasonry(){1==cryout_theme_settings.masonry&&void 0!==jQuery.fn.masonry&&jQuery(".jetpack-portfolio-shortcode").masonry({itemSelector:".portfolio-entry",columnWidth:".portfolio-entry:not(.hidey)",percentPosition:!0,isRTL:cryout_theme_settings.rtl})}function cryoutPortfolioFilter(){jQuery("body").on("click","#portfolio-filter > a",function(t){t.preventDefault(),jQuery("#portfolio-filter > a").removeClass("active"),jQuery(this).addClass("active");var e=jQuery(this).attr("data-slug");return jQuery("#portfolio-masonry .portfolio-entry").each(function(t,o){"all"==e?jQuery(o).removeClass("hidey").fadeIn("fast"):jQuery(o).hasClass("type-"+e)?jQuery(o).removeClass("hidey").fadeIn("fast"):jQuery(o).addClass("hidey").fadeOut("fast")}).promise().done(function(){cryoutPortfolioMasonry()}),!1})}function cryoutAutoScroll(t,e,o){t=window.document,e=window.history,o=window.location;var n=!!(e&&e.pushState),i={ANCHOR_REGEX:/^#[^ ]+$/,OFFSET_HEIGHT_PX:jQuery(".anima-fixed-menu #site-header-main").height()+40,init:function(){this.scrollToCurrent(),jQuery(window).on("hashchange",jQuery.proxy(this,"scrollToCurrent")),jQuery("body").on("click",".main a, nav ul li a",jQuery.proxy(this,"delegateAnchors"))},getFixedOffset:function(){return this.OFFSET_HEIGHT_PX},scrollIfAnchor:function(i,a){var r,s;return!!this.ANCHOR_REGEX.test(i)&&((r=t.getElementById(i.slice(1)))&&!jQuery(r).visible(!0)&&(s=jQuery(r).offset().top-this.getFixedOffset(),jQuery("html, body").animate({scrollTop:s}),n&&a&&e.pushState({},t.title,o.pathname+i)),!!r)},scrollToCurrent:function(t){this.scrollIfAnchor(window.location.hash)&&t&&t.preventDefault()},delegateAnchors:function(t){var e=t.target.closest("a");this.scrollIfAnchor(e.getAttribute("href"),!0)&&t.preventDefault()}};jQuery(t).ready(jQuery.proxy(i,"init"))}jQuery(document).ready(function(){cryoutLpBoxesRatios(),cryoutMobileMenuInit(),cryoutInitNav("#mobile-menu"),cryoutMenuAnimate(),cryoutBackToTop(),cryoutSearchFormAnimation(),cryoutSocialTitles(),cryoutBodyClasses(),cryoutTabsWidget(),cryoutPortfolioFilter(),(2==cryout_theme_settings.fitvids&&1==cryout_theme_settings.is_mobile||1==cryout_theme_settings.fitvids)&&jQuery(".entry-content").fitVids(),1==cryout_theme_settings.autoscroll&&cryoutAutoScroll()}),jQuery(window).on("scroll",function(){jQuery(this).scrollTop()>30?jQuery("#nav-fixed").addClass("nav-fixed-show"):jQuery("#nav-fixed").removeClass("nav-fixed-show")}),jQuery(window).on("load",function(){jQuery(window).trigger("scroll"),cryoutMasonry(),cryoutPortfolioMasonry()}),jQuery.fn.keepRatio=function(t){var e=jQuery(this),o=e.width()/t;e.css("height",o+"px"),jQuery(window).on("resize",function(){var o=e.width()/t;e.css("height",o+"px")})},jQuery.fn.mousedir=function(t){if(jQuery("body").hasClass("anima-landing-page")){jQuery(this);var e=jQuery(t),o={},n="direction-down";jQuery(document).on("mousemove",function(t){if(void 0!==o.x){var e=o.x-t.offsetX,i=o.y-t.offsetY;Math.abs(e)>Math.abs(i)&&e>0?n="direction-left":Math.abs(e)>Math.abs(i)&&e<0?n="direction-right":Math.abs(i)>Math.abs(e)&&i>0?n="direction-up":n="direction-down"}o={x:t.offsetX,y:t.offsetY}}),e.on("mouseenter",function(){jQuery(this).removeClass("in-direction-left in-direction-right in-direction-up in-direction-down out-direction-left out-direction-right out-direction-up out-direction-down"),jQuery(this).addClass("in-"+n)}),e.on("mouseleave",function(){jQuery(this).removeClass("in-direction-left in-direction-right in-direction-up in-direction-down out-direction-left out-direction-right out-direction-up out-direction-down"),jQuery(this).addClass("out-"+n)})}},jQuery.fn.visible=function(t){var e=jQuery(this),o=jQuery(window),n=o.scrollTop(),i=n+o.height(),a=e.offset().top,r=a+e.height();return(!0===t?a:r)<=i&&(!0===t?r:a)>=n},cryout_theme_settings.articleanimation&&animateScroll("#content-masonry > article"),function(t){"use strict";t.fn.fitVids=function(e){var o={customSelector:null,ignore:null};if(!document.getElementById("fit-vids-style")){var n=document.head||document.getElementsByTagName("head")[0],i=document.createElement("div");i.innerHTML='<p>x</p><style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>',n.appendChild(i.childNodes[1])}return e&&t.extend(o,e),this.each(function(){var e=['iframe[src*="player.vimeo.com"]','iframe[src*="youtube.com"]','iframe[src*="youtube-nocookie.com"]','iframe[src*="kickstarter.com"][src*="video.html"]',"object","embed"];o.customSelector&&e.push(o.customSelector);var n=".fitvidsignore, .wp-block-embed__wrapper";o.ignore&&(n=n+", "+o.ignore);var i=t(this).find(e.join(","));(i=(i=i.not("object object")).not(n)).each(function(){var e=t(this);if(!(e.parents(n).length>0)&&("embed"!==this.tagName.toLowerCase()||!e.parent("object").length)&&!e.parent(".fluid-width-video-wrapper").length){!e.css("height")&&!e.css("width")&&(isNaN(e.attr("height"))||isNaN(e.attr("width")))&&(e.attr("height",9),e.attr("width",16));var o="object"===this.tagName.toLowerCase()||e.attr("height")&&!isNaN(parseInt(e.attr("height"),10))?parseInt(e.attr("height"),10):e.height(),i=isNaN(parseInt(e.attr("width"),10))?e.width():parseInt(e.attr("width"),10);if(!e.attr("name")){var a="fitvid"+t.fn.fitVids._count;e.attr("name",a),t.fn.fitVids._count++}e.wrap('<div class="fluid-width-video-wrapper"></div>').parent(".fluid-width-video-wrapper").css("padding-top",100*(o/i)+"%"),e.removeAttr("height").removeAttr("width")}})})},t.fn.fitVids._count=0}(window.jQuery||window.Zepto),window.Element&&!Element.prototype.closest&&(Element.prototype.closest=function(t){var e,o=(this.document||this.ownerDocument).querySelectorAll(t),n=this;do for(e=o.length;--e>=0&&o.item(e)!==n;);while(e<0&&(n=n.parentElement));return n});