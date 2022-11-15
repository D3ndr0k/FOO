<?php
session_start();
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar stock</title>
</head>
<body>

<div class="actstock">
    <form action="" method="POST">
    Ingresa tu nuevo stock
    <input type="number" value="nuevostock" name="nuevostock"><br><br>
    <input type="submit" value="actualizar" name="actualizar"><br><br>


    </form>

    <?php
if(!empty($_POST["actualizar"])){
    if (empty($_POST["nuevostock"])){
    echo "<div class='alerta'> Ingresa tu stock </div>";
  } else{


    $query = "select * from productos where id_producto= '$_GET[pid]'";
    $res = $conn ->query($query);
    $row = mysqli_fetch_array($res);
     

    $codigoproducto = $_REQUEST['pid'];
    $nuevostock =  $_POST["nuevostock"];
    $sql=$conn->query("update productos set stock = '$nuevostock' where id_producto = '$codigoproducto'");
    if ($sql==1) {

      echo 'Stock actualizado';
     }else{
       echo 'Error';
     }


    }
    
}

?>
</div>


<script>
    let subMenu=document.getElementById("subMenu")
    function toggleMenu(){
        subMenu.classList.toggle("open-menu")
    }
</script>


</body>
</html>