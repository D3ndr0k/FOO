<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style_productos.css">
</head>
<body>



<br><br><br><br><br><br><br>

<div class="conten">
<?php
include("config.php");
session_start();

$local = $_SESSION["id"];

$query = "select * from productos where local='$local'";
$res = $conn ->query($query);
while ($row = $res->fetch_assoc()){
?>
<div class="desplegable">
<div class="card">
    <div class="desplega-texto">
    <p>⠀⠀Vencimiento: <?php echo $row['fechavencimiento']; ?> </p>
    <p>⠀⠀Marca: <?php echo $row['marca']; ?> </p>
    <p>⠀⠀Unidades disponibles: <?php echo $row['stock']; ?> </p> 
    </div>
        <img class="img" src="data:image/;base64,  <?php echo base64_encode($row['imagen']); ?>">
    <h3>⠀⠀<?php echo $row['nombre']; ?></h3>
    <p>⠀⠀<?php echo $row['descripcion']; ?> </p>
    <p>⠀⠀$<?php echo $row['precio']; ?> </p>
</div>
  </div>
<?php
}
?>
</div>
  <br><br><br><br><br><br><br>.
</body>
</html>