<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<title>
  Iniciar sesion
</title>
<link rel="stylesheet" type="text/css" href="http://localhost/foo/assets/css/style_registro.css">
</head>
<body>
    <header>
        <a href="inicio.html" class="logo">
        <img src="./assets/img/logo.png">
        </a>
          <nav>
            <a href="#">SOBRE NOSOTROS</a>⠀⠀⠀
            <a href="#">¿CÓMO FUNCIONA FOO!?</a>⠀⠀⠀
            <a href="#">ÚNETE COMO NEGOCIO</a>⠀⠀⠀⠀⠀⠀⠀⠀⠀
            <a href="registro.php"><button><b>REGÍSTRATE</b></button></a>
            <a href="iniciarsesion.php">INICIAR SESIÓN</a>
            </ul>
          </nav>
        </header>
<div class="centro"> 
<form action="" method="POST">
    <h1>⠀INICIAR⠀SESIÓN⠀⠀⠀⠀⠀⠀</h1>
    <hr color="#7EFF3"><br>
    <input type="email" placeholder=" Email" name="email">
    <br> <br>
    <input type="password" placeholder=" Contraseña" name="password">
    <br> <br>
    <center><input class="boton" type="submit" value="Ingresar" name="submit">
    
<?php
include("config.php");
include("ingresousuarios.php");
?>
</form>
</div>



</body>



</html>
