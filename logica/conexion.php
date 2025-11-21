<?php
$host = 'localhost:3306';
$user = 'root';
$pass = 'l252112';
$db = 'login_db';

$conn = new mysqli($host,$user,$pass,$db);

    if($conn -> connect_error){
        die('conexion con error'. $con->connect_error);
    }

?>