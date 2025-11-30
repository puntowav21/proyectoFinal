<?php

$host = 'localhost:3306';
$user = 'root';
$pass = 'l252112';
$db = 'login_db';

//cambio de base de datos 
//hosting
/*
    $host = 'sql110.infinityfree.com';
    $user = 'if0_40470405';  
    $pass = 'jHV5UE9wCEfv';
    $db = 'if0_40470405_proyecto';
*/

$conn = new mysqli($host,$user,$pass,$db);

    if($conn -> connect_error){
        die('conexion con error'. $con->connect_error);
    }

?>