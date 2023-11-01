/* ========================================================================= */
/*	WOW Initialization
/* ========================================================================= */

var wow = new WOW({
    boxClass: 'wow',       // animated element css class (default is wow)
    animateClass: 'animated',  // animation css class (default is animated)
    offset: 120,         // distance to the element when triggering the animation (default is 0)
    mobile: false,       // trigger animations on mobile devices (default is true)
    live: true         // act on asynchronously loaded content (default is true)
});

wow.init();


/* ========================================================================= */
/*	Preloader
/* ========================================================================= */

jQuery(window).load(function () {

    $("#preloader").fadeOut("slow");

});


$(document).ready(function () {

    /* ========================================================================= */
    /*	Menu item highlighting
    /* ========================================================================= */

    jQuery('#nav').singlePageNav({
        offset: jQuery('#nav').outerHeight(),
        filter: ':not(.external)',
        speed: 1200,
        currentClass: 'current',
        easing: 'easeInOutExpo',
        updateHash: true,
        beforeStart: function () {
            console.log('begin scrolling');
        },
        onComplete: function () {
            console.log('done scrolling');
        }
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() > 400) {
            $("#navigation").css("background-color", "#352F44");
        } else {
            $("#navigation").css("background-color", "rgba(16, 22, 54, 0.2)");
        }
    });

    /* ========================================================================= */
    /*	Fix Slider Height
    /* ========================================================================= */

    var slideHeight = $(window).height();

    $('#slider, .carousel.slide, .carousel-inner, .carousel-inner .item').css('height', slideHeight);

    $(window).resize(function () {
        'use strict',
            $('#slider, .carousel.slide, .carousel-inner, .carousel-inner .item').css('height', slideHeight);
    });


    /* ========================================================================= */
    /*	Portfolio Filtering
    /* ========================================================================= */


    // portfolio filtering

    $(".project-wrapper").mixItUp();


    $(".fancybox").fancybox({
        padding: 0,

        openEffect: 'elastic',
        openSpeed: 650,

        closeEffect: 'elastic',
        closeSpeed: 550,

        closeClick: true,
    });

    /* ========================================================================= */
    /*	Parallax
    /* ========================================================================= */

    $('#facts').parallax("50%", 0.3);

    /* ========================================================================= */
    /*	Timer count
    /* ========================================================================= */

    "use strict";
    $(".number-counters").appear(function () {
        $(".number-counters [data-to]").each(function () {
            var e = $(this).attr("data-to");
            $(this).delay(6e3).countTo({
                from: 50,
                to: e,
                speed: 3e3,
                refreshInterval: 50
            })
        })
    });

    /* ========================================================================= */
    /*	Back to Top
    /* ========================================================================= */


    $(window).scroll(function () {
        if ($(window).scrollTop() > 400) {
            $("#back-top").fadeIn(200)
        } else {
            $("#back-top").fadeOut(200)
        }
    });
    $("#back-top").click(function () {
        $("html, body").stop().animate({
            scrollTop: 0
        }, 1500, "easeInOutExpo")
    });

    /* ========================================================================= */
    /*	Form Validation
    /* ========================================================================= */

    $('#contact-form').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            subject: {
                required: true,
            },
            message: {
                required: true
            }
        },
        messages: {
            name: {
                required: "Please enter your name.",
            },
            email: {
                required: "Please enter your email."
            },
            subject: {
                required: "Please enter your subject."
            },
            message: {
                required: "Please enter your message.",
            }
        },
        submitHandler: function (form) {
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "process.php",
                success: function () {
                    $('#contact-form :input').attr('disabled', 'disabled');
                    $('#contact-form').fadeTo("slow", 0.15, function () {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor', 'default');
                        $('#success').fadeIn();
                    });
                },
                error: function () {
                    $('#contact-form').fadeTo("slow", 0.15, function () {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });

});
