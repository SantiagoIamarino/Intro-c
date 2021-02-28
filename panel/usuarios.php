<?php 
    include('./shared/header.php');

    $users = null;

    function getUsers() {
        global $db;
        global $users;

        $statement = $db->prepare("SELECT * FROM users");
        $statement->execute();
        $users = $statement->fetchAll();
    }

    getUsers();

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['users'])) {
        if(!isset($_POST['email']) || empty($_POST['email'])){
            echo "<script>alert('Debes indicar un email')</script>";
        } else if(!isset($_POST['name']) || empty($_POST['name'])){
            echo "<script>alert('Debes indicar un nombre')</script>";
        } else if(!isset($_POST['password']) || empty($_POST['password'])){
            echo "<script>alert('Debes indicar una contraseña')</script>";
        } else if(!isset($_POST['rePassword']) || empty($_POST['rePassword'])){
            echo "<script>alert('Debes repetir la contraseña')</script>";
        }else if($_POST['rePassword'] !== $_POST['password']){
            echo "<script>alert('Las contraseñas no coinciden')</script>";
        } else {
            $password = hash('md5', $_POST['password']);


            $statement = $db->prepare("INSERT INTO `users` ( `name`, `email`, `password`) VALUES (:name, :email, :password)");
            $statement->execute(array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $password
            ));

            echo "<script>alert('Usuario creado correctamente')</script>";
            getUsers();

        }

        
    }

    if($_SERVER['REQUEST_METHOD'] == 'GET' && (isset($_GET['userId']))) {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        $statement = $db->prepare("DELETE FROM users WHERE id = :id");
        $statement->execute(array(
            'id' => $_GET['userId']
        ));
        

        echo '<script>alert("Usuario eliminado correctamente")</script>';
        $_GET['userId'] = null;
        getUsers();
    }

?>

    <div class="users page-container">
        <div class="title">
            <h2>Administración de usuarios</h2>
            <hr>
        </div>

        <div class="page-content">
            <div class="manage-user">
                <div class="user-form">
                    <h5>Añadir usuario</h5>
                    <hr>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method='POST'>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email"
                                value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : '' ?>"
                                id="email" placeholder="usuario@ejemplo.com">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="name"
                                value="<?php echo (isset($_POST['name'])) ? $_POST['name'] : '' ?>"
                                id="name" placeholder="Nombre">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password"
                                value="<?php echo (isset($_POST['password'])) ? $_POST['password'] : '' ?>"
                                id="password" placeholder="Contraseña">
                        </div>
                        <div class="mb-3">
                            <label for="rePassword" class="form-label">Repite la contraseña</label>
                            <input type="password" class="form-control" name="rePassword"
                                value="<?php echo (isset($_POST['rePassword'])) ? $_POST['rePassword'] : '' ?>"
                                id="rePassword" placeholder="Repite la contraseña">
                        </div>

                        <div class="w-100 save-btn d-flex justify-content-end">
                            <button class='save-btn' type='submit' name='users'>
                                <i class="bi bi-save"></i>
                                Agregar usuario
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>

            <div class="user-list">
                <div class="subtitle">
                    <h5>Usuarios activos</h5>
                    <hr>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $key=>$user): ?>
                            <tr>
                                <th scope="row"><?php echo ($key + 1) ?></th>
                                <td><?php echo $user['name'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td>
                                    <button onclick="location.href = 'usuarios.php?userId=<?php echo $user['id'] ?>'"
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
    </div>

<?php include('./shared/footer.php') ?>