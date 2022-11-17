<?php
include "config.php";
if(!empty($_POST["submit"])){
  if (empty($_POST["codigo"]) or empty($_POST["nombre"]) or empty($_POST["ingredientes"]) or empty($_POST["fechavencimiento"])or empty($_POST["precio"])or empty($_POST["marca"])){
    echo "<div class='alerta'> Completa todos los campos </div>";
  }else{

    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $ingredientes = $_POST["ingredientes"];
    $fechavencimiento = $_POST["fechavencimiento"];
    $precio = $_POST["precio"];
    $marca = $_POST["marca"];
    $stock = $_POST["stock"];
    $local = $_SESSION['id'];
    
    $sql=$conn->query("insert into productos(codigo,nombre,ingredientes,fechavencimiento,precio,marca,imagen,stock, local) values('$codigo','$nombre','$ingredientes','$fechavencimiento','$precio','$marca','$imagen','$stock', '$local')");
   if ($sql==1) {
    echo 'Registrado';
   }else{
     echo 'Error';
   }
 
  }
 
    }


?>