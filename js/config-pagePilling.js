(function ($) {
    // USE STRICT
    "use strict";


    //-------------------------------------------------------
    // Config Pagepiling
    //-------------------------------------------------------

    try {

        var pagePillingWrap = $('.js-pagepilling');
        var pageInfo = $('#js-pageinfo');
        var pageTitle = pageInfo.find('.page-info__title');
        var header = $('.header-page-pilling');
        var wW = $(window).width();

        // EFFECT VARIABLE
        var jsLine = $('.js-line');

        if(wW > 1500) {

            pagePillingWrap.each(function () {

                var that = $(this);

                that.pagepiling({
                    menu: '.custom-menu',
                    direction: 'vertical',
                    verticalCentered: true,
                    sectionsColor: [],
                    anchors: ['nosotros', 'whatWeDo', 'works', 'us', 'testimonial', 'contact'],
                    scrollingSpeed: 550,
                    easing: 'ease-in-out',
                    loopBottom: false,
                    loopTop: false,
                    css3: true,
                    navigation: {
                        'position': 'right'
                    },
                    normalScrollElements: null,
                    normalScrollElementTouchThreshold: 5,
                    touchSensitivity: 5,
                    keyboardScrolling: true,
                    sectionSelector: '.section-pp',
                    animateAnchor: false,

                    afterRender: function(){
                        $('#pp-nav').addClass('pp-bullet');
                    },
                    onLeave: function(index, nextIndex, direction){

                        /* CHANGE PAGE INFO */
                        var nextSection = $('.page-pagepiling-wrap .section-pp').eq(nextIndex-1);
                        var color = nextSection.data('background');
                        var title = nextSection.data('title');
                        pageInfo.removeClass('light dark').addClass(color);
                        $('#pp-nav').removeClass('light dark').addClass(color);
                        pageTitle.text(title);
                        header.removeClass('light dark').addClass(color);
                        let url = 'images/icon/';
                        if(location.href.indexOf('en') >= 0) { url = '../' + url }
                        if (color === 'light') header.find('.logo img').attr('src', url + 'logo-black.png');
                        else header.find('.logo img').attr('src', url + 'logo-white.png');


                        /* EFFECTS */
                        if (nextIndex == 4)
                            jsLine.addClass('active');

                    }

                });

            });

            $('.js-mouse-wheel').on('click', function (e) {
                $.fn.pagepiling.moveSectionDown();
                e.preventDefault();
            });

        }


    }
    catch (err) {
        console.log(err);
    }
})(jQuery);