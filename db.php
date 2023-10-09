<?php
  $host= "localhost";
  $database="distribuidora";
  $user ="root";
  $password="";
  try{
    $conn= new PDO("mysql:host=$host; dbname=$database", $user, $password);
   
  }
  catch(PDOException $e){
echo ("Error en la conexión a la base de datos");
  }
?>