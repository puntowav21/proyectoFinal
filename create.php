<?php include('head.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario - XP</title>

    <link rel="stylesheet" href="css/xp.css">

    <style>
        .xp-form-window {
            width: 420px;
            margin: 40px auto;
            border: 2px solid #0a246a;
            background: #ece9d8;
            box-shadow: inset -1px -1px #ffffff, inset 1px 1px #808080;
        }

        .xp-form-title {
            background: linear-gradient(#1b4fa5, #2b71d8);
            color: white;
            padding: 8px 12px;
            font-weight: bold;
        }

        .xp-form-content {
            padding: 20px;
        }

        .xp-label {
            font-size: 14px;
            font-weight: bold;
        }

        .xp-input {
            width: 100%;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        .xp-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .xp-btn {
            padding: 6px 14px;
        }
    </style>
</head>

<body>

<div class="xp-form-window">
    <div class="xp-form-title">
        Agregar Usuario
    </div>

    <div class="xp-form-content">

        <form method="POST" action="./logica/create.php">

            <label class="xp-label">Nombre:</label>
            <input class="xp-input" type="text" name="nombre" required>

            <label class="xp-label">Email:</label>
            <input class="xp-input" type="email" name="email" required>

            <label class="xp-label">Teléfono:</label>
            <input class="xp-input" type="text" name="telefono" required>

            <div class="xp-actions">
                <button class="xp-btn" type="submit">Agregar Usuario</button>
                <a class="xp-btn" href="./paginaPrincipal.php">Volver</a>
            </div>

        </form>

    </div>
</div>

</body>
</html>
<?php include('footer.php'); ?>
