function coloumnGridPanel(){$(".memberwrapperdiv .leaderdivwr").on("click",function(){let e=$(this).parent().position(),i=$(".memberblock").position(),l=e.left-i.left;var s,t,r=$(this).closest(".memberblock"),a=r.parent().attr("data-href"),o=($(".memberwrapperdiv").innerWidth()-$(".memberwrapperdiv").width())/2,m=$(".memberwrapperdiv").outerWidth()-2*o;buffer=m<=991?30:150,console.log(m,"af"),a?redirection(a):(s=r.attr("data-member-id"))&&(r.hasClass("selected")?($(".memberwrapperdiv .memberblock").removeClass("selected"),$("#"+s).slideUp()):($(".memberwrapperdiv .memberblock").removeClass("selected"),$(".leadershipmembermodal").hide(),$("#"+s).css("width",m-buffer),$("#"+s).css("left","-"+l+"px"),t=r.offset().top-60,$("html,body").scrollTop(t),$("#"+s).slideDown(200,function(){r.addClass("selected")})))}),$(".leadershipmembermodal .close").click(function(){var e=$(this).attr("data-href");$(this).closest(".leadershipmembermodal").slideUp(),$(".memberwrapperdiv .memberblock").removeClass("selected"),e&&(window.location.href=e)})}function tabBx(e){"block"==$("#"+e).css("display")||$(".mobileviewmenu").hide(),$("#"+e).show()}$(function(){setTimeout(function(){$(window).scroll(function(){$(window).scrollTop()>=300?$(".navbar").addClass("sticky-header"):$(".navbar").removeClass("sticky-header")}),$("#nav-icon1").click(function(){$(".menuviewwrap").show(),$(this).toggleClass("open"),$(".menuviewwrap").css({width:"100%",visibility:"visible"}),"block"==$(".menuviewwrap").css("display")&&$("html").toggleClass("sidePanel")}),$(".navbar-toggle").click(function(){$(this).toggleClass("active"),$("html").toggleClass("navfixed")}),$("#clients").owlCarousel({loop:!0,margin:5,nav:!1,dots:!0,autoplay:!0,animateOut:"fadeOut",mouseDrag:!1,touchDrag:!1,responsive:{0:{items:1},768:{items:1},1024:{items:1}}}),$(window).resize(function(){let e=$(".memberblock").position();var i=($(".memberwrapperdiv").innerWidth()-$(".memberwrapperdiv").width())/2,l=$(".memberwrapperdiv").outerWidth()-2*i,s=$(".memberblock.selected .leadershipmembermodal");buffer=l<=768?30:150,s.length&&(s.css("left",-s.closest(".memberblock").offset().left+i+parseInt(e.left)+"px"),s.css("width",l-buffer))}),coloumnGridPanel(),$(".mobile_view_menu ul li a").click(function(){$(".mobile_view_menu ul li a").removeClass("active"),$(this).addClass("active")})},4e3)});