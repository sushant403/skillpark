
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-120909275-1', 'auto');
    ga('send', 'pageview');

    /* Select2 */
    $('select').select2();

    /* Tooltip */
    $('[data-toggle="tooltip"]').tooltip();

    /* index */
    $('.recent-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        responsive: [{
                breakpoint: 1099,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                }
            }

        ]
    });

    $('.freelance-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        responsive: [{
                breakpoint: 1099,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                }
            }

        ]
    });
    $('.service-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        responsive: [{
                breakpoint: 1099,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                }
            }

        ]
    });

    /* web design */
    $(function() {
        $('#aniimated-thumbnials').lightGallery({
            thumbnail: true,
        });

        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            adaptiveHeight: true,
            asNavFor: '.slider-nav'
        });

        $('.recommend').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: true,
            fade: false,
        });


        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            arrows: true,
            focusOnSelect: true,
            variableWidth: true,
            responsive: [{
                    breakpoint: 1099,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                    }
                }

            ]
        });
    });
    /* profile */

    /* wireframe */
    $('#aniimated-thumbnials').lightGallery({
        thumbnail: true,
    });

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        adaptiveHeight: true,
        asNavFor: '.slider-nav'

    });

    $('.recommend').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        responsive: [{
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            }

        ]
    });

    $('.view').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        responsive: [{
                breakpoint: 1099,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                }
            }

        ]
    });

    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        arrows: true,
        focusOnSelect: true,
        variableWidth: true,
        responsive: [{
                breakpoint: 1099,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                }
            }

        ]
    });





});