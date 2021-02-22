function seeAllProjects(e) {
    e.preventDefault();
    $('.projects-overview .project-hidden').fadeIn(500);

    $('.load-more-btn').css({
        display: 'none'
    })
}

let actualLogosScreen = 0;
let goingTo = 'next';
function logosSlider() {
    setInterval(() => {
        if((actualLogosScreen + 1) > 2) {
            actualLogosScreen--;
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
        
        $('.logos-home .active').removeClass('active');
        const nextScreen = $('.logos-home .screen-inner')[actualLogosScreen];
        $(nextScreen).addClass('active');
    }, 5000)
}

$(document).ready(() => {
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

    if($('.logos-home').length > 0 && window.innerWidth > 767) {
        logosSlider();
    }
})