<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"]; // Contraseña en texto plano

    if (!empty($nombre) && !empty($email) && !empty($contrasena)) {
        $conn = new mysqli("127.0.0.1", "root", "", "registro_usuarios");

        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // No hasheamos la contraseña ya que la estamos almacenando en texto plano
        $sql = "INSERT INTO usuarios (nombre, email, contrasena) VALUES ('$nombre', '$email', '$contrasena')";

        if ($conn->query($sql)) {
            echo "Registro exitoso";
        } else {
            echo "Error al registrar usuario: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Todos los campos son obligatorios";
    }
}
?>




