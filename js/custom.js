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
    const slides = $('.home-projects-slider .tp-bgimg');

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
    
})

// Search bar
function searchContent(event) {
    const term = event.target.value;
    
    if(!term) {
        $('.search-content .results').css('display', 'none');
        return;
    }

    if(term.length < 3) {
        $('.search-content .results').css('display', 'block');
        $('.search-content .results ul').html('<li>Escribe al menos 3 letras..</li>');

        return;
    }

    $.ajax({
        url: searchLogicUrl,
        data: { term: term },
        method: 'POST',
        success: (res) => {

            const response = JSON.parse(res);

            if(!response.ok) {
                return;
            }

            if(response.results.length == 0) {
                $('.search-content .results').css('display', 'block');
                $('.search-content .results ul').html(`
                    <li>No se han encontado resultados para '${term}'</li>
                `);
                return;
            }

            let html = "";

            for (let i = 0; i < response.results.length; i++) {
                const result = response.results[i];
                let typeUrl = (result?.category) ? result.category : 'proyectos';

                if(typeUrl == 'noticia') typeUrl = 'noticias';

                const resultUrl = `${siteUrl}${typeUrl}/${result.slug}`;

                html += `
                    <li onclick="location.href='${resultUrl}'">
                        ${result.title}
                    </li>
                `;

                if((i + 1) == 5) {
                    break;
                }
                
            }

            $('.search-content .results ul').html(html);

        }
    })
    
}