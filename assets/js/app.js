
var $ = $.noConflict();
$(function () {
    "use strict";

    /*--------------------------Bootstrap tooltips / toast / popovers------------------------- */
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();
    $('#toast-index').toast('show')
    
    $('.toast').toast('hide')
    $("[data-toast-id='toast-bottom-left']").on('click',function(){
        $('#toast-bottom-left').toast('show');
      });
      $("[data-toast-id='toast-bottom-right']").on('click',function(){
        $('#toast-bottom-right').toast('show');
      });
      $("[data-toast-id='toast-top-left']").on('click',function(){
        $('#toast-top-left').toast('show');
      });
      $("[data-toast-id='toast-top-right']").on('click',function(){
        $('#toast-top-right').toast('show');
      });
    /** --------------------------------preloader-----------------------------------**/
    $(window).preloader({
        delay: 500
    });

        /** --------------------------------sticky header-----------------------------------**/
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 90) {
            $(".header-sticky").addClass("sticky-active");
        } else {
            $(".header-sticky").removeClass("sticky-active");
        }
    });


    /** --------------------------------back to top-----------------------------------**/
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 300) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    $('.scrollToTop').on("click", function () {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });


    /** --------------------------------nav search-----------------------------------**/
    jQuery('.icon-search, .search-close').on("click", function () {
        jQuery('.search-form-nav').animate({ height: 'toggle' }, 500);
    });


    /** --------------------------------smooth scroll-----------------------------------**/
    $('.smooth-scroll a').on('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 68
        }, 1000, 'easeInOutExpo');
        event.preventDefault();
    });


    /** --------------------------------swiper slider for testimonials and main slider-----------------------------------**/
    
    /** main full-width slider**/
    var swiper = new Swiper('.swiper-fullwidth', {
        loop: true,
        grabCursor: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
/** Testimonials slider**/
    var swiper = new Swiper('.swiper-text', {
        loop: true,
        grabCursor: true,
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
        },
    });
     /** Partners slider**/
      var swiper = new Swiper('.swiper-partners', {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
        },
      });

      /* swiper parallax slider */
      var swiper = new Swiper('.swiper-parallax', {
        speed: 600,
        parallax: true,
        pagination: {
          el: '.swiper-pagination',
          dynamicBullets: true,
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    /** --------------------------------Scroll animations-----------------------------------**/
    new WOW().init();
    ({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 30,
        live: true
    });

    /** --------------------------------Masonry -----------------------------------**/
    var $container = $('#mas-boxes');
    $container.imagesLoaded(function () {
        $container.masonry({
            itemSelector: '.mas-boxes-inner'
        });
    });


    /** --------------------------------Magnific Gallery Popup-----------------------------------**/
    $('.popup-container').each(function () {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            mainClass: 'mfp-with-zoom',
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out',
                opener: function (openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });
    });

    /* video background Ytp.mb.Player */
    $(function(){
        $(".youtube-video").YTPlayer({showControls:false,loop:true});
      });
    /** --------------------------------Video Popup-----------------------------------**/
    $('.modal-video').magnificPopup({
        type: 'iframe'
    });
});