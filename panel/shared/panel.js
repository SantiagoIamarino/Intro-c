let actualScreen;
let editor;

if(location.href.indexOf('usuarios') >= 0) {
    actualScreen = document.getElementsByClassName('users-option')[0];
}

if(location.href.indexOf('proyectos') >= 0) {
  actualScreen = document.getElementsByClassName('proyectos-option')[0];
}

if(location.href.indexOf('blog') >= 0) {
    actualScreen = document.getElementsByClassName('blog-option')[0];
}

if(location.href.indexOf('configuraciones') >= 0) {
  actualScreen = document.getElementsByClassName('configs-option')[0];
}

if(location.href.indexOf('post') >= 0) {
    actualScreen = document.getElementsByClassName('blog-option')[0];

    const container = document.getElementById('text-editor');
    var options = {
        modules: {
          toolbar: [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            ['blockquote', 'link'],
            
            [{ 'header': 1 }, { 'header': 2 }],               // custom button values
            ['image', 'video'] ,               
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
            [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
            [{ 'direction': 'rtl' }],                         // text direction
            
            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            
            [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
            [{ 'font': [] }],
            [{ 'align': [] }],   
          ]     
        },
        placeholder: 'Contenido del articulo.',
        theme: 'snow'
        // readOnly: true,
      };
      
    editor = new Quill(container, options);
}


actualScreen.classList.add('active');
function getContent() {
    const content = editor.root.innerHTML;
    document.getElementById('content_hidden').value = content;

    document.getElementById('post_form').submit();
    
}