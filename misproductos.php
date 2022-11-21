<?php
session_start();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mis productos</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style_menu.css">
</head>
<body>


<nav class="menu">
  <a href="menu.php"> <img src="assets/img/logo.png" id="logo" alt=""></a>

  <ul>
     <li> <?php
            echo ucwords($_SESSION["nombre"]);
        ?></li>
</ul>

<?php   $codigolocal = $_SESSION['id'];
        $query = "select imagen from locales where id = '$codigolocal' ";
        $res = $conn ->query($query);
        while ($row = $res->fetch_assoc()){  ?>



    <img src="data:image/;base64,  <?php echo base64_encode($row['imagen']);  ?>" id="user-pic" alt="" onclick="toggleMenu()"></img>

    <?php if(empty($row['imagen'])) { ?>

        <img src="assets/img/Logo1.png" id="usr-pic" alt="" onclick="toggleMenu()"></img>

        <?php } 
        
    } ?>



<div class="sub-menu-wrapp" id="subMenu">
<div class="sub-menu">
<div class="uer-info">


<!-- sub-menú desplegable con información sobre el local logueado y demás funcionalidades -->
</div>
<a href="micuentalocal.php" class="sub-menu-link">
<img src="assets/img/profile.png">
<p>Mi cuenta</p>
<span></span>
</a>
<a href="ajusteslocales.php" class="sub-menu-link">
    <img src="assets/img/setting.png">
    <p>Ajustes</p>
    <span></span>
    </a>
    <a href="ayuda.php" class="sub-menu-link">
        <img src="assets/img/help.png">
        <p>Ayuda</p>
        <span></span>
        </a>
        <a href="cerrar_sesion.php" class="sub-menu-link">
            <img src="assets/img/logout.png" >
            <p>Cerrar sesión</p>
            <span></span>
            </a>

            

</div>
</div>

    </nav>

</div>
<br><br><br><br>
<div class="conten">
<?php

$local = $_SESSION["id"];

$query = "select * from productos where local='$local'";
$res = $conn ->query($query);
while ($row = $res->fetch_assoc()){
?>

<div class="cardd">
    <img class="img" src="data:image/;base64,  <?php echo base64_encode($row['imagen']); ?>">
    <a href="productolocal.php?pid=<?php echo $row['id_producto']; ?>"><h3>⠀⠀<?php echo $row['nombre']; ?></h3></a>

    <p>⠀⠀<?php echo $row['ingredientes']; ?> </p>
    <p>⠀⠀$<?php echo $row['precio']; ?> </p>
    <p>⠀⠀Vencimiento: <?php echo $row['fechavencimiento']; ?> </p>
    <p>⠀⠀Marca: <?php echo $row['marca']; ?> </p>
    <p>⠀⠀Unidades disponibles: <?php echo $row['stock']; ?> </p>




</div>

<?php
}
?>
</div>
  <br><br><br><br><br><br><br>.
  <script>
    let subMenu=document.getElementById("subMenu")
    function toggleMenu(){
        subMenu.classList.toggle("open-menu")
    }
</script>

<br><br><br><br><br><br><br>


</body>
</html>