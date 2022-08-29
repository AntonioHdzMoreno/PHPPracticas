<?php

//Con el metodo get lo muestra en la URL
if($_GET)
{
    $nombre=$_GET['nombre'];

    echo "Hola " .$nombre;
}

?>

