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
$query = "select * from productos";
$res = $conn ->query($query);
while ($row = $res->fetch_assoc()){
?>

<div class="card">
    
        <img class="img" src="data:image/;base64,  <?php echo base64_encode($row['imagen']); ?>">
    <a href="producto.php?pid=<?php echo $row['id_producto'];  ?>"><h3>⠀⠀<?php echo $row['nombre']; ?></h3></a>
    <p>⠀⠀$<?php echo $row['precio']; ?> </p>
    <p>⠀⠀Vencimiento: <?php echo $row['fechavencimiento']; ?> </p>
    
</div>
<?php
}
?>
</div>
  <br><br><br><br><br><br><br>.
</body>
</html>