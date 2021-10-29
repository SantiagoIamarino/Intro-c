<?php 
    include('../shared/header.php');
    include('functions.php');

    global $upload_dir;

    if(isset($_GET['projectId']) && !empty($_GET['projectId'])) {
        $statement = $db->prepare("SELECT * FROM projects WHERE id = :projectId");
        $statement->execute(array(
            'projectId' => $_GET['projectId']
        ));

        $project = $statement->fetch();
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(validateProject($_POST)) {

            if(isset($_POST['projectId']) && !empty($_POST['projectId'])) { //Editing

                editProject();
    
            } else { // New post
                
                createProject();
    
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
                    <label for="title" class="form-label">Título del proyecto</label>
                    <input type="text" class="form-control" name="title"
                        value="<?php echo (isset($project['title'])) ? $project['title'] : '' ?>"
                        id="title" placeholder="Título del artículo">
                </div>

                <div class="mb-3">

                    <label for="principal_img" class="form-label w-100">Imagen vista previa</label>

                    <?php if(isset($project['principal_img']) && !empty($project['principal_img'])): ?>
                        <div class='image-preview mb-2' data-image-file='<?php echo $project['principal_img'] ?>'></div>
                        <input type="hidden" name='principal_img' value="<?php echo $project['principal_img']; ?>">
                    <?php endif; ?>

                    <input type="file" name='principal_img' onchange='imageChanged(event)'>

                </div>
                
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label for="year" class="form-label">Año</label>
                        <input type="text" class="form-control" name="year"
                            value="<?php echo (isset($project['year'])) ? $project['year'] : '' ?>"
                            id="year" placeholder="Ejemplo: 2020">
                    </div>

                    <div class="col-12 col-md-6">
                        <label for="client" class="form-label">Cliente</label>
                        <input type="text" class="form-control" name="client"
                            value="<?php echo (isset($project['client'])) ? $project['client'] : '' ?>"
                            id="client" placeholder="Cliente">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                       <label for="location" class="form-label">Ubicación</label>
                       <input type="text" class="form-control" name="location"
                           value="<?php echo (isset($project['location'])) ? $project['location'] : '' ?>"
                           id="location" placeholder="Ubicación">
                   </div>
    
                    <div class="col-12 col-md-6">
                       <label for="surface" class="form-label">Superficie</label>
                       <input type="text" class="form-control" name="surface"
                           value="<?php echo (isset($project['surface'])) ? $project['surface'] : '' ?>"
                           id="surface" placeholder="Ejemplo: 2000 (solo número)">
                   </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-6">

                        <label for="little_image_1" class="form-label w-100">Imagen pequeña 1</label>

                        <?php if(isset($project['little_image_1']) && !empty($project['little_image_1'])): ?>
                            <div class='image-preview mb-2' data-image-file='<?php echo $project['little_image_1'] ?>'></div>
                            <input type="hidden" name='little_image_1' value="<?php echo $project['little_image_1']; ?>">
                        <?php endif; ?>

                        <input type="file" name='little_image_1' onchange='imageChanged(event)'>

                   </div>
    
                   <div class="col-12 col-md-6">

                        <label for="little_image_2" class="form-label w-100">Imagen pequeña 2</label>

                       <?php if(isset($project['little_image_2']) && !empty($project['little_image_2'])): ?>
                           <div class='image-preview mb-2' data-image-file='<?php echo $project['little_image_2'] ?>'></div>
                           <input type="hidden" name='little_image_2' value="<?php echo $project['little_image_2']; ?>">
                       <?php endif; ?>

                        <input type="file" name='little_image_2' onchange='imageChanged(event)'>

                   </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-6">

                        <label for="vertical_image" class="form-label w-100">Imagen vertical</label>

                        <?php if(isset($project['vertical_image']) && !empty($project['vertical_image'])): ?>
                            <div class='image-preview mb-2' data-image-file='<?php echo $project['vertical_image'] ?>'></div>
                            <input type="hidden" name='vertical_image' value="<?php echo $project['vertical_image']; ?>">
                        <?php endif; ?>

                        <input type="file" name='vertical_image' onchange='imageChanged(event)'>

                   </div>
    
                   <div class="col-12 col-md-6">

                        <label for="under_vertical_image" class="form-label w-100">Imagen debajo vertical</label>

                       <?php if(isset($project['under_vertical_image']) && !empty($project['under_vertical_image'])): ?>
                           <div class='image-preview mb-2' data-image-file='<?php echo $project['under_vertical_image'] ?>'></div>
                           <input type="hidden" name='under_vertical_image' value="<?php echo $project['under_vertical_image']; ?>">
                       <?php endif; ?>

                        <input type="file" name='under_vertical_image' onchange='imageChanged(event)'>

                   </div>
                </div>

                <?php 
                    if(isset($project['es_content']) && !empty($project['es_content'])){
                        echo "<script>setTimeout(() => editor.root.innerHTML = '" . $project['es_content'] . "', 500)</script>";
                    }

                ?>

                <div class="mt-4 mb-3">
                    <label for="text-editor" class="form-label">Contenido del artículo</label>
                    <div id="toolbar-container"></div>
                    <div id="text-editor" class='text-editor'></div>
                    <input type="hidden" id='es_content_hidden' name='es_content'>
                </div>

                <?php 
                    if(isset($project['en_content']) && !empty($project['en_content'])){
                        echo "<script>setTimeout(() => enEditor.root.innerHTML = '" . $project['en_content'] . "', 500)</script>";
                    }

                ?>

                <div class="mt-4 mb-3">
                    <label for="en-text-editor" class="form-label">Contenido del artículo (Ingles)</label>
                    <div id="toolbar-container"></div>
                    <div id="en-text-editor" class='text-editor'></div>
                    <input type="hidden" id='en_content_hidden' name='en_content'>
                </div>

                <div class="w-100 save-btn d-flex justify-content-center mt-4">
                    <?php if(isset($_GET['projectId']) && !empty($_GET['projectId'])): ?>
                        <input type="hidden" name='projectId'
                            value='<?php echo htmlspecialchars($_GET['projectId']) ?>'>
                        <button class='save-btn' onclick='getProjectContent(event)'
                            type='submit' name='postEdit'>
                            <i class="bi bi-pencil"></i>
                            Editar artículo
                        </button>
                    <?php else: ?>
                        <button onclick='getProjectContent(event)' type='submit'
                            style='min-width: 300px' class='save-btn' name='postEdit'>
                            <i class="bi bi-save"></i>
                            Cargar proyecto
                        </button>
                    <?php endif; ?>
                </div>
            </form>
        </div>     
    </div>

    <script>

        function getProjectContent(event) {
            
            const esContent = editor.root.innerHTML;
            document.getElementById('es_content_hidden').value = esContent;

            const enContent = enEditor.root.innerHTML;
            document.getElementById('en_content_hidden').value = enContent;
            
        }

    </script>

<?php 
    include('../shared/footer.php');
?>