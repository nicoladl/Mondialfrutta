(function ($) {
    'use strict';

    var MEDIUM = 1024;
    var visualHeight;
    if ($('.visual').height()) {
        visualHeight = $('.visual').height();
    } else {
        visualHeight = 200
    }

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
        if ( $(window).scrollTop() > visualHeight ) {
            $('header').addClass('open');
        } else {
            $('header').removeClass('open')
        }
    });

    if ($('.path-frontpage').length > 0) {
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
        window.addEventListener('scroll', function(e) {

            // What % down is it?
            var scrollPercentage = ( (document.documentElement.scrollTop + document.body.scrollTop) - $('.visual').height() ) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);

            // Length to offset the dashes
            var drawLength = pathLength * (scrollPercentage * 1.75);

            // Draw in reverse
            path.style.strokeDashoffset = pathLength - drawLength;

            // ... at bottom of scrolling function

            // When complete, remove the dash array, otherwise shape isn't quite sharp
            if (scrollPercentage >= 0.99) {
                path.style.strokeDasharray = 'none';
            } else {
                path.style.strokeDasharray = pathLength + ' ' + pathLength;
            }
        });
    }

    // check if  element is on viewport
    $.fn.isOnScreen = function(){

        var win = $(window);
        var viewport = {
            top : win.scrollTop()+100,
            left : win.scrollLeft()
        };
        viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();

        var bounds = this.offset();
        bounds.right = bounds.left + this.outerWidth();
        bounds.bottom = bounds.top + this.outerHeight();

        return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    };

    if ( $(window).width() > MEDIUM ) {
        const offsetOrizontal = 0.6;
        const offsetVertical = 0.4;

        $(window).scroll(function() {
            $('.image').each(function( index ) {
                var $this = $(this);
                if ( $this.isOnScreen() ) {
                    $this.addClass('js-effect');

                    var firstTop = $this.offset().top,
                        winScrollTop = $(window).scrollTop(),
                        shiftDistance = (firstTop - winScrollTop);

                    var percentageOrizontal = (($this.height() + shiftDistance)/($(window).height()/100))*offsetOrizontal;
                    var percentageVertical = (($this.height() + shiftDistance)/($(window).height()/100))*offsetVertical;

                    if ( $this.hasClass('image--vertical') ) {
                        $this.css('background-position', 'center '+percentageVertical+'%');
                    } else if ( $this.hasClass('image--orizontal') ) {

                        $this.css('background-position', 'center '+percentageOrizontal+'%');
                    }
                } else {
                    $this.css('background-position', 'center 50%');
                }
            });
        });
    }

    // Modal
    $('.modal-init').on('click', function(e) {
        var modal = $(this).data('modal');
        console.log(modal)
        e.preventDefault();

        $('.modal[data-modal="'+ modal +'"]').addClass('show');
        $('.overlay').toggleClass('open');
    });
    $('.modal-close').on('click', function() {
        $('.modal').removeClass('show');
        $('.overlay').toggleClass('open');
    })

    // Tab
    $('.tabs__title').on('click', function() {
        var item = $(this).data('item');

        $('.tabs__title').removeClass('active');
        $(this).addClass('active');

        $('.tabs__item').removeClass('active');
        $('.tabs__item[data-item='+ item +']').addClass('active');
    });

    // Scroll Reveal
    var config = {

    }

    window.sr = ScrollReveal();
    sr.reveal('.sr');

    // FORM
    $('#contatti').on('submit', function(c) {
        c.preventDefault();
        var b = $(this);
        var a = b.attr('action');
        var d = b.serialize();
        $.ajax({
            type: 'POST',
            url: 'mail.php',
            data: d,
            success: function(e) {
                b.append(e).fadeIn();
                b.trigger('reset')
            }
        })
    });

    if ($('.video--fullscreen').length > 0) {
        var video = $('.video--fullscreen').get(0);
        enableInlineVideo(video);
    }

})(jQuery);
