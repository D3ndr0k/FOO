<?php
session_start();
include("config.php");


$query = "select * from productos where id_producto= '$_GET[pid]'";
$res = $conn ->query($query);
$row = mysqli_fetch_array($res);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Producto</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style_productos.css">
</head>
<body>
<div class="conten">
<div class="prod">
   
        <img class="imgg" src="data:image/;base64,  <?php echo base64_encode($row['imagen']); ?>">
     <center><h3>⠀⠀<?php echo $row['nombre']; ?></h3></center>
    <p>⠀⠀<?php echo $row['ingredientes']; ?></p>
    <p>⠀⠀Marca: <?php echo $row['marca']; ?></p>
    <p>⠀⠀$<?php echo $row['precio']; ?> </p>
    <p>⠀⠀Vencimiento: <?php echo $row['fechavencimiento']; ?> </p>
    <p>⠀⠀Stock: <?php echo $row['stock']; ?></p>
    <br><br>
    <form action="" method="POST">
    ⠀⠀<b>ACTUALIZAR STOCK</b>
    <input type="number" value="nuevostock" name="nuevostock" placeholder="⠀⠀Ingresa tu nuevo stock">
    <input type="submit" value="actualizar" name="actualizar">
    </form>

    <?php

    if(!empty($_POST["actualizar"])){
    if (empty($_POST["nuevostock"])){
    echo "<div class='alerta'> Ingresa tu stock </div>";
  } else{


    $query2 = "select id_producto from productos where id_producto= '$_GET[pid]'";
    $res2 = $conn ->query($query2);
    $row2 = mysqli_fetch_array($res2);
     
    $codproducto = $row2['id_producto'];

    $nuevostock =  $_POST["nuevostock"];
    $sql=$conn->query("update productos set stock = '$nuevostock' where id_producto = '$codproducto'");
    if ($sql==1) {
      echo '⠀⠀Stock actualizado';
     }else{
       echo 'Error';
     }


    }
    
}

?>
  
</div>

    </body>
    </html>

    
