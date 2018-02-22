
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});


// When the Window has Loaded
$(window).on('load', function() {
  // SlideUp the Cover Div when window has finished loading (finishes in 1.9 seconds)
  $('#cover').slideUp(1900);
});

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
