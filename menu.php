<?php
include ("config.php");
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

    <a href="menu.php"><img src="assets/img/logo.png" id="logo" alt=""></a>
   
    <ul>
     <li> <?php echo ucwords($_SESSION["nombre"]);?> </li>
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

    <div class="botones">
    <a class="centro" href="agregarpublicacion.php"><button>Agregar publicación</button></a>
    <a class="centro2" href="misproductos.php"><button>Mis productos</button></a>
   <a class="centro3" href="reservaslocal.php"> <button>Reservados</button></a>
    </div>

    <script>
    let subMenu=document.getElementById("subMenu")
    function toggleMenu(){
        subMenu.classList.toggle("open-menu") }
    </script>

</body>
</html>
