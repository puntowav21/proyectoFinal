<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="css/xp.css">
<link rel="shortcut icon" href="./media/favicon.ico" type="image/x-icon">

    <style>
        body {
            background: #0a3d91 url('./media/windowsWallpaper.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Tahoma;
        }

        .xp-login-window {
            width: 350px;
            border: 2px solid #0a246a;
            background: #ece9d8;
            box-shadow: inset -1px -1px #ffffff, inset 1px 1px #808080;
        }

        .xp-login-title {
            background: linear-gradient(#1b4fa5, #2b71d8);
            color: white;
            padding: 10px;
            font-weight: bold;
            text-align: center;
        }

        .xp-login-content {
            padding: 20px;
        }

        .xp-label {
            font-weight: bold;
            font-size: 13px;
        }

        .xp-input {
            width: 100%;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        .xp-btn {
            width: 100%;
            font-size: 14px;
        }
    </style>
</head>

<body>

<div class="xp-login-window">
    <div class="xp-login-title">
        Bienvenido
    </div>

    <div class="xp-login-content">

        <form action="./logica/ValidarLogin.php" method="POST">

            <label class="xp-label">Nombre de Usuario</label>
            <input class="xp-input" type="text" name="nombre_usuario" required>

            <label class="xp-label">Contraseña</label>
            <input class="xp-input" type="password" name="password" required>

            <button class="xp-btn" type="submit">Iniciar Sesión</button>

        </form>

    </div>
</div>

</body>
</html>
