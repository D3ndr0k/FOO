<?php

include "config.php";
session_start();

if(!empty($_POST["submit"])){
  if (empty($_POST["nombre"]) or empty($_POST["direccion"]) or empty($_POST["email"]) or empty($_POST["password"]) or empty($_POST["telefono"])){
    echo "<div class='alerta'> Completa todos los campos </div>";
  }else{

    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $telefono = $_POST["telefono"];


    $veremail = mysqli_query($conn,"SELECT * from locales where email='$email' ");

    if(mysqli_num_rows($veremail) > 0){
        echo"<div class='alerta'>Este correo ya existe</div>";

    }else{

    $sql=$conn->query("insert into locales(nombre,direccion,email,password,telefono) values('$nombre','$direccion','$email','$password','$telefono')");
   if ($sql==1) {
    echo 'registrado';
   }else{
     echo 'error';
   }
 
  }

  }
}

?>