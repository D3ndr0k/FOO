
<?php
include("config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style_menu.css">
</head>
<body>

    <nav class="menu">
  <a href="menuuser.php"> <img src="assets/img/logo.png" id="logo" alt=""></a>

   <ul>
     <li> <a href="#"> Inicio</a></li>
        <li> <a href="#"> Sobre nosotros </a></li>
            <li> <a href="#"> Contactos </a>
                </ul>

<img src="assets/img/Logo1.png" id="user-pic" alt="" onclick="toggleMenu()">
<div class="sub-menu-wrapp" id="subMenu">
<div class="sub-menu">
<div class="uer-info">
    <img src="assets/img/profile.png">
    <h3>
        <?php
            echo ucwords($_SESSION["nombreu"]);
        ?>
    </h3>
</div>
<hr>
<a href="micuenta.html" class="sub-menu-link">
<img src="assets/img/profile.png">
<p>Mi cuenta</p>
<span></span>
</a>
<a href="assets/img/ajustes.html" class="sub-menu-link">
    <img src="assets/img/setting.png">
    <p>Ajustes</p>
    <span></span>
    </a>
    <a href="ayuda.html" class="sub-menu-link">
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

$query = "select * from productos where stock>0";
$res = $conn ->query($query);
while ($row = $res->fetch_assoc()){
    
?>

<div class="card">
    
        <img class="img" src="data:image/;base64,  <?php echo base64_encode($row['imagen']); ?>">
    <a href="producto.php?pid=<?php echo $row['id_producto']; ?>"><h3>⠀⠀<?php echo $row['nombre']; ?></h3></a>
    <p>⠀⠀$<?php echo $row['precio']; ?> </p>
    <p>⠀⠀Vencimiento: <?php echo $row['fechavencimiento']; ?> </p>

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
</body>
</html>