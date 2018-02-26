/*
  Author: Blaze Rowland
  Description: App.js (main javascript) for Portfolio
  Date: February 15th, 2018
*/

require('./partials/assets.js');

// When the Document is Ready
$(document).ready(function() {
  // FadeIn .header-text in 1.2 seconds + .5 second delay (1.7seconds)
  $('.header-text').hide(0).delay(500).fadeIn(2200);
});



// Portfolio Zoom
if($('.zoom').click(function(){
  // Get Portfolio id (e.g. portfolio-a) & Zoom
  var portId = $(this).parents()[2].className.split('').reverse()[0];
  var port = '.portfolio-' + portId;
  var zoom = '.zoomed-' + portId;
  var portZoom = port+zoom;


  // Define function for when .zoom is clicked
  function zoomed() {
    $(portZoom).slideDown(800);
  }

  // Run zoomed function
  zoomed();

  // If the event of the esc key is pressed slideUp zoom
  $(document).keyup(function(e){
    if(e.keyCode === 27) {
      // $(zoom).css('display', 'none');
      $(zoom).slideUp('slow');
    }
  });

  // If the close button is pressed slideUp zoom
  $('.close').on('click', function(){
    // $(zoom).css('display', 'none');
    $(zoom).slideUp('slow');
  });
}));


// End Portfolio Zoom
