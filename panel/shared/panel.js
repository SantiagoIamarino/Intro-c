let actualScreen;
let editor;

if(location.href.indexOf('usuarios') >= 0) {
    actualScreen = document.getElementsByClassName('users-option')[0];
}

if(location.href.indexOf('blog') >= 0) {
    actualScreen = document.getElementsByClassName('blog-option')[0];
}

if(location.href.indexOf('post') >= 0) {
    actualScreen = document.getElementsByClassName('blog-option')[0];

    const container = document.getElementById('text-editor');
    DecoupledEditor
        .create( container, {
            language: 'es'
        })
        .then( editorElement => {
            const toolbarContainer = document.querySelector( '#toolbar-container' );

            toolbarContainer.appendChild( editorElement.ui.view.toolbar.element );
            editor = editorElement;
        } )
        .catch( error => {
                console.error( error );
        } );
}


actualScreen.classList.add('active');

function getContent() {
    const content = editor.getData();
    document.getElementById('content_hidden').value = content;

    document.getElementById('post_form').submit();
    
}