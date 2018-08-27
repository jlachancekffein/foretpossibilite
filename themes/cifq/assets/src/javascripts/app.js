//
// Global dependencies
//
import $ from 'jquery'
window.$ = $
window.jQuery = $

import { TweenMax, Power2, TimelineLite } from 'gsap'
import rightHeight from 'Right-Height'
import 'slick-carousel'
import SimpleBar from 'simplebar'

//
// isArray Polyfill
//
if (! Array.isArray) {
    Array.isArray = function(arg) {
        return Object.prototype.toString.call(arg) === '[object Array]';
    };
}

//
// Modules (Components and pages)
//
import './modules/nav'
// import './modules/footer'
import './modules/home'
import './modules/faq'
import './modules/voxpop'
import './modules/possibility'
import './modules/cycle'
import './modules/quiz'

//rightHeight.init();

//
// SimpleBar
//
var wrapper = new SimpleBar($('.wrapper')[0]);
var has_simplebar = $('.simplebar-scroll-content').length;
if (! has_simplebar) {
    // Fix wrapper when SimpleBar is inactive
    $('.wrapper').addClass('wrapper--no-simplebar');
    $('.wrapper').append(`<div class="wrapper__white-border">`);
}
