//
// Global dependencies
//
import $ from 'jquery'
window.$ = $
window.jQuery = $

import { TweenMax, Power2, TimelineLite } from 'gsap'
import rightHeight from 'Right-Height'
import 'slick-carousel'

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
import './modules/home'
import './modules/faq'
import './modules/voxpop'
import './modules/possibility'
import './modules/cycle'
import './modules/quiz'


 