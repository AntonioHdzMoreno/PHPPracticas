<?php
include("conexion.php");
if(isset($_GET['id'])){
	$resultado = $conexion -> query("SELECT * FROM productos WHERE IdProducto=".$_GET['id'])or die($conexion -> error);
	if(mysqli_num_rows($resultado) > 0){
		$fila = mysqli_fetch_row($resultado);
	}else{ 
		header("Location: index.php");
	}
}else{
	//REDIRECCIONAMIENTO AL INDEX
	//SINO ENCUENTRA LA PÁGINA DESEADA
	header("Location: index.php");
}

    $producto = $_POST['Producto'];
    $precio = $_POST['Precio'];
    $nombrecliente = $_POST['NombreCliente'];
    $apellido = $_POST['Apellido'];
    $direccion = $_POST['Direccion'];
    $ciudad = $_POST['Ciudad'];
    $estado = $_POST['Estado'];
    $codpostal = $_POST['CodPostal'];
    $correo = $_POST['Correo'];
    $telefono = $_POST['Telefono'];
    $edad = $_POST['Edad'];


    $sql = "CALL SP_InsertarVenta('$producto', '$precio', '$nombrecliente', '$apellido', '$direccion', '$ciudad', '$estado', '$codpostal', '$correo', '$telefono', '$edad')";

    echo mysqli_query($conexion,$sql);
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
        <h1 align="center">TU COMPRA HA SIDO REALIZADA, GRACIAS.</h1>
        
	</div>
    
	<script src="js/jquery.js"></script>
    <script src="js/bloqueos.js"></script>
</body>
</html>
