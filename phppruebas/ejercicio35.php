<?php
//Recibir archivos es más complicado que recibir simples valores
//El post solo recibe el nombre del archivo
if($_POST)
{
    //Imprimiara solo el nombre del file
    print_r($_POST);
    //Para enviar la informacion del file
    print_r($_FILES);
    //Con esto imprimo solo el nombre del archivo
    print_r($_FILES['archivo']['name']);

    //Copiar el archivo enviado en una carpeta
    move_uploaded_file($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Necesitamos poner  enctype="multipart/form-data" para recibir archivos de forma correcta -->
<form action="ejercicio35.php" enctype="multipart/form-data" method="post">
Imagen: 
<input type="file" name="archivo" id="">
<br>

<input type="submit" name="enviar" value ="Enviar informacion">

</form>

</body>
</html>