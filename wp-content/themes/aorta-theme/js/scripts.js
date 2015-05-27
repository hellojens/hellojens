//////////////////////
//// Main Scripts ////
//////// ///////////



jQuery(document).ready(function($){
  



  $('p:empty').remove();


  // Align posts after reload if .grid is visible
  if($(".grid").length > 0) {
    $(window).load(function(){
      $(".grid").isotope('layout');
    });
  }
  
  var isotopeInit = function() {

    // Execute isotope 
    var $container = $('.grid').imagesLoaded( function() {
      $container.isotope({
        itemSelector: '.isotope-align',
        layoutMode: 'fitRows',
        transformsEnabled: false, 
        percentPosition: false,
      });
      $container.isotope('unbindResize');
    });

    $(".page-nav").click(function(){

      // EMULATE LOADING 
      $(".page-nav .load-more").addClass("pulse");

      setTimeout(function(){
        // Fire real load 
        loadMoreFunction();
      }, 1100);

    }); 

    var pageCount = 0 

    // Hide load more button if there is less then 12 posts
    if($(".loadMore").length < 12 && $(".home").length < 1) {
      $(".page-nav").remove();
    };

    function loadMoreFunction() {
      // Only offset of body has category "home"

      if($(".home").length < 1) {
        var offset = $(".loadMore").length;
      }  else {
        var offset = $(".loadMore").length + 2;
      };
      $.get($(".page-nav a").attr("rel"), {offset: offset}, function(data){
        var posts = $(data).find(".loadMore");
        if(posts.length > 0 ) { 

          $(".grid").isotope('bindResize');

          $(".grid").isotope().append(posts).isotope("appended", posts, true).isotope('layout');

          pageCount++;
          $(posts).css("opacity","0");

          // Loop each new element and animate 
          setTimeout(function(){                    
            $(posts).each(function(i) {
              var $li = $(this);
              setTimeout(function() {
                // add page count to each row of post loads
                $(posts).addClass("page" +pageCount);
                // Animate 
                $li.addClass('animate');
              }, i*100); // delay 100 ms
            });
          },540); // Set timeout to prevent isotope interference 

          $
          setTimeout(function(){ 
            $(".grid").isotope('layout');
          }, 2000);

          $(".page-nav .load-more").removeClass("pulse");

          if(posts.length < 8 ) { 
            $(".page-nav").css("visibility","hidden");
          };
        } 


      }); // End ajax $.get 
    }; // End loadMoreFunction 

    // Inifit scroll viewport detector 
    new AnimOnScroll( document.getElementById( 'grid' ), {
      minDuration : 0.4,
      maxDuration : 0.6,
      viewportFactor : 0
    });

  }; // End isotope homepage post grid 




  // sticky Header 
  // $(window).scroll(function(){
  //   if ($(window).scrollTop() >= 40) {
  //     $("header").addClass("stick");
  //   }
  //   else {
  //     $("header").removeClass("stick");
  //   }
  // });

  // Search 

  $(".searchlink").click(function(e){
    e.preventDefault();
    $(".search-wrapper").addClass("open");
    // $("header, .top-section, .content-section").animate({"opacity": 0.1}, 200);
  });


  $('.transition-wrapper').toggleClass("visible");

  $('a').click(function(event) {
    // dont fade the link
    if($(this).hasClass("donot")) {

      event.preventDefault();
      // Sets the new destination to the href of the link
      newLocation = this.href;
      $('.transition-wrapper').css('opacity','0' );
      // Delays action
      window.setTimeout(function() {
          // Redirects to new destination
          window.location = newLocation;
      }, 250);
    }


  });


  // Footer scroll up
  $('.scrollup').click(function () {
      $("html, body").animate({
          scrollTop: 0
      }, 600);
      return false;
  });



  ////////  INIT FUNCTIONS ///////////

  isotopeInit();
  // fluidboxInit();

});