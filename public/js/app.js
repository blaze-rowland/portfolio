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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
__webpack_require__(2);
module.exports = __webpack_require__(3);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

/*
  Author: Blaze Rowland
  Description: App.js (main javascript) for Portfolio
  Date: February 15th, 2018
*/

__webpack_require__(11);

// When the Document is Ready
$(document).ready(function () {
  // FadeIn .header-text in 1.2 seconds + .5 second delay (1.7seconds)
  $('.header-text').hide(0).delay(500).fadeIn(2200);
});

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

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 3 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 4 */,
/* 5 */,
/* 6 */,
/* 7 */,
/* 8 */,
/* 9 */,
/* 10 */,
/* 11 */
/***/ (function(module, exports) {

// When the Window has Loaded
$(window).on('load', function () {
  // SlideUp the Cover Div when window has finished loading (finishes in 1.9 seconds)
  $('#cover').slideUp(1900);
});

/***/ })
/******/ ]);