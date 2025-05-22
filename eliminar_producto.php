<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "Luna");

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $sql = "DELETE FROM carrito WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
}
// Redirigir de vuelta al carrito
header('Location: carrito.php');
exit;
?>
