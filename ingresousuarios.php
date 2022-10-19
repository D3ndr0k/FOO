<?php

if(!empty($_POST["submit"])){
    if (empty($_POST["email"]) or empty($_POST["password"])){
      echo "<div class='alerta'> Completa todos los campos </div>";
    }else{

        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql=$conn->query(" select * from usuarios where email='$email' and password='$password'");
        $sqll=$conn->query(" select * from locales where email='$email' and password='$password'");

        if($datos=$sql->fetch_object()){
            header("location:menu.html");
        }elseif($datos=$sqll->fetch_object()){
            header("location:menu.html");
        }else{
             echo"<div class='alerta'>Correo o contraseña incorrecta</div>";
        }
    }

}


?>
