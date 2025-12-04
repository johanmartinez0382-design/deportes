<?php
include('connection.php');
$con = connection();

// Validar que venga el id
if (!isset($_GET['id_tipo'])) {
    exit("ID no proporcionado.");
}

$id_tipo = $_GET['id_tipo'];

// Preparar sentencia segura
$stmt = $con->prepare("DELETE FROM tipo_producto WHERE id_tipo = ?");
$stmt->bind_param("i", $id_tipo); // "i" = tipo entero

// Ejecutar
$stmt->execute();

// Validar eliminación
if ($stmt->affected_rows > 0) {
    header("Location: index_tipo.php");
    exit();
} else {
    echo "No se pudo eliminar el registro o no existe.";
}

$stmt->close();
$con->close();
?>
