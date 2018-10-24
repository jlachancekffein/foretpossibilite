import $ from 'jquery'
import { TweenMax, Power2, TimelineLite } from 'gsap'


/**
 * START - Intro animation
 */

new TimelineLite().from($('.page-home .home__introduction p'), .8, { css:{autoAlpha:0, transform:"translateY(50px)"} })
.from($('.page-home .home__introduction .btn--cta'), .8, { css:{autoAlpha:0, transform:'translateY(50px)'} });

$('.page-home .home__introduction .btn--cta').on('click tap', function(event) {
    event.preventDefault();
    TweenLite.to($('.page-home .home__introduction'), .8, { css:{autoAlpha:0}, onComplete: displayMenu });

    // new TimelineLite().to($('.page-home .home__introduction'), .8, { css:{autoAlpha:0} })
    // .from($('.page-home .home__main-menu'), .8, { css:{autoAlpha:0, transform:"translateY(50px)"} });
});

function displayMenu() {
    $('.page-home .home__introduction').addClass('hidden');
    $('.page-home .home__main-menu').addClass('visible');

    //TweenLite.from($('.page-home .home__main-menu'), .8, { css:{autoAlpha:0, transform:"translateY(50px)"} });

    TweenMax.staggerFrom('.home__main-menu .home-cta', .8, { css:{autoAlpha:0, transform:"translateY(50px)"}, delay: .2 }, .2);
}

 /**
  * END - Intro animation
  */

/**
 * START - Handle video display on mouseover menu items
 */

var currVideo;
var videoTimeout;

$('.page-home .home__main-menu .home-cta').on('mouseover mouseout', function(event) {
    event.preventDefault();

    if(event.type == "mouseover") {
        if(!$(this).hasClass('active')) {
            $('.page-home .cifq-logo').addClass('hidden');
            $('.page-home .home__main-menu .home-cta').removeClass('active');
            $(this).addClass('active');
            $('.page-home .video-wrap video').removeClass('active');

            currVideo = $('.page-home .video-wrap video#vid-'+$(this).attr('id'));
            
            videoTimeout = displayVideo(currVideo);

        }
    }

});

function displayVideo(elt)
{
    
    elt.addClass('active');
    elt[0].play();
    
    var elt2 = $('#'+elt.attr('id')+'-loop') 
    elt2.addClass('active');
    elt2[0].play();
    


   

    elt[0].addEventListener('ended',function(){
        elt.removeClass('active');
    }, false);
}

$('.page-home .home__main-menu .home-cta').on('touchend', function(event) {
    event.preventDefault();
    window.location.href = $(this).attr('href');
});

/**
 * END - Handle video display on mouseover menu items
 */
