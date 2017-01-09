(function ($) {
    "use strict";

    $('.js-hamburger').on('click', function() {
        $('.js-menu-container, .js-hamburger').toggleClass('open');
        $('.overlay').toggleClass('open');
    });

    $('.js-scroll-down').on('click', function() {
        $('html, body').animate({
            scrollTop: $('#block-azienda').offset().top
        }, 500);
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

    // check if  element is on viewport
    $.fn.isOnScreen = function(){
        
        var win = $(window);
        var viewport = {
            top : win.scrollTop()-100,
            left : win.scrollLeft()
        };
        viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();
        
        var bounds = this.offset();
        bounds.right = bounds.left + this.outerWidth();
        bounds.bottom = bounds.top + this.outerHeight();
        
        return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    };

    $(window).scroll(function() {
        $('.image').each(function( index ) {
            var $this = $(this);
            if ( $this.isOnScreen() ) {
                $this.addClass('js-effect');

                var firstTop = $this.offset().top,
                    winScrollTop = $(window).scrollTop(),
                    shiftDistance = (firstTop - winScrollTop);

                if ( $this.hasClass('image--vertical') ) {
                    $(this).first().css("transform","translateY("+shiftDistance*0.12+"px)");
                } else if ( $this.hasClass('image--orizontal') ) {
                    $(this).last().css("transform","translateY(-"+shiftDistance*0.06+"px)");
                }
            }
        });
    });

})(jQuery);
