<?php
    session_start();
    if(!isset($_SESSION['usu']))
    {
        header('Location:index.php');
        die();
    }
?>