<?php
include("config.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi cuenta</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style_menu.css">
</head>
<body>


<h1>

<div class="infouser">

<?php $codigousuario = $_SESSION['idu']; ?>

<?php $query = "select imagen from usuarios where id = '$codigousuario' ";
    $res = $conn ->query($query);
    while ($row = $res->fetch_assoc()){ ?>

<img src="data:image/;base64,  <?php echo base64_encode($row['imagen']); ?>" alt="" id="user-img">

<?php if(empty($row['imagen'])) { ?>

<img src="assets/img/Logo1.png"  alt="" id="usr-img"></img>

<?php } 

} ?>  <br><br>
    <?php
        echo "Nombre: ";
        echo ucwords($_SESSION["nombreu"]); ?>
        <br><br>
    <?php
        echo "Apellido: ";
        echo ucwords($_SESSION["apellido"]); ?>
        <br><br>
    <?php
        echo "Email: ";
        echo ($_SESSION["emailu"]); ?>
        <br><br>
    <?php
        echo "Contraseña: ";
        echo ($_SESSION["passwordu"]); ?>

</h1>

    
</div>        
</body>
</html>