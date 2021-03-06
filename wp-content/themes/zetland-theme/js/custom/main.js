jQuery(document).ready(function($){


  var fitHeight = function() {

    vpw = $(window).width();
    vph = $(window).height();

    if ( $(window).width() > 480) {     
      $('.start').height(vph - 100);
    } else {
      $('.start').height(vph - 80);
    }

    $('.intro').height(vph);
    $('.inner-wrap').css("margin-bottom", vph);
    $('.the-end').height(vph);
    $('#intro-video').height(vph - 120);

  }; fitHeight();

  if ( $(window).width() > 480) {     
    $(window).resize(function() {
      fitHeight();
    });
  }
  else { 
    console.log("small");
  }


  ////////  TYPED PLGUIN  ////////  

  $(function(){
    $(".typeit").typed({
        strings: ["^1000 Vi er trætte af nyhedsstøjen. ^500 <br> ^800 Er du? ^3000 ", " ^2000 Kickstarter ^200 ", "Kickstart ^300 kvalitetsjournalistik ^500 <br> ^500 og gør alle lidt klogere. ^3000 ", " ^2000 Et kulørt klubhus ^400 <br> ^600 for nysgerrige mennesker. ^3000 ", " ^2000 Nutiden i perspektiv, ^200 <br> ^800 nyheder i proportioner. ^3000 "],
        typeSpeed: 18,
        loop: true,
        loopCount: 3,
        startDelay: 000,
        backSpeed: -20,
        // backDelay: 4000,
    });
  });


  ////////  TOOLTIPSTER  ////////  

  $('.tooltipster').tooltipster({
     animation: 'fade',
     delay: 0,
     theme: 'tooltipster-noir',
     touchDevices: false,
     loopCount: 3,
     trigger: 'hover',
     // iconDesktop: true,
     position: 'bottom-left',
     // icon: 'Q', 
     maxWidth: '380',
     offsetY: '-7',
  });


  ////////  QUESTIONS ACCORDION  ////////  

  $('#accordion').find('.accordion-toggle').click(function(e){
    if($(this).hasClass('active')) {
      e.preventDefault();
      $('.accordion-toggle.active').removeClass('active');

      $(this).next().slideToggle('fast');
      $(".accordion-content").not($(this).next()).slideUp('fast');
 s
    } else {
      $('.accordion-toggle.active').removeClass('active');
      $(this).toggleClass('active');

      $(this).next().slideToggle('fast');
      $(".accordion-content").not($(this).next()).slideUp('fast');
    }
  });


  ////////  VIDEO CONTRONLS  ////////  

  $(".play-video").click(function(e){
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $(".intro").offset().top - 60
    }, 600);
    setTimeout(function(){
      $(".background-image, .intro .row").fadeOut();
    }, 200);
    setTimeout(function(){
      $(".video-wrapper").show().animate({opacity: "1"}, 850);
      $("#intro-video").vimeo("play");
    }, 1600);

  });

  $("#intro-video").on("finish", function(){
    $(".video-wrapper").animate({opacity: "0"}, 850).fadeOut(850);
    $("#intro-video").vimeo("seekTo", 0);
    setTimeout(function(){
      $(".background-image, .intro .row").fadeIn(850);
    }, 800);

  });

  $(document).keyup(function(e) {
    if (e.keyCode == 27) { 
      $(".video-wrapper").animate({opacity: "0"}, 850).fadeOut(850);
      $("#intro-video").vimeo("pause");
      $("#intro-video").vimeo("seekTo", 0);
      setTimeout(function(){
        $(".background-image, .intro .row").fadeIn(850);
      }, 800);

    }   // escape key maps to keycode `27`
  });

  ////////  FIT TEXT  ////////  

  // $(".start h1").fitText(0.8, { minFontSize: '35px', maxFontSize: '200px' });
  $(".intro h1").fitText(1.1, { minFontSize: '35px', maxFontSize: '200px' });
  $(".manifest-intro h1").fitText(0.7, { minFontSize: '35px', maxFontSize: '200px' });
  $(".the-end h1").fitText(0.6, { minFontSize: '40px', maxFontSize: '200px' });


  ////////  TOP BAR COLOR CHANGER  ////////  

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


  ////////  MENU SCROLL  ////////  

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


  ////////  COUNT UP NUMBERS  ////////  

  var options = {
    useEasing : true, 
    useGrouping : true, 
    separator : '.', 
    decimal : '.', 
  };

  var currentvalue1 = $("#count1").html();
  var currentvalue2 = $("#count2").html();
  // var currentvalue3 = $("#count3").html();
  var menuCountNumbers1 = new CountUp("count1", 0, currentvalue1, 0, 2.5, options);
  var menuCountNumbers2 = new CountUp("count2", 0, currentvalue2, 0, 3.5, options);
  // var menuCountNumbers3 = new CountUp("count3", 0, currentvalue3, 0, 4.5, options);

  $(window).load(function(){
    setTimeout(function(){
      menuCountNumbers1.start();
    }, 1000)
    setTimeout(function(){
      menuCountNumbers2.start();
    }, 2000)
  });

  var currentvalueKick1 = $("#countKick1").html();
  var menuCountNumbersKick1 = new CountUp("countKick1", 0, currentvalueKick1, 0, 2.5, options);

  var currentvalueKick2 = $("#countKick2").html();
  var menuCountNumbersKick2 = new CountUp("countKick2", 0, currentvalueKick2, 0, 2, options);

  var currentvalueKick3 = $("#countKick3").attr('data').replace("kr", '').replace(',','');
  console.log(currentvalueKick3);
  var menuCountNumbersKick3 = new CountUp("countKick3", 0, currentvalueKick3, 0, 2, options);

  // var currentvalueKick4 = $("#countKick4").html();
  // var menuCountNumbersKick4 = new CountUp("countKick4", 0, currentvalueKick4, 0, 3, options);

  var fired = 0;

  $(window).scroll(function(e) {

    var el = $('.kickstart'),
        startCount = $('#count-kickstart').offset().top - $(window).scrollTop();

    if (startCount < 60 && fired !== 1){

      // Start number count
      menuCountNumbersKick1.start(); 
      menuCountNumbersKick2.start(); 
      menuCountNumbersKick3.start(); 
      // menuCountNumbersKick4.start(); 


      // Start progress par animation 
      var progress = $(".meter").attr("data");

      if(progress < "100") {
        progress = "100%";
      } else {
        progress = progress + "%"
      }
      // $(window).off('scroll');

      $(".meter").animate({width: progress}, 2000);
      // $(".meter").css("max-width", progress);
      // $(".meter").addClass("start-count");
      fired = 1;

    }

  });


  ////////  RANDOMIZE TEXT SNIPPETS IN HEADER  ///////////

  // var divs = $(".top-taglines").get().sort(function(){ 
  //   return Math.round(Math.random())-0.5;
  // }).slice(0,1);  
  // $(divs).appendTo(divs[0].parentNode).show();

});





