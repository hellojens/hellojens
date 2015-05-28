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
  $(".start h1, .intro h1, .manifest-intro h1, .manifest-list h2, .the-end h1").fitText();


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



  ///// COUNT NUMBERS /////

  var options = {
    useEasing : true, 
    useGrouping : true, 
    separator : ',', 
    decimal : '.', 
    prefix : '', 
    suffix : '' 
  };

  var currentvalue1 = $("#count1").html();
  var currentvalue2 = $("#count2").html();
  var currentvalue3 = $("#count3").html();
  var menuCountNumbers1 = new CountUp("count1", 0, currentvalue1, 0, 2.5, options);
  var menuCountNumbers2 = new CountUp("count2", 0, currentvalue2, 0, 3.5, options);
  var menuCountNumbers3 = new CountUp("count3", 0, currentvalue3, 0, 4.5, options);

  $(window).load(function(){
    setTimeout(function(){
      menuCountNumbers1.start();
    }, 1000)
    setTimeout(function(){
      menuCountNumbers2.start();
    }, 2000)
    setTimeout(function(){
      menuCountNumbers3.start();
    }, 3000)
  });

  var currentvalueKick1 = $("#countKick1").html();
  var currentvalueKick2 = $("#countKick2").html();

  var menuCountNumbersKick1 = new CountUp("countKick1", 0, currentvalueKick1, 0, 2.5, options);
  var menuCountNumbersKick2 = new CountUp("countKick2", 0, currentvalueKick2, 0, 3.5, options);


  $(window).load(function(){
    setTimeout(function(){
      menuCountNumbersKick1.start();
    }, 1000)
    setTimeout(function(){
      menuCountNumbersKick2.start();
    }, 2000)
  });


});





