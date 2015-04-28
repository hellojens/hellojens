//////////////////////
//// Main Scripts ////
//////// ///////////

jQuery(document).ready(function($){
  

  
  var isotopeAndLoadmore = function() {

    var $container = $('.grid').imagesLoaded( function() {
      $container.isotope({
        itemSelector: '.isotope-align',
        layoutMode: 'fitRows',
      });
    });

    var loadMore = function() {
      $(".page-nav").click(loadMoreFunction); 

      function loadMoreFunction() {
          $(".page-nav a").text("loading..");

          var offset = $(".loadMore").length;
          $.get($(".page-nav a").attr("rel"), {offset: offset +1}, function(data){
              var posts = $(data).find(".loadMore");
              if(posts.length > 0 ) { 

                  $(".grid").isotope().append(posts).isotope("appended", posts, true).isotope('layout');

                  $(".page-nav a").text("Load more");
              } else {
                  $(".page-nav a").text("That's it – for now! ");
              };
            });

          };
      };
    loadMore();

  }


  $('.single-post-content a').fluidbox({
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


  ////////  INIT FUNCTIONS ///////////

  isotopeAndLoadmore();

});