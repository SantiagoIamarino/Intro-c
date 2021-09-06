<?php

    $urlSplitted = explode('/', $_SERVER['REQUEST_URI']);
    $lang = (isset($_GET['language']) && $_GET['language'] == 'en') ? 'en' : 'es';
    $base_url = ($lang == 'es') ? $assets_url : $url . 'en/';
    
    if(isset($_GET['language']) && !empty($_GET['language'])){
        // $_SESSION['lang'] = $lang;

        if(count($urlSplitted) > 3) { //Fuera del index
            $currentDirectory = ($lang == 'es') ? $urlSplitted[3] : $urlSplitted[2];
            header('Location: ' . $base_url . $currentDirectory);
        } else { //Index
            header('Location: ' . $base_url);
        }
    }

?>