import $ from 'jquery'
import { TweenMax, Power2, TimelineLite } from 'gsap'

if($('html').hasClass('page-quiz-home'))
{
    /**
     * START - Handle video display on mouseover menu items
     */

    var currVideo;
    var videoTimeout;

    $('.page-quiz-home .quiz-link').on('mouseover mouseout', function(event) {
        event.preventDefault();

        if(event.type == "mouseover") {
            $('.page-quiz-home .quiz-link').removeClass('active');
            $(this).addClass('active');
            $('.page-quiz-home .video-wrap div').removeClass('active');
        }
        if(event.type == "mouseout") {
            $('.page-quiz-home .quiz-link').removeClass('active');
            $('.page-quiz-home .video-wrap div').removeClass('active');
        }

        // $(this).toggleClass('active');

        if($(this).hasClass('active')) {
            // $('.page-home .home__main-menu .home-cta:not(.active)').css('opacity', '.7');
            // Display background video
            // currVideo = $('.page-home .video-wrap video#vid-'+$(this).attr('id'));
            currVideo = $('.page-quiz-home .video-wrap div#vid-'+$(this).attr('id'));
            // videoTimeout = setTimeout(function(){ displayVideo(currVideo); }, 500);
            displayVideo(currVideo);

        }else{
            window.clearTimeout(videoTimeout);
            // $('.page-home .home__main-menu .home-cta').css('opacity', '1');
            $('.page-quiz-home .video-wrap div').removeClass('active');

        }
    });

    function displayVideo(elt)
    {
        elt.addClass('active');
        // elt[0].currentTime = 0;
        // elt[0].play();
        $('.page-home .cifq-logo').addClass('hidden');
    }

    $('.page-home .home__main-menu .home-cta').on('touchend', function(event) {
        event.preventDefault();
        window.location.href = $(this).attr('href');
    });

    /**
     * END - Handle video display on mouseover menu items
     */
}


if($('html').hasClass('page-quiz'))
{
    /**
     * Set active current question
     */
    var currentQuestionID, currentQuestionElt;
    var totalQuestions = $('.page-quiz .question').length;
    var results = [];
    var score = 0;

    function setActiveQuestion(id)
    {
        currentQuestionID = id;
        currentQuestionElt = $('.page-quiz #question' + id);

        // Steps dots
        $('.page-quiz .steps__dots li').removeClass('active');
        $('.page-quiz .steps__dots li:nth-child('+id+')').addClass('active');

        // Steps numbers
        $('.page-quiz .steps__numbers').text('0'+id+' / 0'+totalQuestions);

        // Hide previous question
        if(currentQuestionID > 1) {
            //console.log($('.page-quiz #question' + currentQuestionID-1));
            TweenLite.to($('.page-quiz #question' + String(currentQuestionID-1)), .4, { css:{opacity:0}, onComplete: displayNextQuestion });
        }else{
            displayNextQuestion();
        }
    }

    function displayNextQuestion() {
        // $(currentQuestionElt).css('display', 'block');
        $('.page-quiz .question').removeClass('active');
        $(currentQuestionElt).addClass('active', 'block');

        TweenMax.staggerTo($(currentQuestionElt).children('.staggerAnimate'), .4, { css:{opacity:1, transform:"translateY(0)"}, delay: .2 }, .2);
    }

    /**
     * START
     */
    setActiveQuestion(1);

    /**
     * Intro on page loading
     */
    // TweenLite.to($('.page-quiz .question'), .5, { css:{opacity: 1} });
    TweenMax.to($('.page-quiz .mini-quiz'), .5, { ease: Back.easeOut.config(1.7), css:{scale: 1}, delay: .6 });

    /**
     * Store responses text copy to display
     */
    var responseCorrect = $('.page-quiz .responses__copy--true').text();
    var responseIncorrect = $('.page-quiz .responses__copy--false').text();

    /**
     * On click/choice
     */
    $('.page-quiz .question__choices a').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */
        // Unbind click event on
        $(currentQuestionElt).addClass('done');
        $(currentQuestionElt).find('.question__choices a').unbind('click');

        // Store clicked choice
        var choice = $(this);

        if($(choice).data('answer') != undefined) // Correct choice
        {
            results.push({'question': currentQuestionID, 'choice': $(choice).children('span').text(), 'result': 'true'});
            score++;

            $(currentQuestionElt).addClass('correct');
            $(choice).children('span').text(responseCorrect);
        }else{ // Incorrect choice
            results.push({'question': currentQuestionID, 'choice': $(choice).children('span').text(), 'result': 'false'});

            $(currentQuestionElt).addClass('incorrect');
            $(choice).addClass('error');
            $(choice).children('span').text(responseIncorrect);
        }

        // After last question, print string result in hidden input
        if(currentQuestionID == totalQuestions) {
            $('.page-quiz form input[name="result"]').val(JSON.stringify(results));

            // Print score in form input value
            $('.page-quiz form input[name="score"]').val(score);

            // Submit form handler
            $('.page-quiz form').submit();
        }

        /**
         * Hide responses
         */
        TweenLite.to($(currentQuestionElt).find('.question__choices'), .5, { css:{opacity: 0}, onComplete: displayInformation, delay: 1.5 });

        /**
         * Display information
         */
        function displayInformation()
        {
            $(currentQuestionElt).find('.question__choices').css('display', 'none');
            $(currentQuestionElt).find('.question__answer').css('display', 'block');
            // TweenLite.to($(currentQuestionElt).find('.question__answer'), .5, { css:{opacity: 1, transform: 'translateY(0)'} });
            TweenMax.staggerTo($(currentQuestionElt).find('.question__answer').children('.staggerAnimate'), .4, { css:{opacity:1, transform:"translateY(0)"}, delay: .2 }, .2);

            $(currentQuestionElt).find('.question__answer .next-btn').on('click', function(event) {
                event.preventDefault();
                /* Act on the event */
                setActiveQuestion(currentQuestionID+1);
            });
        }

        /**
         * Display result
         */
        $(currentQuestionElt).find('.question__answer .result-btn').on('click', function(event) {
            event.preventDefault();
            /* Act on the event */
            TweenLite.to($('.page-quiz .content, .page-quiz .steps'), .5, { css:{opacity: 0}, onComplete: displayResult });
        });

        function displayResult()
        {
            $('.page-quiz .result').css('display', 'block');
            $('.page-quiz .content').css('display', 'none');

            // Print score
            $('.result__score span').text(score + '/' + totalQuestions);

            if((score >= 0) && (score < 2)) { // Bad score
                $('.page-quiz .result').addClass('bad');
            }else if((score >= 2) && (score < 4)){ // Medium score
                $('.page-quiz .result').addClass('medium');
            }else{ // Good score
                $('.page-quiz .result').addClass('good');
            }

            TweenMax.staggerTo($('.page-quiz .result').children('.staggerAnimate'), .4, { css:{opacity:1, transform:"translateY(0)"}, delay: .2 }, .2);

            TweenMax.to($('.page-quiz .result .result__score img'), .5, { ease: Back.easeOut.config(1.7), css:{scale: 1, rotation: -15}, delay: 1.5 });
        }
    });
}
