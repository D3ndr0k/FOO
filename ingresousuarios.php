<?php

if(!empty($_POST["submit"])){
    if (empty($_POST["email"]) or empty($_POST["password"])){
      echo "<div class='alerta'> Competa todos los campos </div>";
    }else{

        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql=$conn->query(" select * from usuarios where email='$email' and password='$password'");
        if($datos=$sql->fetch_object()){
            header("location:entraste.php");
        }else{
            echo"<div class='alerta'>El correo o la contraseña está mal</div>";
        }
  
    }

}





/*$email = $_POST["email"];
$password = $_POST["password"];
session_start();
$_SESSION['email']=$email;

include("config.php");


$validar=mysqli_query($conn,"SELECT * from usuarios where email='$email' and password='$password'");


if(mysqli_num_rows($validar)){
     header("location:entraste.php");

}else{
echo"<div class='alerta'>El correo o la contraseña est mal</div>";

}*/

?>