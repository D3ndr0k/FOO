<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<title>
Registro
</title>
<link rel="stylesheet" type="text/css" href="./assets/css/style_registro.css">
</head>
<body>
    <header>
        <a href="index.html" class="logo">
          <img src="./assets/img/logo.png">
        </a>
          <nav>
            <a href="sobrenosotros.html">SOBRE NOSOTROS</a>⠀⠀⠀
            <a href="comofunciona.html">¿CÓMO FUNCIONA FOO!?</a>⠀⠀⠀
            <a href="registrolocales.php">ÚNETE COMO NEGOCIO</a>⠀⠀⠀⠀⠀⠀⠀⠀⠀
            <a href="registro.php"><button><b>REGÍSTRATE</b></button></a>
            <a href="iniciarsesion.php">INICIAR SESIÓN</a>
            </ul>
          </nav>
        </header>
        
<div class="centro"> 
<!-- formulario para ingresar la información en el registro de un usuario -->
<form action="" method="POST" enctype="multipart/form-data">
    <h1>⠀⠀REGÍSTRATE⠀⠀⠀⠀⠀⠀⠀⠀</h1>
    <hr color="#7EFF3"><br>
    <input type="file" name="imagen" accept="image/*">
    <br> <br>
    <input type="text"  maxlength="30" placeholder=" Nombre" name="nombre" required>
    <br> <br>
    <input type="text" maxlength="30" placeholder=" Apellido" name="apellido" required>
    <br> <br>
    <input type="email" placeholder=" Email" name="email" required>
    <br> <br>
    <input type="password" maxlength="30" placeholder=" Contraseña" name="password" required>
    <br> <br>
    <center><input class="boton" type="submit" value="Regístrate" name="submit">
    <br>
    
    <?php 

    include ("controlusuarios.php");
    
    ?>
  </form>
</div>
</body>
</html>