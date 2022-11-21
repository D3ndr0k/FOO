<?php
session_start();
include("config.php")
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ajustes</title>
      <link rel="stylesheet" type="text/css" href="./assets/css/style_registro.css">
  </head>
  <body>
        <center>
    <br><br><br><br>
    <div class="centroo">

    <form action="" method="POST">

      <!--NUEVO EMAIL-->

    <h1>⠀⠀⠀⠀Cambiar⠀email:⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀</h1>
    <br><br>
    EMAIL ACTUAL
        <input type="text" name="email" placeholder="">
        <br><br>
    NUEVO EMAIL
        <input type="text" name="reemail" placeholder="">
        <br><br>
      <center> <input class="boton" type="submit" value="GUARDAR" name="submit" >
        <br><br><hr>

      <!--CAMBIAR CONTRA-->

    <h1>Cambiar contraseña</h1>
    <br><br>
    CONTRASEÑA ACTUAL
        <input type="password" name="pass" placeholder="">
        <br><br>
    NUEVA CONTRASEÑA
        <input type="password" name="repass" placeholder="">
        <br><br>

        <input class="boton" type="submit" value="GUARDAR" name="submitp" >
    </form>
    </div>
    <?php

    if(!empty($_POST["submit"])){
        $reemail = $_POST["reemail"];
        $email = $_POST["email"];
        $idu = $_SESSION["idu"];

        $veremail = mysqli_query($conn,"SELECT * from locales where email='$reemail'");
        $veremail2 = mysqli_query($conn,"SELECT * from usuarios where email='$reemail'");


        if(mysqli_num_rows($veremail) > 0 || mysqli_num_rows($veremail2) > 0){
        echo"ESTE CORREO YA EXISTE";
        }else{
          $nuevoemail =  mysqli_query($conn,"UPDATE usuarios SET email='$reemail' WHERE id='$idu' and email='$email'");
          $corafect = mysqli_affected_rows($conn);
      
          if ($corafect > 0) {
            echo "Datos guardados";
          } else {
            echo ":( Intenta otra vez";
          }
        }
      }


    if(!empty($_POST["submitp"])){
        $repass = $_POST["repass"];
        $pass = $_POST["pass"];
        $idu = $_SESSION["idu"];


        $nuevapass = mysqli_query($conn,"UPDATE usuarios SET password='$repass' WHERE id='$idu' and password='$pass'");
        $conafect = mysqli_affected_rows($conn);


        if ($conafect > 0) {
          echo "Datos guardados";
        } else {
          echo ":( Intenta otra vez";
        }
    }
    ?>
  </body>
</html>