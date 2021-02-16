<?php session_start();
    
    if(!isset($_SESSION['userEmail']) || isset($_SESSION['userName'])) {
        header('Location: ./login');
        return;
    }

?>