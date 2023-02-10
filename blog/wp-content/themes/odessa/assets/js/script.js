$(function () {
    $('.dropdown').on('show.bs.dropdown', function() {
        $(this).find('.dropdown-menu').first().stop(true, true).fadeIn();
      });
      $('.dropdown').on('hide.bs.dropdown', function() {
        $(this).find('.dropdown-menu').first().stop(true, true).fadeOut();
      });
      $('#nav-icon1').click(function(){
        $('.menuviewwrap').show();
        $(this).toggleClass('open');
		$('.menuviewwrap').css({'width':'100%','visibility':'visible'});
		if($('.menuviewwrap').css('display')=='block'){
        	$('html').toggleClass('sidePanel');
		}
    });
    
     $(".navbar-toggle").click(function() {
        $(this).toggleClass("active");
       $("html").toggleClass("navfixed");
     });
     $('.mobile_view_menu ul li a').click(function(){
        $('.mobile_view_menu ul li a').removeClass('active');
        $(this).addClass('active');
    });

    
});

function tabBx(id){
    if($('#'+id).css('display')=='block'){
     $('#'+id).show();
    }else{
     $('.mobileviewmenu').hide();
     $('#'+id).show();
    }
   }

   
