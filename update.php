<?php
include('./logica/db.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

$sql = "UPDATE usuarios SET nombre='$nombre', email='$email', telefono='$telefono' WHERE id=$id";

if ($sistema_conn->query($sql)) {
    header("Location: paginaPrincipal.php");
    exit();
} else {
    echo "Error al actualizar: " . $sistema_conn->error;
}
?>
