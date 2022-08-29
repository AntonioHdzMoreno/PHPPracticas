<?php
include("conexion.php");
$sql = "CALL SP_GetIdemId($_GET[id]);";
$resultado = $conexion->query($sql)or die($conexion -> error);
if(mysqli_num_rows($resultado) > 0){
	$fila = mysqli_fetch_row($resultado);
}else{ 
	header("Location: index.php");

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet"> 
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/estilos.css">


	<title>TM | Artículo</title>

</head>
<body>
<a href="index.php">
	    <img src="img/logo.png" alt="" class = "logo">
    </a>
	<div class="contenedor">
		<nav>
			<a class="logotipo" href="#">TMR</a>
			<div class="enlaces">
				<a href="index.php">Inicio</a>
				<img src="img/carrito.png" alt="" class="iconos">
				<a href="carrito.php">Carrito</a>
				<img src="img/cel.png" alt="" class="iconos">
				<a href="contacto.php">Contacto</a>
			
			</div>
		</nav>

		<section class="grid2">
			<div class="card2">
				<img src="img/<?php echo $fila['5'];?>" alt="<?php echo $fila['1'];?>" class="img">
				<div class="InfoAlbum">
					<p class="TituloAlbum"><?php echo $fila['1'];?></p>
					<p class="TextoNegrita">Precio: </p><p><?php echo $fila['4'];?></p>
					<p class="TextoNegrita">Num. de Pistas</p><p><?php echo $fila['2'];?></p>
					
					<p class="TextoNegrita">Descripcion </p> 
					<p class = "TextoAlbum"> <?php echo $fila['3'];?></p>
					
					<a href="compra.php?id=<?php echo $fila['0'];?>" class = "BotonComprar"> Comprar Ahora </a>
				</div>

			</div>
		</section>
	</div>
	<script src="js/jquery.js"></script>
    <script src="js/bloqueos.js"></script>
</body>
</html>