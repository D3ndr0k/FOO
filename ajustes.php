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
<h1>Ajustes</h1>
<br><br><br><br>
<div class="centroo"> 
<form action="" method="POST">

<h1>⠀⠀⠀⠀Cambiar⠀email:⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀</h1>
<br><br>
EMAIL ACTUAL
    <input type="text" name="email" placeholder="">
    <br><br>
NUEVO EMAIL
    <input type="text" name="reemail" placeholder="">
    <br><br>
   <center> <input class="boton" type="submit" value="GUARDAR" name="submitp" >
    <br><br><hr>

<h1>Camiara contraseña</h1>
<br><br>
CONTRASEÑA ACTUAL
    <input type="password" name="pass" placeholder="">
    <br><br>
NUEVA CONTRASEÑA
    <input type="password" name="repass" placeholder="">
    <br><br>

    <input class="boton" type="submit" value="GUARDAR" name="submit" >
</form>
</div>


<?php

if(!empty($_POST["submit"])){
    $reemail = $_POST["reemail"];
    $email = $_POST["email"];
    $idu = $_SESSION["idu"];


    $nuevoemail =  "UPDATE usuarios SET email='$reemail' WHERE id='$idu' and email='$email'";
    
    if (mysqli_query($conn, $nuevoemail)) {
      echo "Datos guardados";
    } else {
      echo ":( Intenta otra vez";
    }


}


if(!empty($_POST["submitp"])){
    $repasr = $_POST["repass"];
    $pass = $_POST["pass"];
    $idu = $_SESSION["idu"];


    $nuevapass =  "UPDATE usuarios SET password='$reepass' WHERE id='$idu' and password='$pass'";
    
    if (mysqli_query($conn, $nuevapass)) {
      echo "Datos guardados";
    } else {
      echo ":( Intenta otra vez";
    }


}

?>





</body>
</html>