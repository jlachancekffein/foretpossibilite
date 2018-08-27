import $ from 'jquery'

export default function(config) {
    config = config || {};
    config.initialSlideMobile = config.initialSlideMobile || 0;

    /*
     * Carousel (FAQ and Voxpop pages)
     */

    let $window = $(window);
    let $carousel = $('.page__content .carousel');
    let $arrow_prev = $('.page__content .switcher__arrow--left');
    let $arrow_next = $('.page__content .switcher__arrow--right');
    let slide_count = $('.page__content .slide').length;

    // Initialize Slick
    $carousel.slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '',
        nextArrow: '',
        infinite: false,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1279,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: true
                }
            },
            {
                breakpoint: 519,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: false,
                    initialSlide: config.initialSlideMobile
                }
            }
        ]
    });

    // Fade-in the carousel after it's initialized
    setTimeout(function(){
        $('[data-fade-in-element]').animate({'opacity' : 1}, 300);
    }, 50);

    // Switcher events
    $('[data-slider-back]').on('click tap', () => {
        $carousel.slick('slickPrev');
    });
    $('[data-slider-forward]').on('click tap', () => {
        $carousel.slick('slickNext');
    });

    // Initialize left arrow
    $arrow_prev.css({ opacity: .2 });

    // Handle arrow opacity on slide change
    $carousel.on('beforeChange', (event, slick, current_slide, next_slide) => {
        // This depends on the slidesToShow setting
        let adjust = $window.width() > 1279 ? 3 : 1;

        if (next_slide > 0) $arrow_prev.css({ opacity: 1 });
        else $arrow_prev.css({ opacity: .2 });

        if ( next_slide == slide_count - adjust ) $arrow_next.css({ opacity: .2 });
        else $arrow_next.css({ opacity: 1 });
    });

} // export
