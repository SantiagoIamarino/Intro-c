<?php

    $isProduction = false;

    if($isProduction) {

        $url = 'http://www.introarquitectura.com.ar/';
        $assets_url = 'http://www.introarquitectura.com.ar/';

        $dsn = 'mysql:dbname=introarquitectur_main;host=localhost';
        $user = 'introarquitectur_main';
        $password = 'Pv!-,ZBkW[WS';

        $upload_dir = '/home/introarquitectur/public_html/uploads/';

    } else {

        $url = 'http://localhost/Intro/';
        $assets_url = 'http://localhost/Intro/';
        
        $dsn = 'mysql:dbname=intro;host=localhost';
        $user = 'root';
        $password = ''; 

        $upload_dir = 'C:/xampp/htdocs/Intro/uploads/';

    }


    try {
        $db = new PDO($dsn, $user, $password);
        $db->exec("set names utf8");
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }

?>