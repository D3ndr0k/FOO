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
    $rubro = $_POST["rubro"];

    $veremail = mysqli_query($conn,"SELECT * from locales where email='$email' ");
    $veremail2 = mysqli_query($conn,"SELECT * from usuarios where email='$email' ");


    if(mysqli_num_rows($veremail) > 0 || mysqli_num_rows($veremail2) > 0){
        echo"<div class='alerta'>Este correo ya existe</div>";

    }else{

    $sql=$conn->query("insert into locales(nombre,direccion,email,password,telefono,rubro) values('$nombre','$direccion','$email','$password','$telefono','$rubro')");
   if ($sql==1) {
    header("location: iniciarsesion.php");
   }else{
     echo 'Error';
   }
 
  }

  }
}

?>