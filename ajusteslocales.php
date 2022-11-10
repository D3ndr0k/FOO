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
    <link rel="stylesheet" type="text/css" href="./assets/style_productos.css">
</head>
<body>
    <center>
<h1>Ajustes</h1>
<br><br>
 
<form action="" method="POST">

<div class="desplegable">
    <input class="desplega" type="submit" value="CAMBIAR EMAIL" >
    <div class="desplega-texto">
    <br><br>
EMAIL ACTUAL
    <input type="email" name="email" placeholder="">⠀⠀⠀⠀⠀
    <br><br>
NUEVO EMAIL
    <input type="email" name="reemail" placeholder="">
    <br><br>
    <center> <input class="boton" type="submit" value="GUARDAR" name="submit" >
    <br><br>
      </div>
  </div>

  <br><br>






  <div class="desplegable">
    <input class="desplega" type="submit" value="CAMBIAR CONTRASEÑA" >
    <div class="desplega-texto">
    <br><br>
CONTRASEÑA ACTUAL
    <input type="password" name="pass" placeholder="">
    <br><br>
NUEVA CONTRASEÑA
    <input type="password" name="repass" placeholder="">
    <br><br>

    <input class="boton" type="submit" value="GUARDAR" name="submitp" >

    </div>
  </div>
<br><br>

  <div class="desplegable">
    <input class="desplega" type="submit" value="CAMBIAR NOMBRE" >
    <div class="desplega-texto">
    <br><br>
CONTRASEÑA ACTUAL
    <input type="password" name="pass" placeholder="">
    <br><br>
NUEVO NOMBRE
    <input type="text" name="rename" placeholder="">
    <br><br>

    <input class="boton" type="submit" value="GUARDAR" name="submitn" >


    </div>
  </div>



  <br><br>

  <div class="desplegable">
    <input class="desplega" type="submit" value="CAMBIAR DIRECCIÓN" >
    <div class="desplega-texto">
    <br><br>
CONTRASEÑA ACTUAL
    <input type="password" name="pass" placeholder="">
    <br><br>
NUEVA DIRECCIÓN
    <input type="text" name="dir" placeholder="">
    <br><br>

    <input class="boton" type="submit" value="GUARDAR" name="submitd" >


    </div>
  </div>

<br><br>



  <div class="desplegable">
    <input class="desplega" type="submit" value="CAMBIAR TELÉFONO" >
    <div class="desplega-texto">
    <br><br>
CONTRASEÑA ACTUAL
    <input type="password" name="pass" placeholder="">
    <br><br>
NUEVO TELÉFONO
    <input type="number" name="tel" placeholder="">
    <br><br>

    <input class="boton" type="submit" value="GUARDAR" name="submit" >


    </div>
  </div>


</form>

<?php

if(!empty($_POST["submit"])){
    $reemail = $_POST["reemail"];
    $email = $_POST["email"];
    $idl = $_SESSION["id"];


    $nuevo =  mysqli_query($conn,"UPDATE locales SET email='$reemail' WHERE id='$idl' and email='$email'");
    $afect = mysqli_affected_rows($conn);
    echo  $afect;
    if ($afect > 0) {
      echo "Datos guardados";
    } else {
      echo ":( Intenta otra vez";
    }


}


if(!empty($_POST["submitp"])){
    $repass = $_POST["repass"];
    $pass = $_POST["pass"];
    $idl = $_SESSION["id"];

    
$nuevopass = "UPDATE locales SET password='$repass' WHERE id='$idl' and password='$pass'";

    if (mysqli_query($conn, $nuevopass)) {
      echo "Datos guardados";
    } else {
      echo ":( Intenta otra vez";
    }


}


if(!empty($_POST["submitd"])){
  $dir = $_POST["dir"];
  $pass = $_POST["pass"];
  $idl = $_SESSION["id"];



$nuevadir ="UPDATE locales SET direccion='$dir' WHERE id='$idl' and password='$pass'";
    
if (mysqli_query($conn, $nuevadir)) {
    echo "Datos guardados";
  } else {
    echo ":( Intenta otra vez";
  }


}


if(!empty($_POST["submitn"])){
  $tel = $_POST["tel"];
  $pass = $_POST["pass"];
  $idl = $_SESSION["id"];


  $nuevotel =  "UPDATE locales SET telefono='$tel' WHERE id='$idl' and password='$pass'";
  

  if (mysqli_query($conn, $nuevotel)) {
    echo "Datos guardados";
  } else {
    echo ":( Intenta otra vez";
  }


}




if(!empty($_POST["submitn"])){
  $rename = $_POST["rename"];
  $pass = $_POST["pass"];
  $idl = $_SESSION["id"];


  $nuevonom =  "UPDATE locales SET nombre='$rename' WHERE id='$idl' and password='$pass'";
  

  if (mysqli_query($conn, $nuevonom)) {
    echo "Datos guardados";
  } else {
    echo ":( Intenta otra vez";
  }


}


?>





</body>
</html>