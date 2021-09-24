<?php

    $urlSplitted = explode('/', $_SERVER['REQUEST_URI']);
    $lang = (isset($_GET['language']) && $_GET['language'] == 'en') ? 'en' : 'es';
    $base_url = ($lang == 'es') ? $assets_url : $url . 'en/';
    
    if(isset($_GET['language']) && !empty($_GET['language'])){
        $_SESSION['lang'] = $lang;

        if(isset($urlSplitted[2]) && $urlSplitted[2] == $lang) {
            return;
        };

        if(count($urlSplitted) > 3) { //Fuera del index
            $currentDirectory = ($lang == 'es') ? $urlSplitted[3] : $urlSplitted[2];
            echo "<script>location.href='" . $base_url . $currentDirectory . "'</script>";
        } else { //Index
            echo "<script>location.href='" . $base_url . "'</script>";
        }
    }

?>