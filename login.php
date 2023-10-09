<?php require "db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style2.css">
    <title>Login</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <div  class="login1">
        <form action="">
            <div class="itemform">
                <label for="usuario">Usuario: </label> 
                <input type="text" name="usuario" id="usuario" required> 
             </div>
            <div class="itemform">
                <label for="apellido">Contraseña: </label>
                <input type="password" name="contraseña" id="contraseña" require>
            </div>
            <a href="" type="button" class="btn btn-outline-success">Iniciar Sesión</a>
            <a href="index.php" type="button" class="btn btn-outline-success">Volver</a>
        </form>
    </div>
</body>
</html>