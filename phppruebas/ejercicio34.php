<?php

$txtNombre ="";
$rdgLenguaje="";

$chkphp="";
$chkhtml="";
$chkcss="";

$IsAnime="";

$txtComentario ="";

if($_POST)
{
//Si hay algo asignale el valor si no no asignas nada.
    $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:""; 
    $rdgLenguaje = (isset($_POST['lenguaje']))?$_POST['lenguaje']:""; 

//Isset para verificar si contiene dicha informacion 
//El ? es un IF
    $chkphp = (isset($_POST['chkphp'])=="si")?"checked":""; 
    $chkhtml = (isset($_POST['chkhtml'])=="si")?"checked":""; 
    $chkcss = (isset($_POST['chkcss'])=="si")?"checked":""; 


    $IsAnime=(isset($_POST['IsAnime']))?$_POST['IsAnime']:"";

    $txtComentario=(isset($_POST['txtComentario']))?$_POST['txtComentario']:"";

    print_r($_POST);
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
    <p>Tu nombre es:</p>
    <?php echo $txtNombre;?>
    <p> y Tu lenguaje es:</p>
    <?php echo $rdgLenguaje;?>
    <p> y estas aprendiendo :</p>
    <?php echo ($chkphp=="checked")?"PHP":"";?>
    <?php echo ($chkhtml=="checked")?"html":"";?>
    <?php echo ($chkcss=="checked")?"css":"";?>
    <p> y Tu anime es: </p>
    <?php echo $IsAnime;?>
    <p> y Tu Duda es: </p>
    <?php echo $txtComentario;?>
    <?php 
    } 
    ?>


    <br>
    <form action="ejercicio34.php" method="post">
    <br>
    <!-- Ponerle valor al input con la variable txtNombre y que no desaparzca al recargar --> 
    <input value="<?php echo $txtNombre;?>" type ="text" name="txtNombre" id="">
    <br>
    ¿Te gusta?: 
    <br>
    php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":"";?> name="lenguaje" value="php" id="">
    <br>
    html: <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":"";?> name="lenguaje" value="html" id="">
    <br>
    CSS: <input type="radio"<?php echo ($rdgLenguaje=="css")?"checked":"";?> name="lenguaje" value="css" id="">
    
    <br>

    Estas aprendiendo?
    <br>
   php: <input type="checkbox"  <?php echo $chkphp;?> name="chkphp" value="si" id="">
    <br>
    html: <input type="checkbox" name="chkhtml" <?php echo $chkhtml;?> value="si"  id="">
    <br>
    css: <input type="checkbox" name="chkcss" <?php echo $chkcss;?> value="si" id="">
    <br>
    <input type="submit" value="Enviar informacion">

    <br>
    ¿Que anime te gusta?
    <br>
    <select name ="IsAnime" id="" >
        <option value="">Ningun Anime </option>
        <option value="naruto"<?php echo ($IsAnime=="naruto")?"selected":"";?> >Naruto </option>
        <option value="bleach" <?php echo ($IsAnime=="bleach")?"selected":"";?> >Bleach </option>
        <option value="dragon" <?php echo ($IsAnime=="dragon")?"selected":"";?> >Dragon Ball</option>
    </select>
     <br>
     Tienes alguna duda?
     <textarea name="txtComentario" id="" cols="30" rows="10">
     <?php echo $txtComentario; ?>
     </textarea>
     <br>
</form>

</body>
</html>