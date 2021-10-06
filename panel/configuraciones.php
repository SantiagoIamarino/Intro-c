<?php 
    include('./shared/header.php');

    $statement = $db->prepare("SELECT * FROM configs LIMIT 1");
    $statement->execute();
    $configs = $statement->fetch();

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['configs'])) {

        $statement = $db->prepare("
            UPDATE `configs` 
                SET 
                    url_home_video_spanish = :url_home_video_spanish,
                    url_home_video_english = :url_home_video_english
            ");
        $statement->execute(array(
            'url_home_video_spanish' => $_POST['url_home_video_spanish'],
            'url_home_video_english' => $_POST['url_home_video_english']
        ));

        echo "<script>alert('Configuracion actualizada correctamente')</script>";
        echo "<script>location.href='./configuraciones.php'</script>";

    }

?>

    <div class="users page-container">
        <div class="title">
            <h2>Administración de usuarios</h2>
            <hr>
        </div>

        <div class="page-content">
            <div class="manage-user w-100">
                <div class="user-form">
                    <h5>Configuraciones</h5>
                    <hr>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='POST'>
                        <a href="https://blog.ensalza.com/como-insertar-un-video-de-youtube-en-tu-pagina-web/"
                             class='d-block mb-3' target='_blank'>
                            ¿Como obtener el código de un video de YouTube?
                        </a>

                        <p class='mb-3'>
                            El código debe ser pegado a continuación tal cual lo devuelve YouTube, sin espacios y caracteres añadidos.
                        </p>

                        <div class="mb-3">
                            <label for="url_home_video_spanish" class="form-label">Video home - Español</label>
                            <textarea id="url_home_video_spanish" cols="30" rows="5"
                                class="form-control" name="url_home_video_spanish"
                                ><?php echo (isset($configs['url_home_video_spanish'])) ? $configs['url_home_video_spanish'] : '' ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="url_home_video_english" class="form-label">Video home - Inglés</label>
                            <textarea id="url_home_video_english" cols="30" rows="5"
                                class="form-control" name="url_home_video_english"
                                ><?php echo (isset($configs['url_home_video_english'])) ? $configs['url_home_video_english'] : '' ?></textarea>
                        </div>

                        <div class="w-100 save-btn d-flex justify-content-end">
                            <button class='save-btn' type='submit' name='configs'>
                                <i class="bi bi-save"></i>
                                Editar configuraciones
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

<?php include('./shared/footer.php') ?>