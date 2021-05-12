function seeAllProjects(e) {
    e.preventDefault();
    $('.projects-overview .project-hidden').fadeIn(500);

    $('.load-more-btn').css({
        display: 'none'
    })
}

let actualLogosScreen = 0;
let goingTo = 'next';
let maxScreens = 3;
function logosSlider() {
    setInterval(() => {
        console.log(actualLogosScreen);
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

        if(maxScreens > 3) {
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

function homeSliderEffect() {
    const slides = document.getElementsByClassName("defaultimg");

    for (let i = 0; i < slides.length; i++) {
        const slide = slides[i];
        slide.animate([
            // keyframes
            { transform: 'scale(1.0)' },
            { transform: 'scale(1.15)' }
          ], {
            // timing options
            duration: 6100,
            iterations: 1
        });
    }

    setTimeout(() => {
        for (let i = 0; i < slides.length; i++) {
            const slide = slides[i];
            slide.animate([
                // keyframes
                { transform: 'scale(1.15)' },
                { transform: 'scale(1.0)' }
              ], {
                // timing options
                duration: 6000,
                iterations: 1
            });
        }
        
    }, 6000)
}

function counterAnimation(counter, total) {
    let count = 0;
    const initialInterval = 2500;
    const interval = initialInterval / total;
  
    const intervalFunction =
        setInterval(() => {
            count = count + 2;
            counter.innerText = count;
        
            if(count >= total) {
                counter.innerText = total;
                clearInterval(intervalFunction);
            }
    
        }, interval);
}

function initCounters() {
    const counters = document.getElementsByClassName('js-counterup-custom');

    for(let i = 0; i < counters.length; i++) {
        const counter = counters[i];
        const total = parseInt(counter.innerText);
        counterAnimation(counter, total);
    }
  
  }

$(document).ready(() => {
    if(('.home-page').length > 0) {
        homeSliderEffect();
        setInterval(() => {
            homeSliderEffect();
        }, 12000);
        
    }

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

    function checkScroll() {
        const countersDiv = $('.counters-section');
        const scrollTop = countersDiv[0].offsetTop - 700;

        if(window.scrollY >= scrollTop) {
            console.log(window.scrollY, scrollTop);
            initCounters();
            document.removeEventListener('scroll', checkScroll);
        }
    }

    if($('.js-counterup-custom').length > 0) {
        document.addEventListener('scroll', checkScroll);
    }
    
})