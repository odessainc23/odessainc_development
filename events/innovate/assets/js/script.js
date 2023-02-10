$(document).ready(function(){

    if( $(".toggle .toggle-title").hasClass('active') ){

      $(".toggle .toggle-title.active").closest('.toggle').find('.toggle-inner').show();

    }

    $(".toggle .toggle-title").click(function(){

      if( $(this).hasClass('active') ){

        $(this).removeClass("active").closest('.toggle').find('.toggle-inner').slideUp(200);

      }

      else{ $(this).addClass("active").closest('.toggle').find('.toggle-inner').slideDown(200);

      }

    });



    $('#innovate').owlCarousel({

       loop: true,

       margin: 10,

       nav: false,

       dots: true,

       autoplay: true,

       responsive: {

           0: {

               items: 1

           },

           768: {

               items: 1

           },

           1024: {

               items: 1

           }

       }

   });



   $('#toggle').click(function() {

    $('#overlay').addClass('open');

    $('html').toggleClass('open');

   });



   $('.closebtnnav').click(function() {

    $('#overlay').removeClass('open');

    $('html').removeClass('open');

   });



  });

