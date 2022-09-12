<?php

$server = "localhost";
$user = "foo";
$pass = "foo";
$db =  "foo";

$conn = mysqli_connect($server,$user,$pass,$db);

if($conn->connect_error){
    die("ERROR: No se pudo conectar al servidor: " .$conn -> connect_error);
}

?>