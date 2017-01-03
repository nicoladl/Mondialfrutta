(function ($) {
    "use strict";

    $('.js-hamburger').on('click', function() {
        $('.js-menu-container, .js-hamburger').toggleClass('open');
        $('.overlay').toggleClass('open');
    });

    $(window).scroll(function() {
        if ( $(window).scrollTop() > $('.visual').height() ) {
            $('header').addClass('open');
        } else {
            $('header').removeClass('open')
        }
    });

    // Get a reference to the <path>
    var path = document.querySelector('#path');

    // Get length of path
    var pathLength = path.getTotalLength();

    $('.path').css('top', $('.visual').height());

    // Make very long dashes (the length of the path itself)
    path.style.strokeDasharray = pathLength + ' ' + pathLength;

    // Offset the dashes so the it appears hidden entirely
    path.style.strokeDashoffset = pathLength;

    // When the page scrolls...
    window.addEventListener("scroll", function(e) {

      // What % down is it?
      var scrollPercentage = ( (document.documentElement.scrollTop + document.body.scrollTop) - $('.visual').height() ) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);

      // Length to offset the dashes
      var drawLength = pathLength * (scrollPercentage * 1.5);

      // Draw in reverse
      path.style.strokeDashoffset = pathLength - drawLength;

      // ... at bottom of scrolling function

      // When complete, remove the dash array, otherwise shape isn't quite sharp
      if (scrollPercentage >= 0.99) {
        path.style.strokeDasharray = "none";
      } else {
        path.style.strokeDasharray = pathLength + ' ' + pathLength;
      }

    });
})(jQuery);
