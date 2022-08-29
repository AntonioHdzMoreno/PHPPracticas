<?php
//Json Variable
$jsonContenido ='[
    {"nombre":"Antonio","apellido":"Hernandez" },
    {"nombre":"Danely","apellido":"Hernandez" }
    ]';
    //Decodificar un archivo JSON
    $resultado=json_decode($jsonContenido);
    

    foreach($resultado as $persona)
    {

     echo($persona->nombre)."".($persona->apellido);
    }
?>