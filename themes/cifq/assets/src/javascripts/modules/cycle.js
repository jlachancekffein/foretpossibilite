import $ from 'jquery'

let is_cycle = $('.page-cycle').length;
if (is_cycle) {

    let $html = $('html');
    let $wrapper = $('.wrapper');
    let $wrapper_inner = $('.wrapper__inner');
    let $circles_container = $('.page__content .circles');
    let $carousel = $('.page__content .carousel');
    let $arrow_prev = $('.page__content .switcher__arrow--left');
    let $arrow_next = $('.page__content .switcher__arrow--right');
    let $slides = $('.page__content .slide');
    let slide_count = $slides.length;
    let $preloader = $('#preload-images');


    ////////////////////////////////////////////////////////////////////////////
    // Initialize the slides
    //

    let tmp_prev = null;

    $slides.each(function(i){
        this.$el = $(this);
        this.prev_slide = null;
        this.next_slide = null;
        this.slide_number = i+1;
        this.background_image = this.$el.attr('data-background-image');
        this.circle_image = this.$el.attr('data-circle-image');
        this.slug = this.$el.attr('data-slug');

        // Set wrapper__item (background)
        $wrapper_inner.append(`<div class="wrapper__item wrapper__item-${this.slide_number}"></div>`);
        this.$background = $(`.wrapper__item-${this.slide_number}`);
        this.$background.css({ 'background-image' : `url(${this.background_image})`});

        // Preload images
        $preloader.append(`<img src="${this.background_image}">`);
        $preloader.append(`<img src="${this.circle_image}">`);

        // Chain all slides together
        if (tmp_prev) {
            this.prev_slide = tmp_prev;
            this.prev_slide.next_slide = this;
        }
        tmp_prev = this;

        //
        // Methods
        //

        this.showSlide = function() {
            this.showBackground();
            this.rotateCircles();
        }

        this.showBackground = function() {
            // Fade-in background
            $wrapper.css({ 'background-image' : `url(${this.background_image})`});
            $slides.$backgrounds.removeClass('wrapper__item--is-current');
            this.$background.addClass('wrapper__item--is-current');
        }

        this.rotateCircles = function() {
            // Show or hide first and last circles
            $slides.$circles.removeClass('circle--is-hidden');
            if (this.slide_number == 1) {
                $slides.$circle_left.addClass('circle--is-hidden');
            }
            else if (this.slide_number == slide_count) {
                $slides.$circle_right.addClass('circle--is-hidden');
            }

            // Rotate the circles
            $slides.$circles.find('.circle__image--is-previous').remove();
            $slides.$circles.find('.circle__image')
                .removeClass('circle__image--is-current')
                .addClass('circle__image--is-previous')
                .css({ 'opacity' : 0 });

            if (this.prev_slide !== null) {
                $slides.$circle_left.append( this.prev_slide.getCircleImageTag() );
            }
            $slides.$circle_center.append( this.getCircleImageTag() );

            if (this.next_slide !== null) {
                $slides.$circle_right.append( this.next_slide.getCircleImageTag() );
            }

            // Fade-in the circles
            let delay = 80;
            let animation = 300;

            $slides.$circle_right.find('.circle__image--is-current')
                .delay(delay * 1)
                .animate({ 'opacity' : 1}, animation);

            $slides.$circle_center.find('.circle__image--is-current')
                .delay(delay * 3)
                .animate({ 'opacity' : 1}, animation);

            $slides.$circle_left.find('.circle__image--is-current')
                .delay(delay * 5)
                .animate({ 'opacity' : 1}, animation);
        }

        this.getCircleImageTag = function() {
            let class_list = `circle__image circle__image--is-current circle__image--${this.slug}`;
            return `<img class="${class_list}" src="${this.circle_image}">`;
        }
    });

    // Reference to backgrounds and circles
    $slides.$backgrounds = $wrapper_inner.find('.wrapper__item');
    $slides.$circles = $('.circles .circle');
    $slides.$circle_left = $('.circles .circle--left');
    $slides.$circle_center = $('.circles .circle--center');
    $slides.$circle_right = $('.circles .circle--right');

    // Prepare first slide
    $slides[0].showBackground();


    ////////////////////////////////////////////////////////////////////////////
    // Initialize the carousel
    //

    $carousel.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        prevArrow: '',
        nextArrow: '',
    });

    // Initialize left arrow
    $arrow_prev.css({ opacity: .2 });

    // Fade-in the carousel after it's initialized
    setTimeout(function(){
        $('[data-fade-in-element]').animate({'opacity' : 1}, 300);
    }, 50);


    ////////////////////////////////////////////////////////////////////////////
    // Carousel events
    //

    var switcher_locked = false;
    var switcher_unlock_delay = 500; // ms

    // Custom switcher
    $('[data-slider-back]').on('click tap', function() {
        if (!switcher_locked) {
            $carousel.slick('slickPrev');
        }
    });
    $('[data-slider-forward]').on('click tap', function() {
        if (!switcher_locked) {
            $carousel.slick('slickNext');
        }
    });

    // Slick events
    $carousel.on('beforeChange', function(event, slick, current_slide, next_slide) {
        switcher_locked = true;

        // Arrow opacity
        if (next_slide > 0) $arrow_prev.css({ opacity: 1 });
        else $arrow_prev.css({ opacity: .2 });
        if (next_slide == slide_count - 1) $arrow_next.css({ opacity: .2 });
        else $arrow_next.css({ opacity: 1 });

        // Show next slide only when we get a full swipe
        if (current_slide != next_slide)
            $slides[next_slide].showSlide();

        if (current_slide < next_slide)
            $circles_container.attr('class', 'circles circles--direction-next')
        else
            $circles_container.attr('class', 'circles circles--direction-prev')
    });

    $carousel.on('afterChange', function(event, slick, current_slide, next_slide) {
        setTimeout(function() { switcher_locked = false; }, switcher_unlock_delay);
    });

} // is_cycle
