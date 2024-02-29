<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario registros php</title>
</head>
<style>
    body{
        padding: 10px;
        text-align: center;
        background-color: rgb(135, 206, 235);
        font-family: Arial,sans-serif;
    }
    .form{
        border-radius: 5px;
        border: 2px solid black;
        height: 350px;
        width: 300px;
        margin: auto;
        background-color: rgba(255, 192, 203)!important;
        box-shadow: 10px 5px 5px black;
    }
    .form:hover{
        border-color: yellow;
    }
    .boton{
        align-items: center;
        text-align: center;
        padding: 15px;

    }
    button{
        text-align: center;
        height: 26px;
        width: 150px;
        border-radius: 5px;
        transition: background-color 0.5s;
        box-shadow: 10px 5px 5px black;
        
    }
    button:hover{
        background-color: rgba(135, 206, 235);
        
    }
    .input-wrapper{
        padding: 15px;
    }
    h1,h2{
        color: #fff;;
    }
    input[type="text"] {
        height: 25px; 
    }
    input[type="password"] {
        height: 25px; 
    }
    
    
</style>
<body>
    <form method="post">
        <h1>Bienvenido a su registro</h1>
        <div class="form">
        <h2>Inicia tu registro</h2>

        <div class="input-wrapper">
        <img class="input-icon" src="" alt=""><br>
            <input type="text" name="" placeholder="nombres" size="30">
            

        </div>

        <div class="input-wrapper">
            <input type="text" name="email"  placeholder="e-mail" size="30" >
            <img class="input-icon" src="" alt="">
        </div>
        <div class="input-wrapper">
            <input type="password" name="contraseña"  placeholder="contraseña" size="30" >
            <img class="input-icon" src="" alt="">
        </div>
        
        <div class="boton">
        <button>Enviar</button>
        </div>
        </div>
    </form>
</body>
</html>