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
    <link rel="stylesheet" type="text/css" href="./assets/css/style_productos.css">
</head>
<body>
    <center>
<h1>Ajustes</h1>
<br><br>
 
<form action="" method="POST">

<!--CAMBIAR EMAIL -->

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

<!--CAMBIAR CONTRASEÑA -->

  <div class="desplegable">
    <input class="desplega" type="submit" value="CAMBIAR CONTRASEÑA" >
    <div class="desplega-texto">
    <br><br>
CONTRASEÑA ACTUAL
    <input type="password" name="contra" placeholder="">
    <br><br>
NUEVA CONTRASEÑA
    <input type="password" name="recontra" placeholder="">
    <br><br>

    <input class="boton" type="submit" value="GUARDAR" name="submitp" >

    </div>
  </div>
<br><br>

  <!--CAMBIAR NOMBRE -->

  <div class="desplegable">
    <input class="desplega" type="submit" value="CAMBIAR NOMBRE" >
    <div class="desplega-texto">
    <br><br>
CONTRASEÑA ACTUAL
    <input type="password" name="con" placeholder="">
    <br><br>
NUEVO NOMBRE
    <input type="text" name="rename" placeholder="">
    <br><br>

    <input class="boton" type="submit" value="GUARDAR" name="submitl" >


    </div>
  </div>
  <br><br>

  <!--CAMBIAR DIRECCIÓN -->

  <div class="desplegable">
    <input class="desplega" type="submit" value="CAMBIAR DIRECCIÓN" >
    <div class="desplega-texto">
    <br><br>
CONTRASEÑA ACTUAL
    <input type="password" name="cont" placeholder="">
    <br><br>
NUEVA DIRECCIÓN
    <input type="text" name="dir" placeholder="">
    <br><br>

    <input class="boton" type="submit" value="GUARDAR" name="submitd" >


    </div>
  </div>

<br><br>

  <!--CAMBIAR TELÉFONO -->

  <div class="desplegable">
    <input class="desplega" type="submit" value="CAMBIAR TELÉFONO" >
    <div class="desplega-texto">
    <br><br>
CONTRASEÑA ACTUAL
    <input type="password" name="passw" placeholder="">
    <br><br>
NUEVO TELÉFONO
    <input type="number" id="telefono" name="tel" placeholder="">
    <br><br>

    <input class="boton" type="submit" value="GUARDAR" name="submitt" >
    </div>
  </div>

</form>
  <script>
  $(document).ready(function (){
    $("#telefono").keypress(function(){
      if(this.value.length == 9){
        return false;
      }
    })
  });
</script>
<?php

  //CAMBIO EMAIL
 
if(!empty($_POST["submit"])){
  if(!empty($_POST["reemail"])){

      $reemail = $_POST["reemail"];
      $email = $_POST["email"];
      $idl = $_SESSION["id"];

      $veremail = mysqli_query($conn,"SELECT * from locales where email='$reemail'");
      $veremail2 = mysqli_query($conn,"SELECT * from usuarios where email='$reemail'");


      if(mysqli_num_rows($veremail) > 0 || mysqli_num_rows($veremail2) > 0){
      echo"Este correo '$reemail' ya existe.";
      }else{

      $nuevo =  mysqli_query($conn,"UPDATE locales SET email='$reemail' WHERE id='$idl' and email='$email'");
      $afect = mysqli_affected_rows($conn);

      if ($afect > 0) {
        echo "Datos guardados";
      } else {
        echo ":( Intenta otra vez";
      }
    }
  }else{
    echo "Completa el campo 'Nuevo Email'.";
  }
}

  //CAMBIO CONTRA

if(!empty($_POST["submitp"])){
  if(!empty($_POST["recontra"])){
    $repass = $_POST["recontra"];
    $pass = $_POST["contra"];
    $idl = $_SESSION["id"];
   
    $nuevopass = mysqli_query($conn,"UPDATE locales SET password ='$repass' WHERE id='$idl' and password='$pass'");
    $conafect = mysqli_affected_rows($conn);
    
    if ($conafect > 0) {
      echo "Datos guardados";
    } else {
      echo ":( Intenta otra vez ";
      
    }
  }else{
    echo "Complete el campo 'Nueva Contraseña'.";
  }
}


  //CAMBIO NOMBRE

  if(!empty($_POST["submitl"])){
    if(!empty($_POST["rename"])){
      $rename = $_POST["rename"];
      $pass = $_POST["con"];
      $idl = $_SESSION["id"];
    
    
      $nuevonom =  mysqli_query($conn,"UPDATE locales SET nombre='$rename' WHERE id='$idl' and password='$pass'");
      $nomafect = mysqli_affected_rows($conn);

      if ($nomafect > 0) {
        echo "Datos guardados";
      } else {
        echo ":( Intenta otra vez";
      }
    }else{
      echo "Complete el campo 'Nuevo Nombre'.";
    }
}

  //CAMBIO DIRECCION

if(!empty($_POST["submitd"])){
  if(!empty($_POST["dir"])){
    $dir = $_POST["dir"];
    $pass = $_POST["cont"];
    $idl = $_SESSION["id"];

    $nuevadir = mysqli_query($conn,"UPDATE locales SET direccion='$dir' WHERE id='$idl' and password='$pass'");
    $dirafect = mysqli_affected_rows($conn);

    if ($dirafect > 0) {
      echo "Datos guardados";
    } else {
      echo ":( Intenta otra vez";
    }
  }else{
    echo "Completa el campo Nueva Dirección";
  }
  
}

  //CAMBIO TELEFONO

if(!empty($_POST["submitt"])){
  if(!empty($_POST["tel"])){
    $tel = $_POST["tel"];
    $pass = $_POST["passw"];
    $idl = $_SESSION["id"];

    $nuevotel =  mysqli_query($conn,"UPDATE locales SET telefono='$tel' WHERE id='$idl' and password='$pass'");
    $telafect = mysqli_affected_rows($conn);

      if ($telafect > 0) {
      echo "Datos guardados";
    } else {
      echo ":( Intenta otra vez";
    }
  }else{
    echo "Complete el campo 'Nuevo Teléfono'.";
  }
}


?>
</body>
</html>