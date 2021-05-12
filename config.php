<?php
    
    /* ESTAS VAN A PRODUCCIÓN */
    // $dsn = 'mysql:dbname=introarquitectur_main;host=localhost';
    // $user = 'introarquitectur_main';
    // $password = 'Pv!-,ZBkW[WS';

    /* ESTAS SON PARA DEV  */
     $dsn = 'mysql:dbname=intro;host=localhost';
    $user = 'root';
    $password = 'root'; 

    //dev
    $upload_dir = 'C:/MAMPhtdocs/Intro/uploads/';
    //prod
    // $upload_dir = '/home/rquitectur/public_html/uploads/';

    try {
        $db = new PDO($dsn, $user, $password);
        $db->exec("set names utf8");
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }

?>