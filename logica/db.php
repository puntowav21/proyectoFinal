<?php
/*
$host = 'localhost:3306';
$user = 'root';
$pass = 'l252112';
$dbname = 'wapp';
*/
$host = 'sql110.infinityfree.com';
$user = 'if0_40470405';
$pass = 'jHV5UE9wCEfv';
$dbname = 'if0_40470405_wapp';

$sistema_conn = new mysqli($host,$user,$pass,$dbname);

    if($sistema_conn -> connect_error){
        die('conexion con error'. $con->connect_error);
    }
?>