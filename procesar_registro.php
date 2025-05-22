<?php
$conexion = new mysqli("localhost", "root", "", "Luna");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $contrasena = password_hash($_POST["contrasena"], PASSWORD_DEFAULT);
    $genero = $_POST["genero"];

    // Validar si el email ya está registrado
    $verificar = $conexion->prepare("SELECT * FROM personas WHERE email = ?");
    $verificar->bind_param("s", $email);
    $verificar->execute();
    $resultado = $verificar->get_result();

    if ($resultado->num_rows > 0) {
        echo "Este correo ya está registrado.";
    } else {
        $insertar = $conexion->prepare("INSERT INTO personas (nombre, email, contrasena, usuario, genero) VALUES (?, ?, ?, ?, ?)");
        $insertar->bind_param("sssss", $nombre, $email, $contrasena, $usuario, $genero);

        if ($insertar->execute()) {
            echo "Registro exitoso. ¡Bienvenido!";
        } else {
            echo "Error al registrar.";
        }
    }
}
?>
