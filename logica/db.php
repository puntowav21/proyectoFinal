<?php

$host = 'localhost:3306';
$user = 'root';
$pass = 'l252112';
$dbname = 'wapp';

$sistema_conn = new mysqli($host,$user,$pass,$dbname);

    if($sistema_conn -> connect_error){
        die('conexion con error'. $con->connect_error);
    }
?>