
function setImagePreview(previewElement) {
    const imageFileUrl = $(previewElement).data('image-file');

    const html = `
        <img style='max-height:100px' src="${uploadsDir}/${imageFileUrl}">
        </img>
    `;

    $(previewElement).append(html);
}


$(document).ready(() => {
    $('div[data-image-file]').each((index) => {
        setImagePreview($('div[data-image-file]')[index]);
    })
})