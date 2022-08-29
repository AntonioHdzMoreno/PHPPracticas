<?php


//Url de la api que consumiremos
$url="https://api.dailymotion.com/videos?channel=sport&limit=10";

//Como tiene un htttps necesitamos un array para leer ciertas cosas de los datos
$opciones=array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));

//Para desactivar las opciones de desactivo de la lectura,
//Desactivar la restriccion que tenemos con el https.
$respuesta=file_get_contents($url,false,stream_context_create($opciones));
//Decodificamos la respuesta
$objRespuesta=json_decode($respuesta);

//print_r($objRespuesta);


?>

<ul>
<?php foreach ($objRespuesta->list as $video){?>
   
    <li> <?php   
         //Imprimimos solo el titulo del video
        print_r($video->title);  ?></li>

<?php } ?>
</ul>
