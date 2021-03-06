/*
 * Script calls & functions
 * Desc: contains all external jQuery plugins calls & custom functions
 *
 * File: main.js
 * Version: 1.0
 */

(function($) {
    /*
     * Avoid `console` errors in browsers that lack a console.
     */
      var method;
      var noop = function () {};
      var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
      ];
      var length = methods.length;
      var console = (window.console = window.console || {});

      while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
          console[method] = noop;
        }
      }

      /*
       * Modal video
       */
      new ModalVideo('.js-modal-btn', {channel: 'youtube'});

      /*
       * Testimonial carousel
       */

      $('.owl-carousel').owlCarousel({
         items : 1,
         // loop  : true,
         margin: 250,
         nav    : true,
         dots   : false,
         navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
      });

      /*
       * Project carousel
       */
      $('.owl-project').owlCarousel({
         items : 1,
         // loop  : true,
         margin: 250,
         nav    : true,
         dots   : true,
         navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
      });

})( jQuery );


/*
 * Mobile menu toggle
 */
function afToggleIcon() {
  var x = document.getElementById("afnav");
  if (x.className === "af-nav") {
    x.className += " af-responsive";
  } else {
    x.className = "af-nav";
  }
}
