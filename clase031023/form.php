<?php
include "head.php";
    $nombre= $_POST["txtnombre"]; // usamos un arreglo para almacenar  
    $edad= $_POST["txtedad"]; // usamos un arreglo para almacenar  
    $telefono = $_POST["txtphone"];
    $contraseña = $_POST["txtpassword"];
    $email= $_POST["txtemail"];



    echo "<h1>DATOS DE USARIO ENCONTRADOS</h1>";

    echo "<h2>Nombre:" . $nombre."</h2> ";
    echo "<h2>Edad:" . $edad."</h2>";
    echo "<h2>Telefono:".$telefono."</h2>";
    echo "<h2>Email:".$email."</h2>";
    echo "<h2>Contraseña:".$contraseña."</h2>";
    echo "<a href='index.php'>Al incio</a>";  

include "footeer.php";
?>