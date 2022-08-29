<?php
    $servidor = "localhost:3307";
    $username = "UsuarioWeb";
    $password = "143Aa12345";
    $database = "tiendamusica";

    $conexion = new mysqli($servidor,$username,$password,$database);
    if($conexion -> connect_error ){
        die("No se pudo conectar.");
    }
?>