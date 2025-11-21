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
    <title>Document</title>
</head>
<body>
    <h1>Mi pagina de inicio</h1>

    <button onclick="location.href='./logica/session_destroy.php'">salir</button>
</body>
</html>

<?php

?>