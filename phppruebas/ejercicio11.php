<?php

//Operadores aritmeticos
if($_POST)
{
 $valorA=$_POST['valorA'];
 $valorB=$_POST['valorB'];

  $suma=$valorA+$valorB;
  $resta=$valorA-$valorB;
  $divison=$valorA/$valorB;
  $multiplicacion=$valorA*$valorB;
  echo "<br>".$suma;
  echo "<br>".$resta;
  echo "<br>".$divison;
  echo "<br>".$multiplicacion;

  if($valorA==$valorB)
  {
    echo "<br>"."El valor de A es igual al de B"."<br>";
    if($valorA == 4)
    {
        echo "El valor de A es igual al de 4"."<br>";
    }
  }

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
<form action="ejercicio11.php" method="post">
    <p>Valor A:</p>
    <input type="text" name="valorA" id="">
    <br>
    <p>Valor B:</p>
    <input type="text" name="valorB" id="">
    <br>
    <input type="submit" value="Calcular">
    </form>    
</body>
</html>