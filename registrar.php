<?php 
require("db.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $conn
    ->prepare("INSERT into usuarios (nombre, contraseña) VALUES (:name, :password)")
    ->execute([
      ":name" => $_POST["name"],
      ":password" => password_hash($_POST["contraseña"], PASSWORD_BCRYPT),
    ]);
    header("Location: login.php");
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>REGISTRO</title>
</head>
<body>

<form class="agregar" action="registrar.php" method="POST">
  <div>
    <label class="form-label">Nombre:</label>
    <input type="text" class="form-control" name="name">
  </div>
    <label class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="contraseña">
  </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>

        
</body>
</html>