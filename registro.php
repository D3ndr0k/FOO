<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<title>
Registro
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
    <h1>⠀⠀REGÍSTRATE⠀⠀⠀⠀⠀⠀⠀⠀</h1>
    <hr color="#7EFF3"><br>
    <input type="text"  maxlength="30" placeholder=" Nombre" name="nombre">
    <br> <br>
    <input type="text" maxlength="30" placeholder=" Apellido" name="apellido">
    <br> <br>
    <input type="email" placeholder=" Email" name="email">
    <br> <br>
    <input type="password" maxlength="30" placeholder=" Contraseña" name="password">
    <br> <br>
    <center><input class="boton" type="submit" value="Regístrate" name="submit">
    <br>
    
    <?php 
    include ("config.php");
    include ("controlusuarios.php");
    
    ?>
  </form>
</div>



</body>



</html>
