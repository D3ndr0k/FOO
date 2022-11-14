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
<br><br><br><br><br>
        <div class="desplegable">
    <img width="50px" src="https://cdn-icons-png.flaticon.com/512/189/189665.png">
    <div class="desplega-texto">
      .....................................................................
      Paso 1: Registra tu negocio.
      .....................................................................
      Paso 2: Inicia sesión. 
      .....................................................................
      Paso 3: Agrega tus publicaciones.
      .....................................................................
      Éstas quedarán guardadas en Mis productos.
      .....................................................................
      Paso 4: En Reservados estarán los productos que serán comprados por los usuarios.
      .....................................................................


<br>
<br>

    </div>
  </div>




<div class="centro"> 
<!-- formulario para ingresar la información en el registro de locales -->
<form action="" method="POST">
    <h1>⠀⠀ÚNETENOS⠀⠀⠀⠀⠀⠀⠀⠀</h1>
    <hr color="#7EFF3"><br>
    
    <input type="text"  maxlength="30" placeholder=" Nombre" name="nombre" required>
    <br> <br>
    <input type="text" maxlength="50" placeholder=" Dirección" name="direccion" required>
    <br> <br>
    <input type="email" placeholder=" Email" name="email" required>
    <br> <br>
    <input type="password" maxlength="30" placeholder=" Contraseña" name="password" required>
    <br> <br>
    <input type="text" maxlength="9" placeholder=" Telefono" name="telefono" required>
    <br> <br>
    
    
    <select name="rubro">  
    <option hidden value="Otro">Rubro</option>
      <option>Panadería</option>
      <option>Cafetería</option>
      <option>Almacén</option>
      <option>Supermercado</option>
      <option>Restaurante</option>
    </select>
    <br><br>
<center><input class="boton" type="submit" value="Regístrate" name="submit">
    <br>
    <?php 
    include ("controllocales.php");
    
    ?>
  </form>
</div>
</body>
</html>