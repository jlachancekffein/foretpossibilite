import $ from 'jquery'
import faqSlider from './faq_slider.js'
import faqLightbox from './faq_lightbox.js'
import hasHash from './has_hash.js'

let is_voxpop = $('.page-voxpop').length;
if (is_voxpop) {

    faqSlider();

    faqLightbox({
        onHide: function(){
            $('#voxpop-video .embed-container').html('');
        }
    });

    // Video click handler
    $('[data-play-video]').on('click tap', function(e){
        var url = $(this).attr('data-play-video');
        var slug = $(this).attr('data-slug');
        var iframe = `<iframe src="${url}" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>`;

        // if ( Array.isArray(window.dataLayer) ) {
        //     window.dataLayer.push({ 'event' : slug });
        // }

        window.dataLayer.push({
            'eventCategory': 'voxpop',
            'eventAction': 'Voxpop thumbnail click',
            'eventLabel': slug,
            'event': 'gtm_event'
        });

        e.stopPropagation();
        $('#voxpop-video .embed-container').html(iframe);
        $('.faq-lightbox--video').fadeIn();
        $('body').addClass('faq-lightbox--is-visible');
        return false;
    });

    // Play first video if hash is present
    $(function(){
        if (hasHash('jouer')) {
            $('[data-play-video]').eq(0).click();
        }
    });

}
