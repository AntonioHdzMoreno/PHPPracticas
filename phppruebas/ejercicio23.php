<?php 

//Arreglos 
$frutas = array ("Fresa","Pera","Manzana");
//Con esto muestra la posicion del arreglo y lo que contiene
print_r($frutas);
//Añadir items al arrray al final
array_push($frutas,"Uva");


for($indice =0; $indice <=2;$indice++)
{

    echo $frutas[$indice];
}

foreach($frutas as $indice=>&$valor)
{
    echo $indice."<br>";

    echo $frutas[$indice];
}

?>