import $ from 'jquery'
import { TweenMax, Power2, TimelineLite } from 'gsap'
import rightHeight from 'Right-Height'

/**
 * Page loading animation
 */

if($('html').hasClass('page-possibility'))
{
    rightHeight.init();

    var pics = [];
    var texts = [];

    $('img[data-animate="true"]').each(function(index, el) {
        pics.push(el);
    });

    // console.log(pics);

    $('li[data-animate="true"]').each(function(index, el) {
        //$(el).find('svg').css('display', 'none');
        texts.push($(el).find('svg'));
    });

    // Re-order z-index for images
    var totalPics = pics.length;
    var i = totalPics - 1;
    $.each(pics, function(index, el) {
        $(el).css('z-index', i);
        i--;
    });

    setTimeout(animateTopics, 1000);

    function animateTopics()
    {
        var j = 0;
        var delay = 0;
        $.each(pics, function(index, el) {
            // console.log(j);
            if(j < pics.length-1) {
                TweenMax.from(el, 1.5, {css:{autoAlpha:0}, delay: delay, yoyo:true, repeat:1});
            }else{
                TweenMax.from(el, 1.5, {css:{autoAlpha:0}, delay: delay});
            }

            TweenMax.from(texts[j], 1.5, {css:{autoAlpha:0}, delay: delay});

            j++;
            delay += 3.5;
        });
    }

    $('.possibility__index-nav a[href="#"]').on('click tap', function(event) {
        event.preventDefault();
    });
}
