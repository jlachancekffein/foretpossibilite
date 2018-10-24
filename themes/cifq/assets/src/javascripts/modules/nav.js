import $ from 'jquery'
import rightHeight from 'Right-Height'
import { TweenMax, Power2, TimelineLite } from 'gsap'

// Objects to animate when navigation is displayed
var navObjects = [];

$('.nav .nav__content--menu-main li').each(function(index, el) {
    navObjects.push(el);
});
navObjects.push($('.partners-btn'));
navObjects.push($('.nav__copy'));
navObjects.push($('.extra-links'));

$('.header__menu').on('click', function(event) {
    event.preventDefault();
    // Burger icon behavior
    $(this).find('.burger-icon').toggleClass('burger-icon--x');
    // Close menu with fade out effect
    // if($('.nav').hasClass('visible')) {
    //     TweenLite.from($('.nav'), .4, { css:{autoAlpha:0}, onComplete: animateMenu });
    // }

    // Handle navigation display
    $('.nav').toggleClass('visible');

    if($('.nav').hasClass('visible')) {
        TweenLite.from($('.nav'), .4, { css:{autoAlpha:0}, onComplete: animateMenu });
    }else{
        $(navObjects).each(function(index, el) {
            $(el).css('visibility', 'hidden'); 
        });
    }
});

function animateMenu() {
    console.log(navObjects)
    TweenMax.staggerFrom(navObjects, .3, { css:{autoAlpha:0, transform:"translateY(10px)"}, delay: .2 }, .2);
}
