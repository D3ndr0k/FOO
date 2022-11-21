<?php
session_start();
include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reservas local</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style_menu.css">
</head>
<body>


<nav class="menu">
  <a href="menu.php"> <img src="assets/img/logo.png" id="logo" alt=""></a>

   <ul>
     <li>
        <?php
            echo ucwords($_SESSION["nombre"]);
        ?>
      </li>
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
<br><br><br><br>

<div class="conten">
<?php

$local = $_SESSION["id"];

$query = "select * from reservas where codigolocal='$local'";
$res = $conn ->query($query);
while ($row = $res->fetch_assoc()){

?>



<div class="cardd">

<?php $codigoprod = $row['codigoproducto']; ?>

<?php $query2 = "select imagen from productos where id_producto = '$codigoprod' ";
    $res2 = $conn ->query($query2);
    while ($row2 = $res2->fetch_assoc()){ ?>

        <img class="img" src="data:image/;base64,  <?php echo base64_encode($row2['imagen']); ?>">


    <h3>⠀⠀Fecha: <?php echo $row['fecha']; ?></h3>
    <p>⠀⠀Hora: <?php echo $row['hora']; ?> </p>
    <p>⠀⠀Cantidad: <?php echo $row['cantidad']; ?> </p>
    <p>⠀⠀Código producto: <?php echo $row['codigoproducto']; ?> </p>
    <p>⠀⠀Código usuario: <?php echo $row['codigousuario']; ?> </p>


 

    <?php
    $idu = $row['codigousuario'];  
    $query3 = "select nombre from usuarios where id='$idu'";
    $res3 = $conn ->query($query3);
    while ($row3 = $res3->fetch_assoc()){

    ?>
    <p>⠀⠀Nombre usuario: <?php echo ucwords ($row3['nombre']); ?> </p>




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

<br><br><br><br><br><br><br>


</body>
</html>
