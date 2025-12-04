<?php
include('connection.php');
$con = connection();

// Validar que venga el id
if (!isset($_GET['id_producto'])) {
    exit("ID no proporcionado.");
}

$id_producto = $_GET['id_producto'];

// Preparar la sentencia
$stmt = $con->prepare("DELETE FROM producto WHERE id_producto = ?");
$stmt->bind_param("i", $id_producto); // "i" = entero

// Ejecutar
$stmt->execute();

// Verificar si eliminó
if ($stmt->affected_rows > 0) {
    header("Location: index_producto.php");
    exit();
} else {
    echo "No se pudo eliminar el producto o no existe.";
}

$stmt->close();
$con->close();
?>

