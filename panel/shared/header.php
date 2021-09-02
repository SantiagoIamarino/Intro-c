<?php session_start();
    
    if(!isset($_SESSION['userEmail']) || !isset($_SESSION['userName'])) {
        header('Location: ./login');
        return;
    }

    include('../config.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])){
        session_destroy();

        header('Location: ./login');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro arquitectura | Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="shared/header.css">
    <link rel="stylesheet" href="shared/main.css">
<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5M43SWV');</script>
    <!-- End Google Tag Manager -->
</head>
<body class="animsition js-preloader">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5M43SWV";
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid d-flex justify-content-between">
                <a class="navbar-brand" href="../">
                    <img src="../images/icon/logo_intro.png" alt="" class="d-inline-block align-top">
                    <span>Administración Intro</span>
                </a>
                <form method='POST' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <button type='submit' name='logout' class='btn btn-info'>
                        Cerrar sesión
                        <i class="bi bi-box-arrow-right"></i>
                    </button>
                </form>
               
            </div>
        </nav>
    </header>

    <aside>
        <div class="panel-options">
            <ul>
                <li class='users-option'>
                    <a href="usuarios.php">
                        <i class="bi bi-people"></i> Usuarios
                    </a>
                </li>
                <li class='blog-option'>
                    <a href="blog.php">
                        <i class="bi bi-pencil-square"></i> Articulos
                    </a>
                </li>
            </ul>
        </div>
        
    </aside>

    <div class="content">

    