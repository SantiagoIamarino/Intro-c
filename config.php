<?php
    $dsn = 'mysql:dbname=lunadiwn_intro;host=localhost';
    $user = 'lunadiwn_intro';
    $password = 'P4fhBnf;oXXH';
    // $dsn = 'mysql:dbname=intro;host=localhost';
    // $user = 'root';
    // $password = 'root';

    try {
        $db = new PDO($dsn, $user, $password);
        $db->exec("set names utf8");
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }

?>