<?php

$server = "localhost";
$user = "root";
$pass = "";
$db =  "users";

$conn = mysqli_connect($server,$user,$pass,$db);

if($conn->connect_error){
    die("ERROR: No se pudo conectar al servidor: " .$conn -> connect_error);
}

?>