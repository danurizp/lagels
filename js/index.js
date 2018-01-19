$(document).ready(function () {
    updateHeight();
    
    $.stellar({
        horizontalScrolling: false,
        verticalOffset: 0,
        responsive: true

    });

    var owl = $('.owl-carousel');
    owl.owlCarousel({
        margin: 0,
        //nav: true,

        //navText: ["Anterior","Siguiente"],

        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    new WOW().init();

    var menu = $('nav');
    var navBar = $('#myNavbar');
    var origOffsetY = menu.offset().top;

    function scroll() {
        if ($(window).scrollTop() >= origOffsetY) {
            menu.addClass('navbar-fixed-top');
//                        $('.content').addClass('menu-padding');
        } else {
            menu.removeClass('navbar-fixed-top');
//                        $('.content').removeClass('menu-padding');
        }

    }

    document.onscroll = scroll;

    $('body').scrollspy({
        target: '#myNavbar',
        offset: 100
    });

    $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function (event) {
                // On-page links
                navBar.removeClass('in');
//                      menu.addClass('navbar-fixed-top');
                if (
                        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                        &&
                        location.hostname == this.hostname
                        ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);

                    // Firefox 1.0+
                    var isFirefox = typeof InstallTrigger !== 'undefined';

                    var difHeader = -52;
                    if (target.selector == "#inicio" || target.selector == "#ubicacion") {
                        difHeader = 0;
                    }

                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();

                        var scrollTop = target.offset().top;

                        if (isFirefox) {
                            scrollTop += difHeader;
                        }

                        $('html, body').animate({

                            scrollTop: scrollTop
                        }, 4000, function () {
                            if (!isFirefox) {
                                scrollBy(0, difHeader);
                            }

                            // Callback after animation
                            // Must change focus!

                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            }
                            ;
                        });
                    }
                }
            });

    var classname = document.getElementsByClassName("img-previo");

    var myFunction = function (event) {

        event = event || window.event;
        var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {
                    index: link, event: event,
                    onslide: function (index, slide) {

                        self = this;
                        var initializeAdditional = function (index, data, klass, self) {
                            var text = self.list[index].getAttribute(data),
                                    node = self.container.find(klass);
                            node.empty();
                            if (text) {
                                node[0].appendChild(document.createTextNode(text));
                            }
                        };
                        initializeAdditional(index, 'data-description', '.description', self);
                    }
                },
                links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };

    for (var i = 0; i < classname.length; i++) {
        classname[i].addEventListener('click', myFunction, false);
    }

});

$(window).resize(updateHeight);

function updateHeight()
{
    var div = $('.dynamicheight');
    var width = div.width();
    
    div.css('height', width);
}

