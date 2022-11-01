<?php
session_start();
if(empty($_SESSION["id"])){
    header("location: inicio.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio locales</title>
<link rel="stylesheet" href="./assets/css/style_menu.css">
</head>


<body>
    <div class="hero">
    <nav class="menu">
   <img src="assets/img/logo.png" id="logo" alt="">

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
            echo ucwords($_SESSION["nombre"]);
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
<div class="botones">
    <a class="centro1" href="agregarpublicacion.php"><button>Agregar publicación</button></a>
    <a class="centro2" href="misproductos.php"><button>Mis productos</button></a>
   <a class="centro3" href="reservados.html"> <button>Reservados</button></a>


</div>
<script>
    let subMenu=document.getElementById("subMenu")
    function toggleMenu(){
        subMenu.classList.toggle("open-menu")
    }
</script>
</body>
</html>
