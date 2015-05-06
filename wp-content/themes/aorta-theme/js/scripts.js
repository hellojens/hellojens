//////////////////////
//// Main Scripts ////
//////// ///////////

jQuery(document).ready(function($){
  

  
  var isotopeInit = function() {

    // Execute isotope 
    var $container = $('.grid').imagesLoaded( function() {
      $container.isotope({
        itemSelector: '.isotope-align',
        layoutMode: 'fitRows',
        transformsEnabled: false, 
      });
    });

    $(".page-nav").click(function(){

      // EMULATE LOADING 
      $(".page-nav .loadMoreText").text("");
      $(".page-nav .puff").addClass("puffit");

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
              }, i*150); // delay 100 ms
            });
          },540); // Set timeout to prevent isotope interference 

          $(".page-nav .loadMoreText").text("Load more");
          $(".page-nav .puff").removeClass("puffit");

        } else {
          $(".page-nav .loadMoreText").text("That's it – for now! ");
          $(".page-nav .puff").removeClass("puffit");

        };
      }); // End ajax $.get 
    }; // End loadMoreFunction 

    // Inifit scroll viewport detector 
    new AnimOnScroll( document.getElementById( 'grid' ), {
      minDuration : 0.4,
      maxDuration : 0.7,
      viewportFactor : 0.2
    });

  }; // End isotope homepage post grid 

  // var fluidboxInit = function() {

    $('.single-post .post-content a').fluidbox({
        viewportFill: 0.9,
        immediateOpen: true,
        debounceResize: true,
        closeTrigger: [{
            selector: "#fluidbox-overlay",
            event: "click"
        }, {
            selector: "window",
            event: "scroll"
        }]
    });

  // };

  ////////  INIT FUNCTIONS ///////////

  isotopeInit();
  // fluidboxInit();

});