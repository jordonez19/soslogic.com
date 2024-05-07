(function ($) {
    "use strict";

    /*----- ELEMENTOR LOAD FUNCTION CALL ---*/

    $(window).on("elementor/frontend/init", function () {

        var creteDataBackground = function () {
            //1. Data Background Set
            $('[data-background]').each(function () {
                $(this).css('background-image', 'url(' + $(this).attr('data-background') + ')');
            });
        };

        var testimonialSlider = function () {
            //4. Theme Slider Functions
            $(".feedback-slider").slick({
                slidesToShow: 1,
                autoplay: true,
                speed: 700,
                prevArrow: '<button class="prev-arrow"><svg width="48" height="39" viewBox="0 0 48 39" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.9961 1.1875L1.06641 19.2227C0.75 19.5391 0.75 20.0664 1.06641 20.3828L18.9961 38.418C19.418 38.7344 19.9453 38.7344 20.2617 38.418C20.5781 38.1016 20.5781 37.4688 20.2617 37.1523L3.70312 20.6992H47.1562C47.6836 20.6992 48 20.2773 48 19.75C48 19.3281 47.6836 18.9062 47.1562 18.9062H3.70312L20.2617 2.45312C20.5781 2.13672 20.5781 1.50391 20.2617 1.1875C19.9453 0.871094 19.3125 0.871094 18.9961 1.1875Z" fill="white""/></svg></button>',
                nextArrow: '<button class="next-arrow"><svg width="48" height="39" viewBox="0 0 48 39" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M29.0039 1.1875L46.9336 19.2227C47.25 19.5391 47.25 20.0664 46.9336 20.3828L29.0039 38.418C28.582 38.7344 28.0547 38.7344 27.7383 38.418C27.4219 38.1016 27.4219 37.4688 27.7383 37.1523L44.2969 20.6992H0.84375C0.316406 20.6992 0 20.2773 0 19.75C0 19.3281 0.316406 18.9062 0.84375 18.9062H44.2969L27.7383 2.45312C27.4219 2.13672 27.4219 1.50391 27.7383 1.1875C28.0547 0.871094 28.6875 0.871094 29.0039 1.1875Z" fill="white"/></svg></button>',
            });

            //feedback slider 2
            $(".cr2-feedback-slider").slick({
                slidesToShow: 4,
                vertical: true,
                arrows: false,
                autoplay: true,
                speed: 700,
                verticalSwiping: true,
                centerMode: true,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            vertical: false,
                            verticalSwiping: false,
                            slidesToShow: 2,
                            centerMode: false,
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 1,
                            vertical: false,
                            verticalSwiping: false,
                            centerMode: false,
                        }
                    }
                ]
            });

            //home 3 feedback slider
            $(".hm3-feedback-slider").slick({
                slidesToShow: 3,
                autoplay: true,
                speed: 700,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                ]
            });

            //hm4 feedback slider
            $(".hm4-feedback-slider").slick({
                slidesToShow: 2,
                prevArrow: '<button class="prev-btn"><svg width="48" height="39" viewBox="0 0 48 39" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.9961 1.1875L1.06641 19.2227C0.75 19.5391 0.75 20.0664 1.06641 20.3828L18.9961 38.418C19.418 38.7344 19.9453 38.7344 20.2617 38.418C20.5781 38.1016 20.5781 37.4688 20.2617 37.1523L3.70312 20.6992H47.1562C47.6836 20.6992 48 20.2773 48 19.75C48 19.3281 47.6836 18.9062 47.1562 18.9062H3.70312L20.2617 2.45312C20.5781 2.13672 20.5781 1.50391 20.2617 1.1875C19.9453 0.871094 19.3125 0.871094 18.9961 1.1875Z" /></svg></button>',
                nextArrow: '<button class="next-btn"><svg width="48" height="39" viewBox="0 0 48 39" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M29.0039 1.1875L46.9336 19.2227C47.25 19.5391 47.25 20.0664 46.9336 20.3828L29.0039 38.418C28.582 38.7344 28.0547 38.7344 27.7383 38.418C27.4219 38.1016 27.4219 37.4688 27.7383 37.1523L44.2969 20.6992H0.84375C0.316406 20.6992 0 20.2773 0 19.75C0 19.3281 0.316406 18.9062 0.84375 18.9062H44.2969L27.7383 2.45312C27.4219 2.13672 27.4219 1.50391 27.7383 1.1875C28.0547 0.871094 28.6875 0.871094 29.0039 1.1875Z" /></svg></button>',
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                ]
            });
        };

        var creteTeamSlider = function () {
            $(".hm2-team-slider").slick({
                slidesToShow: 4,
                loop: true,
                arrows: false,
                autoplay: true,
                speed: 700,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]

            });
        }



        var creteBrandSlider = function () {
            $(".crb-brand-slider").slick({
                slidesToShow: 5,
                speed: 700,
                prevArrow: '<button class="prev-btn"><i class="fas fa-arrow-left"></i></button>',
                nextArrow: '<button class="next-btn"><i class="fas fa-arrow-right"></i></button>',
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 450,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });

        };


        var CreteServicecrSlider = function () {
            $(".hm2-service-slider").slick({
                slidesToShow: 3,
                autoplay: true,
                speed: 700,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });

        };

        var CreteAboutStorySlider = function () {
            $(".hm3-brand-slider").slick({
                slidesToShow: 5,
                arrows: false,
                autoplay: true,
                speed: 700,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 900,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 680,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 450,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                ]
            });

            $(".hm4-brand-slider").slick({
                slidesToShow: 5,
                arrows: false,
                autoplay: true,
                speed: 700,
                responsive: [
                    {
                        breakpoint: 1400,
                        settings: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 450,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                ]
            });
        }


        elementorFrontend.hooks.addAction("frontend/element_ready/global", function ($scope, $) {  creteDataBackground();  });
        elementorFrontend.hooks.addAction( "frontend/element_ready/crete_testimonial.default", function ($scope, $) { testimonialSlider(); });
        elementorFrontend.hooks.addAction( "frontend/element_ready/crete_team.default", function ($scope, $) { creteTeamSlider(); });
        elementorFrontend.hooks.addAction( "frontend/element_ready/crete_brands.default", function ($scope, $) { creteBrandSlider(); });
        elementorFrontend.hooks.addAction( "frontend/element_ready/crete_service_grid.default", function ($scope, $) { CreteServicecrSlider(); });
        elementorFrontend.hooks.addAction( "frontend/element_ready/crete_about_story.default", function ($scope, $) { CreteAboutStorySlider(); });



    });

})(jQuery);