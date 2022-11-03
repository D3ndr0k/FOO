<?php
session_start();
include("config.php");

$id_producto = $_SESSION["id_producto"];;


$query = "select * from productos where id_producto= '$_GET[pid]'";
$res = $conn ->query($query);
$row = mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./assets/style_productos.css">
</head>
<body>
<div class="conten">
<div class="prod">
   
        <img class="imgg" src="data:image/;base64,  <?php echo base64_encode($row['imagen']); ?>">
     <center><h3>⠀⠀<?php echo $row['nombre']; ?></h3></center>
    <p>⠀⠀<?php echo $row['descripcion']; ?></p>
    <p>⠀⠀Marca: <?php echo $row['marca']; ?></p>
    <p>⠀⠀$<?php echo $row['precio']; ?> </p>
    <p>⠀⠀Vencimiento: <?php echo $row['fechavencimiento']; ?> </p>
    <p>⠀⠀Stock: <?php echo $row['stock']; ?></p>
    
</div>
</div>



</body>
</html>
  

