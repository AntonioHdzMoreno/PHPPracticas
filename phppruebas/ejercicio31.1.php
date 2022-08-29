<?php

//Se puede tener la informacion de otros accesos, ejemplo aqui estamos en otro file y podemos utilizar
//Lo del archivo 31

session_start(); 
if( isset($_SESSION["usuario"])) // Para verificar si hay datos guardados en la sesion
{
    echo $_SESSION["usuario"]. " estatus: ".$_SESSION["estatus"]; //Imprimir los datos guardados en las Sesion
}
else
{
echo "No hay datos";
}


?>