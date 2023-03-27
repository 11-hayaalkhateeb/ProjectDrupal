(function ($, Drupal) {
  Drupal.behaviors.myModuleBehavior = {
    attach: function (context, settings) {

        jQuery(document).ready(function( $ ) {
          $(".panel-default").click(function(e) {
            $(this).addClass("bgcolor").siblings().removeClass("bgcolor");
          });

          $( '#menu .navbar-nav a' ).on( 'click', function () {
            $( '#menu .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
            $( this ).parent( 'li' ).addClass( 'active' );
          });
          jQuery(document).ready(function( $ ) {
         $('.popup-youtube').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
          }); 
        });
          $(".loop").owlCarousel({
            autoplay: false,
            dots: false,
            loop: true,
            nav: true,
            lazyLoad : true,
            responsive: { 0: { items: 1 }, 500: { items: 2 }, 768: { items: 2 }, 900: { items: 3 }
            }
          });
            $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
            $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');

          $(".slider").owlCarousel({
            autoplay: false,
            dots: true,
            loop: true,
            nav: false,
            lazyLoad : true,
            responsive: { 0: { items: 1 }, 500: { items: 1 }, 768: { items: 1 }, 900: { items: 1 }
            }
          });
              

          $(".news").owlCarousel({
            loop: true,
            autoplay: true,
            items: 1,
            dots: false,
            autoplayHoverPause: true,
            animateOut: 'slideOutUp',
            animateIn: 'slideInUp'
          });
          new WOW().init();  
            $('.testimonial').owlCarousel({
            loop: true,
            margin: 10,
            responsive: {
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1
              }    
            }
          });

          $('.gallery-popup').magnificPopup({
            type: 'image',
            removalDelay: 300,
            mainClass: 'mfp-fade',
            gallery: {
              enabled: true
            },
            zoom: {
              enabled: false,
              duration: 300,
              easing: 'ease-in-out',
              opener: function(openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
              }
            }
          });
        });

        jQuery(document).ready(function( $ ) {
         $('.popup-youtube').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
          }); 

        });

        jQuery(window).scroll(function(){
            var scroll = $(window).scrollTop();
            if (scroll >= 100) {
                $("#sticky_menu").addClass("sticky");
            } else {
                $("#sticky_menu").removeClass("sticky");
            }
        });

        $(window).on('load', function(){
            var $container = $('.content-page');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            }); 
            $('.magazing-filter a').click(function(){
                $('.portfolioFilter .active').removeClass('active');
                $(this).addClass('active');
         
                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                 });
                 return false;
            }); 
        });


    }
  };
})(jQuery, Drupal);

