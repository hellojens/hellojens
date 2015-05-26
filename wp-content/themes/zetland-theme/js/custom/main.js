jQuery(document).ready(function($){


  vpw = $(window).width();
  vph = $(window).height();

  $('.start').height(vph + 60);
  $('.full-page').height(vph  - 60);
  $('.inner-wrap').css("margin-bottom", vph);

  // Questions Accordion 

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

});