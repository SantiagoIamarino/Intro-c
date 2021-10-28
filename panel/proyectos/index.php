<?php 
    include('../shared/header.php');

    global $upload_dir;

    if(isset($_GET['postId']) && !empty($_GET['postId'])) {
        $statement = $db->prepare("SELECT * FROM posts WHERE id = :postId");
        $statement->execute(array(
            'postId' => $_GET['postId']
        ));

        $post = $statement->fetch();
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $post = $_POST;

        if(!isset($post['title']) || empty($_POST['title'])) {
            echo '<script>alert("Debes indicar un título")</script>';
        } else if(!isset($post['slug']) || empty($_POST['slug'])) {
            echo '<script>alert("Debes indicar un slug")</script>';
        }else if(!isset($post['metaDescription']) || empty($_POST['metaDescription'])) {
            echo '<script>alert("Debes indicar un meta description")</script>';
        } else {
            $statement = $db->prepare("SELECT * FROM posts WHERE slug = :slug");
            $statement->execute(array(
                'slug' => $_POST['slug']
            ));
    
            $slugExists = $statement->fetch();

            if(isset($slugExists) && !empty($slugExists) && !isset($_POST['postId'])){
                echo '<script>alert("Ya existe un artículo con ese slug")</script>';
            } else {
                if(isset($_POST['postId']) && !empty($_POST['postId'])) { //Editing
                    if(isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
                        $image = basename($_FILES['image']['name']);

                        if (!move_uploaded_file($_FILES['image']['tmp_name'], $upload_dir . $image)) {
                            echo '<script>alert("No se ha podido subir la imagen")</script>';
                        }
                    } else {
                        $image = $_POST['imageUrl'];
                    }
                    
        
                    $statement = $db->prepare("UPDATE posts SET title = :title, category = :category, slug = :slug, metaDescription = :metaDescription, content = :content, imageUrl = :imageUrl
                            WHERE id = :postId");

                    $statement->execute(array(
                        'title' => $_POST['title'], 
                        'category' => $_POST['category'],
                        'slug' => $_POST['slug'], 
                        'metaDescription' => $_POST['metaDescription'], 
                        'content' => $_POST['content'], 
                        'imageUrl' => $image,
                        'postId' => $_POST['postId']
                    ));
        
                    header('Location: post.php?postId=' . $_POST['postId']);
        
                } else { // New post
                    if(!isset($_FILES['image']) || empty($_FILES['image'])) {
                        echo '<script>alert("Debes indicar una imagen")</script>';
                    }
        
                    $image = $upload_dir . basename($_FILES['image']['name']);
        
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $image)) {
                        $statement = $db->prepare("INSERT INTO posts(title, category, slug, metaDescription, content, imageUrl) 
                                        VALUES (:title, :category, :slug, :metaDescription, :content, :imageUrl)");
                        $statement->execute((array(
                            'title' => $_POST['title'], 
                            'category' => $_POST['category'],
                            'slug' => $_POST['slug'], 
                            'metaDescription' => $_POST['metaDescription'], 
                            'content' => $_POST['content'], 
                            'imageUrl' => basename($_FILES['image']['name'])
                        )));
        
                        echo '<script>alert("Articulo subido correctamente")</script>';
                        header('Location: blog.php');
                    } else {
                        echo '<script>alert("No se ha podido subir la imagen")</script>';
                    }
                }
            }
        }

    }

?>

    <div class="post page-container">
        <div class="title">
            <h2>Añadir nuevo artículo</h2>
            <hr>
        </div> 
        <div class="post-form">
            <form id='post_form' enctype="multipart/form-data"
                action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='POST'>
                <div class="mb-3">
                    <label for="title" class="form-label">Título del artículo</label>
                    <input type="text" class="form-control" name="title"
                        value="<?php echo (isset($post['title'])) ? $post['title'] : '' ?>"
                        id="title" placeholder="Título del artículo">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Tipo</label>
                    <select name="category" id="type" class='form-control'>
                        <option <?php echo (isset($post['category']) && $post['category'] == 'blog') ? 'selected' : '' ?>
                            value="blog">Articulo del blog</option>
                        <option <?php echo (isset($post['category']) && $post['category'] == 'noticia') ? 'selected' : '' ?>
                            value="noticia">Noticia</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug"
                        value="<?php echo (isset($post['slug'])) ? $post['slug'] : '' ?>"
                        id="slug" placeholder="articulo-numero-uno">
                </div>

                <div class="mb-3">
                    <label for="metaDescription" class="form-label">Meta description</label>
                    <input type="text" class="form-control" name="metaDescription"
                        value="<?php echo (isset($post['metaDescription'])) ? $post['metaDescription'] : '' ?>"
                        id="metaDescription" placeholder="Descripción del artículo">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label w-100">Imagen vista previa</label>
                    <input type="file" name='image'>
                    
                    <?php if(isset($post['imageUrl']) && !empty($post['imageUrl'])): ?>
                        <input type="hidden" name='imageUrl' value="<?php echo $post['imageUrl']; ?>">
                    <?php endif; ?>
                </div>

                <?php 
                    if(isset($post['content']) && !empty($post['content'])){
                        echo "<script>setTimeout(() => editor.root.innerHTML = '" . $post['content'] . "', 500)</script>";
                    }

                ?>

                <div class="mt-4 mb-3">
                    <label for="text-editor" class="form-label">Contenido del artículo</label>
                    <div id="toolbar-container"></div>
                    <div id="text-editor"></div>
                    <input type="hidden" id='content_hidden' name='content'>
                </div>

                <div class="w-100 save-btn d-flex justify-content-center mt-4">
                    <?php if(isset($_GET['postId']) && !empty($_GET['postId'])): ?>
                        <input type="hidden" name='postId'
                            value='<?php echo htmlspecialchars($_GET['postId']) ?>'>
                        <button class='save-btn' onclick='getContent()'
                            type='button' name='postEdit'>
                            <i class="bi bi-pencil"></i>
                            Editar artículo
                        </button>
                    <?php else: ?>
                        <button onclick='getContent()' type='button'
                            style='min-width: 300px' class='save-btn' name='postEdit'>
                            <i class="bi bi-save"></i>
                            Subir artículo
                        </button>
                    <?php endif; ?>
                </div>
            </form>
        </div>     
    </div>

<?php 
    include('../shared/footer.php');
?>