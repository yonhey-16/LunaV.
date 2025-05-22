<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "Luna");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cantidades'])) {
    foreach ($_POST['cantidades'] as $id => $cantidad) {
        $cantidad = (int)$cantidad;
        if ($cantidad > 0) {
            $sql = "UPDATE carrito SET cantidad = ? WHERE id = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param('ii', $cantidad, $id);
            $stmt->execute();
        }
    }
}
// Redirigir de vuelta al carrito
header('Location: carrito.php');
exit;
?>
