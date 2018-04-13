/*
  Author: Blaze Rowland
  Description: App.js (main javascript) for Portfolio
  Date: February 15th, 2018
*/

require('./partials/assets.js');

// When the Document is Ready
$(document).ready(function() {
  // FadeIn .header-text in 1.2 seconds + .5 second delay (1.7seconds)
  $('.header-text').hide(0).fadeIn(1300);
});


// Mobile Navbar

$('.mobile-hamburger').on('click', function(){
  // $('.mobile-nav').toggleClass('hide');
  $('.mobile-nav').slideToggle(400);
});
// End Mobile Navbar


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

// Fix Navbar

$(document).scroll(function() {
  var y = $(document).scrollTop(),
  mobileNavBar = $('#mobile-nav'),
  navBar = $('#main-nav'),
  headerDim = $('#header').height();


  if(y >= headerDim) {

    navBar.addClass('nav-scroll');
    mobileNavBar.addClass('mobile-nav-scroll');
  } else {
    navBar.removeClass('nav-scroll');
    mobileNavBar.removeClass('mobile-nav-scroll');
  }

});

// End Fix Navbar
