jQuery(document).ready(function($){


  // vpw = $(window).width();
  // vph = $(window).height();
 
  // $('.start').height(vph + 60);
  // $('.full-page').height(vph  - 60);
  // $('.inner-wrap').css("margin-bottom", vph);

  ///// Questions Accordion /////

  $('#accordion').find('.accordion-toggle').click(function(e){
    if($(this).hasClass('active')) {
      e.preventDefault();
    } else {
      $('.accordion-toggle.active').removeClass('active');
      $(this).toggleClass('active');

      $(this).next().slideToggle('fast');
      $(".accordion-content").not($(this).next()).slideUp('fast');
    }
  });


  ///// VIDEO CONTRONLS /////

  $(".play-video").click(function(e){
    e.preventDefault();

    $(".background-image, .intro .row").fadeOut();
    $(".video-wrapper").animate({opacity: "1"}, 1350);

  });


  ///// FIT TEXT  /////
  $(".start h1, .intro h1, .the-end h1").fitText();


  ///// TOP BAR COLOR CHANGER  /////
  $(window).scroll(function(e) {
    var el = $('.top-bar'),
        top = $('#change-header').offset().top - $(window).scrollTop();
        changeblack = $('#change-header-black').offset().top - $(window).scrollTop();
        changewhite = $('#change-header-white').offset().top - $(window).scrollTop();
        
    if (top > 60 && el.is('.bg-white')){
        $(el).removeClass('bg-white');
    } 
    if (top < 60 && !el.is('.bg-white')){
        $(el).addClass('bg-white');
    }
    if (changeblack < 60 && el.is('.bg-white')){
        $(el).removeClass('bg-white');
    } 
    if (changewhite < 60 && !el.is('.bg-white')){
        $(el).addClass('bg-white');
    }
  });


  ///// MENU SCROLL /////
  $(".name a").click(function(e) {
    e.preventDefault();
      $('html, body').animate({
          scrollTop: 0
      }, 1000);
  });

  $(".manifest").click(function(e) {
    e.preventDefault();
      $('html, body').animate({
          scrollTop: $(".manifest-list").offset().top - 59
      }, 1000);
  });

  $(".faq").click(function(e) {
    e.preventDefault();
      $('html, body').animate({
          scrollTop: $(".qanda").offset().top - 60
      }, 1000);
  });



});





