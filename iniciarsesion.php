<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<title>
  Iniciar sesion
</title>
<link rel="stylesheet" type="text/css" href="./assets/css/style_registro.css">
</head>
<body>
    <header>
        <a href="index.html" class="logo">
        <img src="./assets/img/logo.png" width:"120px">
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
<form action="" method="POST">
    <h1>⠀INICIAR⠀SESIÓN⠀⠀⠀⠀⠀⠀</h1>
    <hr color="#7EFF3"><br>
    <input type="email" placeholder=" Email" name="email">
    <br> <br>
    <input type="password" placeholder=" Contraseña" name="password">
    <br> <br>
    <center><input class="boton" type="submit" value="Ingresar" name="submit">
    
<?php
include("ingresousuarios.php");
?>
</form>
</div>



</body>



</html>
