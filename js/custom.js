function seeAllProjects(e) {
    e.preventDefault();
    $('.projects-overview .project-hidden').fadeIn(500);

    $('.load-more-btn').css({
        display: 'none'
    })
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
})