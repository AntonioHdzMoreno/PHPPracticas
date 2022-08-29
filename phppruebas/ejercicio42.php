<?php

$nombreArchivo="archivo.txt";
$contenidoArchivo="Hola,Saludos";
//Abrir el archivo en modo escritura (W)
$archivoAcrear= fopen($nombreArchivo,"w");
//Para crear el archivo y escribirle
fwrite($archivoAcrear,$contenidoArchivo);
//Cerrar el flujo del archivo
fclose($archivoAcrear);

?>