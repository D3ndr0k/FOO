<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar publicación</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style_menu.css">
</head>
<body bgcolor="#ffe8ef">

<div class="hero">
    <nav class="menu">
    <a href="menu.php"> <img src="assets/img/logo.png" id="logo" alt=""></a>

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
<br><br><br><br><br><br><br>
    <div class="med"> 
        
    <form action="" method="POST" enctype="multipart/form-data">

    <h3> <p>Imagen del producto</p><h3> 
        <input type="file" name="imagen" accept="image/*">
        <input type="number" placeholder=" código del producto" name="codigo">
        <input type="text" placeholder=" nombre del producto" name="nombre">
        <input type="text" placeholder=" descripción" name="descripcion">
        <p>Fecha de vencimiento</p>
        <input type="date" name="fechavencimiento">
        <input type="number" step="0.01" min="0" placeholder=" precio" name="precio">
        <input type="text" placeholder=" marca" name="marca">
        <input type="numbre" placeholder=" stock" name="stock">
       <center> <input class="boton"type="submit" value="ingresar" name="submit" >
       <?php 
    include ("config.php");
    include ("controlproductos.php");
    
    ?>
    </form>
    </div>



    <script>
    let subMenu=document.getElementById("subMenu")
    function toggleMenu(){
        subMenu.classList.toggle("open-menu")
    }
</script>

</body>
</html>