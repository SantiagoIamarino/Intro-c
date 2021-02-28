<?php 
    include('./shared/header.php');

    $statement = $db->prepare("SELECT * FROM posts");
    $statement->execute();

    $posts = $statement->fetchAll();

?>

    <div class="blog page-container">
        <div class="posts-list">
            <div class="top">
                <div class="title">
                    <h2>Administración de artículos</h2>
                </div>
                <div class="new-post">
                    <button class='btn btn-primary'>
                        <a href="post.php">
                            Nuevo artículo
                            <i class="bi bi-plus-square ml-1"></i>
                        </a>
                    </button>
                </div>
            </div>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($posts as $key=>$post): ?>
                        <tr>
                            <th scope="row"><?php echo ($key + 1) ?></th>
                            <td><?php echo $post['title'] ?></td>
                            <td><?php echo date('d/m/Y', strtotime($post['date'])) ?></td>
                            <td>
                                <button onclick="location.href = 'post.php?postId=<?php echo $post['id'] ?>'"
                                    class='btn btn-outline-info'>
                                    <i class="bi bi-pencil"></i>
                                    Editar
                                </button>
                                <button onclick="location.href = 'blog.php?postId=<?php echo $post['id'] ?>'"
                                    class='btn btn-outline-danger'>
                                    <i class="bi bi-trash"></i>
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

<?php 
    include('./shared/footer.php');
?>