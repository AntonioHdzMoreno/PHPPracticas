<?php

session_start(); //La funcion crea datos que se mantendran en TODAS las paginas

$_SESSION["usuario"]="Antonio";   //Variable tipo sesion
$_SESSION["estatus"]="logeado";


echo "Sesión Iniciada"."<br>";
//Cuando se cierra el navegador desaparece la sesion guardada
echo $_SESSION["usuario"]. " estatus: ".$_SESSION["estatus"];

?>