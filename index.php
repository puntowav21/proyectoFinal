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
    <h1>Login</h1>
    <br>
    <form action="./logica/ValidarLogin.php" method = 'POST'>
        <label for="NombreUser">Nombre de Usuario</label>
                <input type="text" name="nombre_usuario" require>
            <br>
            <label for="password">Contrasena</label>
                <input type="password" name="password" require>
            <br>
            <button type="submit">Iniciar Sesion</button>


    </form>
</body>
</html>