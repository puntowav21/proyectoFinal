<?php
    session_start();
    $usuario=$_SESSION['username'];

    if(!isset($usuario)){
        header("location: ./index.php");
    }else

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Final</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <h1>Mi pagina de inicio</h1>

    <button onclick="location.href='./logica/session_destroy.php'">salir</button>
</body>
</html>

<?php

?>