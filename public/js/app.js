/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

// When the Window has Loaded
$(window).on('load', function () {
  // SlideUp the Cover Div when window has finished loading (finishes in 1.9 seconds)
  $('#cover').slideUp(1000);
});

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(2);
__webpack_require__(3);
module.exports = __webpack_require__(4);


/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

/*
  Author: Blaze Rowland
  Description: App.js (main javascript) for Portfolio
  Date: February 15th, 2018
*/

__webpack_require__(0);

// When the Document is Ready
$(document).ready(function () {
  // FadeIn .header-text in 1.2 seconds + .5 second delay (1.7seconds)
  $('.header-text').hide(0).fadeIn(1300);
});

// Mobile Navbar

$('.mobile-hamburger').on('click', function () {
  // $('.mobile-nav').toggleClass('hide');
  $('.mobile-nav').slideToggle(400);
});
// End Mobile Navbar


// Portfolio Zoom
if ($('.zoom').click(function () {
  // Get Portfolio id (e.g. portfolio-a) & Zoom
  var portId = $(this).parents()[2].className.split('').reverse()[0];
  var port = '.portfolio-' + portId;
  var zoom = '.zoomed-' + portId;
  var portZoom = port + zoom;

  // Define function for when .zoom is clicked
  function zoomed() {
    $(portZoom).slideDown(800);
  }

  // Run zoomed function
  zoomed();

  // If the event of the esc key is pressed slideUp zoom
  $(document).keyup(function (e) {
    if (e.keyCode === 27) {
      // $(zoom).css('display', 'none');
      $(zoom).slideUp('slow');
    }
  });

  // If the close button is pressed slideUp zoom
  $('.close').on('click', function () {
    // $(zoom).css('display', 'none');
    $(zoom).slideUp('slow');
  });
})) ;

// End Portfolio Zoom

// Fix Navbar

$(document).scroll(function () {
  var y = $(document).scrollTop(),
      mobileNavBar = $('#mobile-nav'),
      navBar = $('#main-nav'),
      headerDim = $('#header').height();

  if (y >= headerDim) {

    navBar.addClass('nav-scroll');
    mobileNavBar.addClass('mobile-nav-scroll');
  } else {
    navBar.removeClass('nav-scroll');
    mobileNavBar.removeClass('mobile-nav-scroll');
  }
});

// End Fix Navbar


// Hide Alert

$(document).ready(function () {
  $('.alert').fadeOut(10000, function () {
    $(this).addClass('hide');
  });
});

//End Hide Alert


//Portfolio-revamp Nav

var header = document.querySelector('#header').offsetHeight - 100;
var nav = document.querySelector('.nav');
var about = document.querySelector('#about');

window.addEventListener('scroll', function (e) {
  if (document.documentElement.scrollTop > header || document.body.scrollTop > header) {
    nav.classList.add('fromTop');
    nav.classList.add('fixed--top');
    nav.classList.remove('is-hidden--opac');

    about.classList.add('p-top--big');
  } else {
    nav.classList.remove('fromTop');
    nav.classList.remove('fixed--top');
    nav.classList.add('is-hidden--opac');

    about.classList.remove('p-top--big');
  }
});

/***/ }),
/* 3 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 4 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);