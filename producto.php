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

    <br>

    <form action="" method="POST">
   <center><input type="number" name="cantidad" placeholder="⠀⠀Cantidad" min="1" max="<?php echo $row['stock']; ?>"> <br>
     <input class="boton" type="submit" value="RESERVAR" name="submit" >
    </form>




<?php
date_default_timezone_set("America/Montevideo");
$fecha = date('Y-m-d');
$hora = date('H:i:s');
$prod = $row['id_producto'];


if(!empty($_POST["submit"])){
    $cantidad = $_POST["cantidad"];
    $idu = $_SESSION["idu"];
    $idl = $row['local'];


    
$verstock = $row['stock'];

    if($verstock >= $cantidad ){

    $sql = mysqli_query($conn,"insert into reservas(fecha, hora, cantidad, codigoproducto, codigousuario, codigolocal) values ('$fecha', '$hora', '$cantidad', '$prod', '$idu', '$idl' )",$resultmode = MYSQLI_STORE_RESULT);

    if ($resultmode==0) {
    echo 'Reservado';
    $restock=$conn->query("update productos set stock = stock - '$cantidad' where id_producto='$prod'");
   

   }else{
     echo 'Error';
   }
}
}




?>
</div>
</div>

</body>
</html>