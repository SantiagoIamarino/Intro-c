
function setImagePreview(previewElement, imageFile = null) {

    if(!imageFile) {
        const imageFileUrl = $(previewElement).data('image-file');

        imageFile = `${uploadsDir}/${imageFileUrl}`;
    }
    

    const html = `
        <img style='max-height:100px' src="${imageFile}">
        </img>
    `;

    $(previewElement).html('');
    $(previewElement).append(html);

}

function imageChanged(event) {
    
    const parentElement = $(event.target).parents('div')[0]
    const previewElement = $(parentElement).find('.image-preview');
    
    var reader = new FileReader();
    reader.onload = function() {
        setImagePreview(previewElement, reader.result);
    }
        
    reader.readAsDataURL(event.target.files[0]);

}


$(document).ready(() => {
    $('div[data-image-file]').each((index) => {
        setImagePreview($('div[data-image-file]')[index]);
    })
})