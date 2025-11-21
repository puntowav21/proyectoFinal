<?php
session_start();

    $_SESSION['username'] = 'text';
    $_SESSION[''] = '';
    session_destroy();
   header('location: ../index.php');

    exit();
?>