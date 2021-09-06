<?php

    $url = 'http://www.introarquitectura.com.ar/';
    $assets_url = 'http://www.introarquitectura.com.ar/';
    
    // $url = 'http://localhost/Intro/en/'; 
    // $assets_url = 'http://localhost/Intro/';
    
    /* ESTAS VAN A PRODUCCIÓN */
    $dsn = 'mysql:dbname=introarquitectur_main;host=localhost';
    $user = 'introarquitectur_main';
    $password = 'Pv!-,ZBkW[WS';

    /* ESTAS SON PARA DEV  */
    //  $dsn = 'mysql:dbname=intro;host=localhost';
    // $user = 'root';
    // $password = ''; 

    //dev
    // $upload_dir = 'D:/Programas/xampp/htdocs/Intro/uploads/';
    //prod
    $upload_dir = '/home/introarquitectur/public_html/uploads/';

    try {
        $db = new PDO($dsn, $user, $password);
        $db->exec("set names utf8");
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }

?>