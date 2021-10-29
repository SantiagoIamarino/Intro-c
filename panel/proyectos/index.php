<?php 

    include('../shared/header.php');
    include('functions.php');

    $statement = $db->prepare("SELECT * FROM projects");
    $statement->execute();

    $projects = $statement->fetchAll();

    if(isset($_GET['projectId']) && !empty($_GET['projectId'])) {

        $statement = $db->prepare("SELECT * FROM projects WHERE id = :id");
        $statement->execute(array(
            'id' => $_GET['projectId']
        ));

        $project = $statement->fetch();

        // Deleting images
        foreach ($images as $key => $image) {

            $field_name = $image['field'];
            $image_url = $project[$field_name];
    
            deleteImage($image_url);
    
        }

        $statement = $db->prepare("DELETE FROM projects WHERE id = :id");
        $statement->execute(array(
            'id' => $_GET['projectId']
        ));
        

        echo '<script>alert("Proyecto eliminado correctamente"); location.href = "./"</script>';
    }

?>

    <div class="blog page-container">
        <div class="posts-list">
            <div class="top">
                <div class="title">
                    <h2>Administración de proyectos</h2>
                </div>
                <div class="new-post">
                    <button class='btn btn-primary'>
                        <a href="project.php">
                            Nuevo proyecto
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
                        <th scope="col" class="text-center">Cliente</th>
                        <th scope="col" class="text-center">Año</th>
                        <th scope="col" class="text-center">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($projects as $key=>$project): ?>
                        <tr>
                            <th scope="row"><?php echo ($key + 1) ?></th>
                            <td><?php echo $project['title'] ?></td>
                            <td class="text-center"><?php echo $project['client'] ?></td>
                            <td class="text-center"><?php echo $project['year'] ?></td>
                            <td class="text-center">
                                <button onclick="location.href = 'project.php?projectId=<?php echo $project['id'] ?>'"
                                    class='btn btn-outline-info'>
                                    <i class="bi bi-pencil"></i>
                                    Editar
                                </button>
                                <button onclick="deleteProject('<?php echo $project['id']; ?>')"
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

    <script>

        function deleteProject(projectId) {

            if(confirm('¿Estás seguro/a que deseas eliminar este proyecto?')) {
                location.href = '?projectId=' + projectId;
            }
            
        }

    </script>

<?php 
    include('../shared/footer.php');
?>