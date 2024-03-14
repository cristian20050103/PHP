<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    // Conexión a la base de datos (cambiar estos valores según tu configuración)
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "registro_usuarios";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email='$email' AND contrasena='$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Usuario autenticado correctamente, iniciar sesión y redirigir a la página de inicio
        $_SESSION["email"] = $email;
        header("Location: inicio.php");
    } else {
        // Credenciales incorrectas, mostrar mensaje de error
        echo "Correo electrónico o contraseña incorrectos.";
    }

    $conn->close();
}
?>








