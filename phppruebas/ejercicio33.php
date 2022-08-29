<?php

$txtNombre ="";
if($_POST)
{
//Si hay algo asignale el valor si no no asignas nada.
    $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:""; 

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
    <!-- La estructura correcta para poner PHP en HTML --> 
    <?php if($_POST)
    {  
    ?>
    <p>Hola</p>
    <?php echo $txtNombre;?>
    <?php 
    } 
    ?>


    <br>
    <form action="ejercicio33.php" method="post">
    <br>
    <!-- Ponerle valor al input con la variable txtNombre y que no desaparzca al recargar --> 
    <input value="<?php echo $txtNombre;?>" type ="text" name="txtNombre" id="">
    <br>
    <input type="submit" value="Enviar informacion">
    </form>
</body>
</html>