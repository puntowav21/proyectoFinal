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

    <button onclick="location.href='./logica/session_destroy.php'">salir</button>
</body>
</html>

<?php
    include('./logica/db.php');
    $consulta= "SELECT * FROM usuarios";
    $result = $sistema_conn->query($consulta);
    $editar_id = isset($_GET['editar']) ? $_GET['editar'] : null;
?>
<?php include('./head.php'); ?>

    <h1>Usuarios</h1>
    <a href="./create.php">Agregar Usuario bandera 1</a>
    <table border="1">
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
                <td>
                    <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
                </td>
                <td>
                    <input type="email" name="email" value="<?php echo $row['email']; ?>">
                </td>
                <td>
                    <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>">
                </td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit">Actualizar</button>
                    <a href="paginaPrincipal.php">Cancelar</a>
                </td>
            </form>
        <?php } else { ?>

            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td>
                <a href="paginaPrincipal.php?editar=<?php echo $row['id']; ?>">Editar</a>
                <a href="./logica/delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
            </td>
        <?php } ?>

    </tr>
    <?php } ?>
</table>

<?php  include('./footer.php');  ?>