<?php 
session_start(); 
$usuario=$_SESSION['username']; 
if(!isset($usuario)){ 
    header("location: ./index.php"); 
} 
?>
<?php include('head.php'); ?>
<?php include('./logica/db.php'); 
$consulta= "SELECT * FROM usuarios"; 
$result = $sistema_conn->query($consulta); 
$editar_id = isset($_GET['editar']) ? $_GET['editar'] : null; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Usuarios del sistema</title>

<link rel="stylesheet" href="css/xp.css">
<link rel="shortcut icon" href="./media/favicon.ico" type="image/x-icon">
</head>
<body>

<div class="xp-window">
    <div class="xp-titlebar">
        Usuarios del Sistema 
        <button class="xp-btn" onclick="location.href='./logica/session_destroy.php'">Salir</button>
    </div>

    <div class="xp-content">

        <a class="xp-btn" href="./create.php">Agregar Usuario</a>

        <table class="xp-table">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>

            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>

                <?php if ($editar_id == $row['id']) { ?>
                <form action="update.php" method="POST">
                    <td><input class="xp-input" type="text" name="nombre" value="<?php echo $row['nombre']; ?>"></td>
                    <td><input class="xp-input" type="email" name="email" value="<?php echo $row['email']; ?>"></td>
                    <td><input class="xp-input" type="text" name="telefono" value="<?php echo $row['telefono']; ?>"></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button class="xp-btn" type="submit">Actualizar</button>
                        <a class="xp-link" href="paginaPrincipal.php">Cancelar</a>
                    </td>
                </form>

                <?php } else { ?>

                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
                <td>
                    <a class="xp-link" href="paginaPrincipal.php?editar=<?php echo $row['id']; ?>">Editar</a> |
                    <a class="xp-link" href="./logica/delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                </td>

                <?php } ?>
            </tr>
            <?php } ?>
        </table>

    </div>
</div>

</body>
</html>
<?php include('footer.php'); ?>