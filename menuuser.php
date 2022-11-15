
<?php
include("config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menú usuarios</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style_menu.css">
</head>
<body>

    <nav class="menu">
  <a href="menuuser.php"> <img src="assets/img/logo.png" id="logo" alt=""></a>

   <ul>
   <li>
   <a href="reservasusuarios.php">Mis reservas</a>
   </li>
     <li>         
        <?php
            echo ucwords($_SESSION["nombreu"]);
        ?>
    </li>
</ul>
<?php $codigousuario = $_SESSION['idu']; ?>

<?php $query4 = "select imagen from usuarios where id = '$codigousuario' ";
    $res4 = $conn ->query($query4);
    while ($row4 = $res4->fetch_assoc()){ ?>

<img src="data:image/;base64,  <?php echo base64_encode($row4['imagen']); ?>" id="user-pic" alt="" onclick="toggleMenu()">

<?php if(empty($row4['imagen'])) { ?>

<img src="assets/img/Logo1.png" id="usr-pic" alt="" onclick="toggleMenu()"></img>

<?php } 

} ?>

<div class="sub-menu-wrapp" id="subMenu">
<div class="sub-menu">
<div class="uer-info">
</div>
<a href="micuenta.php" class="sub-menu-link">
<img src="assets/img/profile.png">
<p>Mi cuenta</p>
<span></span>
</a>
<a href="ajustes.php" class="sub-menu-link">
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

$codigoprod = $row ['id_producto'];

$local = $row ['local'];


    
?>

<div class="card">
    
        <img class="img" src="data:image/;base64,  <?php echo base64_encode($row['imagen']); ?>">
    <a href="producto.php?pid=<?php echo $row['id_producto']; ?>"><h3>⠀⠀<?php echo $row['nombre']; ?></h3></a>
    <p>⠀⠀$<?php echo $row['precio']; ?> </p>
    <p>⠀⠀Vencimiento: <?php echo $row['fechavencimiento']; ?> </p>

    <?php $query2 = "select local from productos where productos.id_producto = '$codigoprod' ";
        $res2 = $conn ->query($query2);
        while ($row2 = $res2->fetch_assoc()){

            $codlocal = $row2["local"];
            ?>
            <?php $query3 = "select direccion from locales where id = '$codlocal' ";
            $res3 = $conn ->query($query3);
            while ($row3 = $res3->fetch_assoc()){ ?>

                <?php $direccionlocal = $row3['direccion']; ?>
    
                <p>⠀⠀Dirección local: <?php echo $direccionlocal; ?> </p>

</div>
<?php
}
}
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