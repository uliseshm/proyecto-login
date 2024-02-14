<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
        <?php
        include ("login.php");
        ?>
    <form action="" method="post">
        <h1>Inicio de Sesión</h1>
        <div class="inputs-container">
            <label for="user">Usuario</label>
            <input type="email" name="user" id="user" placeholder="Ingresa tu correo">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" placeholder="Ingresa tu contraseña">
            <button type="submit" name="btn">Iniciar Sesión</button>
        </div>
    </form>
    
</body>
</html>