<?php 
    session_start();
    if(isset($_SESSION['usuario']) == false) {
        header('location: index.php');
    }
?>