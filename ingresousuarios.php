<?php
 session_start();
if(!empty($_POST["submit"])){
    if (empty($_POST["email"]) or empty($_POST["password"])){
      echo "<div class='alerta'> Completa todos los campos </div>";
    }else{

        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql=$conn->query(" select * from usuarios where email='$email' and password='$password'");
        $sqll=$conn->query(" select * from locales where email='$email' and password='$password'");

        if($datos=$sql->fetch_object()){
            header("location:menuuser.php");
            $_SESSION['idu']=$datos->id;
            $_SESSION['nombreu']=$datos->nombre;
            $_SESSION['emailu']=$datos->email;
            $_SESSION['passwordu']=$datos->password;
            $_SESSION['apellido']=$datos->apellido;
        }elseif($datos=$sqll->fetch_object()){
            $_SESSION["nombre"]=$datos->nombre;
            $_SESSION["id"]=$datos->id;
            $_SESSION["direccion"]=$datos->direccion;
            $_SESSION["email"]=$datos->email;
            $_SESSION["password"]=$datos->password;
            $_SESSION["telefono"]=$datos->telefono;
            header("location:menu.php");
        }else{
             echo"<div class='alerta'>Correo o contraseña incorrecta</div>";
        }
    }

}


?>
