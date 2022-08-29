<?php
//Ruta del archivo que queremos abrir (Poner carpeta si esta en un lugar especifico)
$archivo="contenido.txt";


//Abre el archivo en modo lectura (r) FOPEN
$archivoAbierto = fopen($archivo,"r");
//Lee el contenido FREAD y poner su peso
$contenido = fread($archivoAbierto,filesize($archivo));

echo $contenido;
?>