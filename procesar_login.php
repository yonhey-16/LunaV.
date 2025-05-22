<?php
session_start(); // Iniciar sesión

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "Luna");

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Buscar usuario en la base de datos
$sql = "SELECT * FROM personas WHERE usuario = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $fila = $resultado->fetch_assoc();
    
    // Verificar la contraseña
    if (password_verify($contrasena, $fila['contrasena'])) {
        // Guardar datos en sesión
        $_SESSION['usuario'] = $fila['usuario'];
        $_SESSION['nombre'] = $fila['nombre'];
        
        // Redirigir a la página principal
        header("Location: index.php");
        exit();
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "El usuario no existe.";
}

$conexion->close();
?>
