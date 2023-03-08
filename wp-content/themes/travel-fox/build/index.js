/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../css/style.scss */ "./css/style.scss");
/* harmony import */ var _modules_Search__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/Search */ "./src/modules/Search.js");
/* harmony import */ var _modules_Search__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_modules_Search__WEBPACK_IMPORTED_MODULE_1__);

 //const search = new Search();

/***/ }),

/***/ "./src/modules/Search.js":
/*!*******************************!*\
  !*** ./src/modules/Search.js ***!
  \*******************************/
/***/ (() => {

// import axios from "axios";
// class Search {
//     // 1. describe and create/initiate our object
//     constructor() {
//         //this.addSearchHTML();
//         this.resultsDiv = document.querySelector("#search-overlay__results");
//         this.openButton = document.querySelectorAll(".js-search-trigger");
//         this.closeButton = document.querySelector(".search-overlay__close");
//         this.searchOverlay = document.querySelector(".search-overlay");
//         this.searchField = document.querySelector("#search-term");
//         this.isOverlayOpen = false;
//         this.isSpinnerVisible = false;
//         this.previousValue;
//         this.typingTimer;
//         this.events();
//     }
//     // 2. events
//     events() {
//         this.openButton.forEach((el) => {
//             el.addEventListener("click", (e) => {
//                 e.preventDefault();
//                 this.openOverlay();
//             });
//         });
//         this.closeButton.addEventListener("click", () => this.closeOverlay());
//         document.addEventListener("keydown", (e) => this.keyPressDispatcher(e));
//         this.searchField.addEventListener("keyup", () => this.typingLogic());
//     }
//     // 3. methods (function, action...)
//     typingLogic() {
//         if (this.searchField.value != this.previousValue) {
//             clearTimeout(this.typingTimer);
//             if (this.searchField.value) {
//                 if (!this.isSpinnerVisible) {
//                     this.resultsDiv.innerHTML =
//                         '<div class="spinner-loader"></div>';
//                     this.isSpinnerVisible = true;
//                 }
//                 this.typingTimer = setTimeout(this.getResults.bind(this), 750);
//             } else {
//                 this.resultsDiv.innerHTML = "";
//                 this.isSpinnerVisible = false;
//             }
//         }
//         this.previousValue = this.searchField.value;
//     }
//     async getResults() {
//         try {
//             const response = await axios.get(
//                 fxtData.root_url +
//                     "/wp-json/fxt/v1/search?term=" +
//                     this.searchField.value
//             );
//             const results = response.data;
//             this.resultsDiv.innerHTML = `
//                 <div class="row">
//                     <div class="one-third">
//                         <h2 class="search-overlay__section-title">General Information</h2>
//                         ${
//                             results.generalInfo.length
//                                 ? '<ul class="link-list min-list">'
//                                 : "<p>No general information matches that search.</p>"
//                         }
//                         ${results.generalInfo
//                             .map(
//                                 (item) =>
//                                     `<li><a href="${item.permalink}">${
//                                         item.title
//                                     }</a> ${
//                                         item.postType == "post"
//                                             ? `by ${item.authorName}`
//                                             : ""
//                                     }</li>`
//                             )
//                             .join("")}
//                         ${results.generalInfo.length ? "</ul>" : ""}
//                     </div>
//                     <div class="one-third">
//                         <h2 class="search-overlay__section-title">Tours</h2>
//                             ${
//                                 results.tours.length
//                                     ? '<ul class="link-list min-list">'
//                                     : `<p>No tours match that search. <a href="${fxtData.root_url}/tours">View all tours</a></p>`
//                             }
//                             ${results.tours
//                                 .map(
//                                     (item) =>
//                                         `<li><a href="${item.permalink}">${item.title}</a></li>`
//                                 )
//                                 .join("")}
//                         ${results.tours.length ? "</ul>" : ""}
//                     </div>
//                     <div class="one-third">
//                         <h2 class="search-overlay__section-title">Guides</h2>
//                         ${
//                             results.guides.length
//                                 ? '<ul class="link-list min-list">'
//                                 : `<p>No guides match that search. <a href="${fxtData.root_url}/guides">View all guides</a></p>`
//                         }
//                             ${results.guides
//                                 .map(
//                                     (item) =>
//                                         `<li><a href="${item.permalink}">${item.title}</a></li>`
//                                 )
//                                 .join("")}
//                         ${results.guides.length ? "</ul>" : ""}
//                     </div>
//                 </div>
//             `;
//             this.isSpinnerVisible = false;
//         } catch (e) {
//             console.log(e);
//         }
//     }
//     keyPressDispatcher(e) {
//         if (
//             e.keyCode == 83 &&
//             !this.isOverlayOpen &&
//             document.activeElement.tagName != "INPUT" &&
//             document.activeElement.tagName != "TEXTAREA"
//         ) {
//             this.openOverlay();
//         }
//         if (e.keyCode == 27 && this.isOverlayOpen) {
//             this.closeOverlay();
//         }
//     }
//     openOverlay() {
//         this.searchOverlay.classList.add("search-overlay--active");
//         document.body.classList.add("body-no-scroll");
//         this.searchField.value = "";
//         setTimeout(() => this.searchField.focus(), 301);
//         //console.log("our open method just ran!");
//         this.isOverlayOpen = true;
//         return false;
//     }
//     closeOverlay() {
//         this.searchOverlay.classList.remove("search-overlay--active");
//         document.body.classList.remove("body-no-scroll");
//         //console.log("our close method just ran!");
//         this.isOverlayOpen = false;
//     }
//     addSearchHTML() {
//         document.body.insertAdjacentHTML(
//             "beforeend",
//             `
//       <div class="search-overlay">
//         <div class="search-overlay__top">
//           <div class="container">
//             <i class="icon-search_03 search-overlay__icon" aria-hidden="true"></i>
//             <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
//             <i class="icon-search_03 search-overlay__icon" aria-hidden="true"></i>
//           </div>
//         </div>
//         <div class="container">
//           <div id="search-overlay__results"></div>
//         </div>
//       </div>
//     `
//         );
//     }
// }
// export default Search;

/***/ }),

/***/ "./css/style.scss":
/*!************************!*\
  !*** ./css/style.scss ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var chunkIds = deferred[i][0];
/******/ 				var fn = deferred[i][1];
/******/ 				var priority = deferred[i][2];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"index": 0,
/******/ 			"./style-index": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var chunkIds = data[0];
/******/ 			var moreModules = data[1];
/******/ 			var runtime = data[2];
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunktravel_fox"] = self["webpackChunktravel_fox"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["./style-index"], () => (__webpack_require__("./src/index.js")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
//# sourceMappingURL=index.js.map