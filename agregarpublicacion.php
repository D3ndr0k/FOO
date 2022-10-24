<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar publicación</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style_locales.css">
</head>

<body bgcolor="#ffe8ef">
    <br><center>
    <h2 style="color:#7EFF30;">Ingresar información del producto</h2><br><br><br><br>
    <div class="centro"> 
    <form action="" method="POST" enctype="multipart/form-data">

    <h3> <p>Imagen del producto</p><h3> 
        <input type="file" name="imagen" >
        <input type="number" placeholder=" código del producto" name="codigo">
        <input type="text" placeholder=" nombre del producto" name="nombre">
        <input type="text" placeholder=" descripción" name="descripcion">
        <p>Fecha de vencimiento</p>
        <input type="date" name="fechavencimiento">
        <input type="number" step="0.01" min="0" placeholder=" precio" name="precio">
        <input type="text" placeholder=" marca" name="marca">
        <input type="numbre" placeholder=" stock" name="stock">
       <center> <input class="boton"type="submit" value="ingresar" name="submit" >
       <?php 
    include ("config.php");
    include ("controlproductos.php");
    
    ?>
    </form>
    </div>
</body>
</html>