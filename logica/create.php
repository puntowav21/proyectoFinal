<?php
include('./db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";
    
    if ($sistema_conn->query($sql) === TRUE) {
        header('Location: ../paginaPrincipal.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $sistema_conn->error;
    }
}
?>