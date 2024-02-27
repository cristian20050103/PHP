<?php
// Puedes agregar cualquier código PHP necesario aquí
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
        }

        p {
            color: #333;
        }

        .btn {
            background-color: #4c5eafd0;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #4562a086;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Bienvenido inicio de sesion exitoso</h2>
        <p>Esta es una página de inicio de sesion de  ejemplo.</p>
        <a href="registro.php" class="btn">REGISTRARSE</a>
    </div>
</body>
</html>
