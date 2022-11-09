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
        echo ucwords($_SESSION["nombreu"]); ?>
        <br><br>
    <?php
        echo "Apellido: ";
        echo ($_SESSION["apellido"]); ?>
        <br><br>
    <?php
        echo "Email: ";
        echo ($_SESSION["emailu"]); ?>
        <br><br>
    <?php
        echo "Contraseña: ";
        echo ($_SESSION["passwordu"]); ?>
</div>        

</h1>
</body>
</html>