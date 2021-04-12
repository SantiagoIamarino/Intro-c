function seeAllProjects(e) {
    e.preventDefault();
    $('.projects-overview .project-hidden').fadeIn(500);

    $('.load-more-btn').css({
        display: 'none'
    })
}

let actualLogosScreen = 0;
let goingTo = 'next';
let maxScreens = 2;
function logosSlider() {
    setInterval(() => {
        if((actualLogosScreen + 1) > maxScreens) {
            actualLogosScreen = 0;
            goingTo = 'back';
        } else if(goingTo == 'next') {
            actualLogosScreen++;
        } else if(actualLogosScreen == 0) {
            goingTo = 'next';
            actualLogosScreen++;
        } else {
            goingTo = 'back';
            actualLogosScreen--;
        }

        let containerClass = ".logos-home";

        if(maxScreens > 2) {
            containerClass = ".logos-home.logos-home-mobile";
        }
        
        $(containerClass + ' .active').removeClass('active');
        const nextScreen = $(containerClass + ' .screen-inner')[actualLogosScreen];
        $(nextScreen).addClass('active');
    }, 5000)
}

function aboutUsLogosSlider() {
    setInterval(() => {
        $('.about-us-clients .mobile-slider-wrapper .slide-hidden').addClass('slide-showing');
    
        $('.about-us-clients .mobile-slider-wrapper .row:not(.slide-hidden)')
            .addClass('slide-hidden');
    
        $('.about-us-clients .mobile-slider-wrapper .slide-showing')
            .removeClass('slide-showing')
            .removeClass('slide-hidden');
    }, 4000);
    
}

$(document).ready(() => {
    if($('.logos-home').length > 0) {
        $('.media-project').on('click', (e) => {
            const target = e.target;
            let parent;
    
            if(target.className.indexOf('media-project') >= 0) {
                parent = target;
            } else {
                parent = $(target).parent('.media-project');
            }
    
            $(parent).find('a').click();
        })
    
        if($('.logos-home').length > 0 && window.innerWidth <= 767) {
            maxScreens = 4;
        }
    
        logosSlider();
    }

    if($('.about-us-clients').length > 0){
        aboutUsLogosSlider();
    }
    
})