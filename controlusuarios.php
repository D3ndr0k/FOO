<?php

include "config.php";
session_start();

if(!empty($_POST["submit"])){
  if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["email"]) or empty($_POST["password"])){
    echo "<div class='alerta'> Completa todos los campos </div>";
  }else{

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $veremail = mysqli_query($conn,"SELECT * from usuarios where email='$email' ");

    if(mysqli_num_rows($veremail) > 0){
        echo"<div class='alerta'>Este correo ya existe</div>";

    }else{

    $sql=$conn->query("insert into usuarios(nombre,apellido,email,password)values('$nombre','$apellido','$email','$password')");
   if ($sql==1) {
    echo 'registrado';
   }else{
     echo 'error';
   }
 
  }

  }


}



?>
