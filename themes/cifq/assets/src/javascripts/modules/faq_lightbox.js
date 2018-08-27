import $ from 'jquery'

export default function(config) {

    /*
     * Lightbox (FAQ and Voxpop pages)
     */

     $('[data-read-more]').on('click tap', function(e){
         let target_slide = $(this).attr('data-read-more');

         e.stopPropagation();
         $('.faq-lightbox--answers .slide--lightbox').hide();
         $('.faq-lightbox--answers .slide--lightbox[data-slide-number="'+target_slide+'"]').show();
         $('.faq-lightbox--answers').fadeIn();
         $('body').addClass('faq-lightbox--is-visible');
         return false;
     });

      $('[data-show-faq-lightbox]').on('click tap', function(e){
          let target_class = $(this).attr('data-show-faq-lightbox') || 'faq-lightbox';

          e.stopPropagation();
          $('.' + target_class).fadeIn();
          $('body').addClass('faq-lightbox--is-visible');
          return false;
      });

      $('[data-hide-faq-lightbox]').on('click tap', function(e){
          e.stopPropagation();
          $('.faq-lightbox').hide();
          $('body').removeClass('faq-lightbox--is-visible');

          if (config && config.onHide) {
              config.onHide();
          }
          return false;
      });

      $('[data-nop]').on('click tap', function(e){
          e.stopPropagation();
      });

} // export
