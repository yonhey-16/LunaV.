<?php
session_start();
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "Luna");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $precio = $_POST['precio'] ?? 0;

    if ($nombre && $precio) {
        // Suponiendo que tienes una tabla carrito con columnas id, nombre, precio, cantidad
        $cantidad = 1;

        // Verificar si ya existe el producto en el carrito para incrementar cantidad
        $sql_check = "SELECT cantidad FROM carrito WHERE nombre = ?";
        $stmt_check = $conexion->prepare($sql_check);
        $stmt_check->bind_param('s', $nombre);
        $stmt_check->execute();
        $resultado = $stmt_check->get_result();

        if ($resultado->num_rows > 0) {
            // Actualizar cantidad
            $row = $resultado->fetch_assoc();
            $nueva_cantidad = $row['cantidad'] + 1;

            $sql_update = "UPDATE carrito SET cantidad = ? WHERE nombre = ?";
            $stmt_update = $conexion->prepare($sql_update);
            $stmt_update->bind_param('is', $nueva_cantidad, $nombre);
            $stmt_update->execute();
        } else {
            // Insertar nuevo producto en carrito
            $sql_insert = "INSERT INTO carrito (nombre, precio, cantidad) VALUES (?, ?, ?)";
            $stmt_insert = $conexion->prepare($sql_insert);
            $stmt_insert->bind_param('sdi', $nombre, $precio, $cantidad);
            $stmt_insert->execute();
        }
        echo 'ok';
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}
?>
