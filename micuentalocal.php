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
    <?php
        echo "Nombre: ";
        echo ucwords($_SESSION["nombre"]); ?>
        <br><br>
    <?php
        echo "Dirección: ";
        echo ($_SESSION["direccion"]); ?>
        <br><br>
    <?php
        echo "Email: ";
        echo ($_SESSION["email"]); ?>
        <br><br>
    <?php
        echo "Contraseña: ";
        echo ($_SESSION["password"]); ?>
        <br><br>
    <?php
        echo "Teléfono: ";
        echo ($_SESSION["telefono"]); ?>
</div>        

</h1>
</body>
</html>