import $ from 'jquery'
import faqSlider from './faq_slider.js'
import faqLightbox from './faq_lightbox.js'
import hasHash from './has_hash.js'

let is_faq = $('.page-faq').length;
if (is_faq) {

    faqSlider({
        'initialSlideMobile' : 1
    });

    faqLightbox();

    let $window = $(window);
    let $carousel = $('.page__content .carousel');
    if ( $window.width() <= 767 ) {

    }


    // Submit form handler
    $('[data-submit-question-form]').on('click tap', function(e){
        e.stopPropagation();
        $('.question-form').submit();
        return false;
    });

    // Show lightbox if hash is present
    $(function(){
        if (hasHash('question')) {
            $('.faq-lightbox--form').fadeIn();
            $('body').addClass('faq-lightbox--is-visible');
        }
    });

}
