<?php
    
    /* ESTAS VAN A PRODUCCIÓN */
    $dsn = 'mysql:dbname=lunadiwn_intro;host=localhost';
    $user = 'lunadiwn_intro';
    $password = 'P4fhBnf;oXXH';

    /* ESTAS SON PARA DEV  */
    // $dsn = 'mysql:dbname=intro;host=localhost';
    // $user = 'root';
    // $password = 'root';

    // $upload_dir = 'C:/MAMP/htdocs/Intro/uploads/';
    $upload_dir = '/home/lunadiwn/intro.lunadi.wnpower.host/uploads/';

    try {
        $db = new PDO($dsn, $user, $password);
        $db->exec("set names utf8");
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }

?>