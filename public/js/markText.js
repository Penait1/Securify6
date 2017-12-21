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
/******/ ({

/***/ "./resources/assets/js/markText.js":
/***/ (function(module, exports) {

var lines = [];
function copySelectionToTextView() {
    lines = [];

    comments++;
    selection = window.getSelection();

    var linesSelected = selection.toString().split('\n');
    var entireChallenge = document.getElementById("codeBlock").textContent.split('\n');

    for (var i = 0; i < linesSelected.length; i++) {
        for (var j = 0; j < entireChallenge.length; j++) {
            if (linesSelected[i].toUpperCase() == entireChallenge[j].toUpperCase() && entireChallenge[j].trim().length > 0) {
                var line = j + 1;
                document.getElementById("codeBlock").setAttribute('data-line', document.getElementById("codeBlock").getAttribute('data-line').concat(',').concat(line.toString()));
                document.getElementById("comments").value += line + ": ".concat(linesSelected[i].concat("\n"));

                lines.push(line);
                break;
            }
        }
    }
    var $container = $("#comments");
    var totalComments = $container.find('.comment').length;
    console.log(totalComments);

    var prototype = "<textarea class='comment' name='comment[" + totalComments + "][value]'> </textarea>";
    prototype += "<input type='hidden' name='comment[" + totalComments + "][line_from]' value='" + lines[0] + "'/>";
    prototype += "<input type='hidden' name='comment[" + totalComments + "][line_end]' value='" + lines[lines.length - 1] + "'/>";

    $container.append(prototype);

    Prism.highlightAll();
}

/***/ }),

/***/ 1:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/assets/js/markText.js");


/***/ })

/******/ });