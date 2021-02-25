<?php session_start();
    
    // if(!isset($_SESSION['userEmail']) || isset($_SESSION['userName'])) {
    //     header('Location: ./login');
    //     return;
    // }

    $dsn = 'mysql:dbname=intro;host=localhost';
    $user = 'root';
    $password = 'root';

    try {
        $db = new PDO($dsn, $user, $password);
        $db->exec("set names utf8");
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
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
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid d-flex justify-content-between">
                <a class="navbar-brand" href="#">
                    <img src="../images/icon/logo_intro.png" alt="" class="d-inline-block align-top">
                    <span>Administración Intro</span>
                </a>
                <button class='btn btn-info'>
                    Cerrar sesión
                    <i class="bi bi-box-arrow-right"></i>
                </button>
            </div>
        </nav>
    </header>

    <aside>
        <div class="panel-options">
            <ul>
                <li class='active'><i class="bi bi-people"></i> Usuarios</li>
                <li><i class="bi bi-pencil-square"></i> Blog</li>
            </ul>
        </div>
        
    </aside>

    <div class="content">

    