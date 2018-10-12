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
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 11);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */,
/* 1 */,
/* 2 */,
/* 3 */,
/* 4 */,
/* 5 */,
/* 6 */,
/* 7 */,
/* 8 */,
/* 9 */,
/* 10 */,
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(12);
__webpack_require__(13);
module.exports = __webpack_require__(14);


/***/ }),
/* 12 */
/***/ (function(module, exports) {

$(document).ready(function () {

    $('.add-new-gallery-image').on('click', function () {
        window.location.href = '/admin/gallery/create';
    });

    var target = $('#g3slider');

    target.sliderPro({
        width: '100%',
        height: '100%',
        slideAnimationDuration: 900,
        arrows: false,
        buttons: false,
        visibleSize: '100%',
        forceSize: 'fullWidth',
        slideDistance: 0,
        imageScaleMode: 'contain',
        autoHeight: true,
        init: function init() {
            if (!target.find(".sp-slide").first().hasClass('sp-selected')) {
                target.find(".sp-slide").first().addClass('sp-selected');
                // return;
            }
        }
    });

    var target2 = $('#g3partners');
    target2.sliderPro({
        height: '100px',
        slideAnimationDuration: 900,
        arrows: false,
        buttons: false,
        visibleSize: '100%',
        forceSize: 'fullWidth',
        slideDistance: 0,
        imageScaleMode: 'contain',
        autoHeight: false,
        init: function init() {
            if (!target2.find(".sp-slide").first().hasClass('sp-selected')) {
                target2.find(".sp-slide").first().addClass('sp-selected');
                // return;
            }
        }
    });
});

$(function () {
    $('.fold-table tr.view').on('click', function () {
        $(this).toggleClass('open').next('.fold').toggleClass('open');
    });

    $('.qa-tab').on('click', function () {
        var url = window.location.protocol + "//" + window.location.host + "/q-and-a";
        $('.qa-container').load(url);
    });

    $('.aar-link').on('click', function (e) {
        e.preventDefault();
        var slug = $(this).attr('href');
        var pdf_object = '<object data="/files/' + slug + '" type="application/pdf" width="100%" height="100%" class="pdf-container"></object>';
        $('.aar-source').html(pdf_object);
    });

    $('.past-comp-m1').on('change', function () {
        if ($(this).val() === 'Yes') {
            $('.pastcomp_m1').show();
        } else {
            $('.pastcomp_m1').hide();
            $('input[name=member1_pastyears]').val(0);
        }
    });

    $('.past-comp-m2').on('change', function () {
        if ($(this).val() === 'Yes') {
            $('.pastcomp_m2').show();
        } else {
            $('.pastcomp_m2').hide();
            $('input[name=member2_pastyears]').val(0);
        }
    });
});

/***/ }),
/* 13 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 14 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);