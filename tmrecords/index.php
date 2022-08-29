<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet"> 
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/estilos.css">

	<title>TM | Bienvenido</title>

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
		<section class="grid">
            <?php
                include('conexion.php');
                $resultado = $conexion -> query("CALL SP_MostrarProductos") or die($conexion -> error);
                while($fila = mysqli_fetch_array($resultado)){
                ?>
                <div class="card">
                    <img src="img/<?php echo $fila['Imagen'];?>" alt="<?php echo $fila['NombreProducto'];?>" class="img">
                    <div class="botones">
                        <a href="articulo.php?id=<?php echo $fila['IdProducto'];?>" class="boton primario"><?php echo $fila['NombreProducto']; ?></a>
                        <a href="articulo.php?id=<?php echo $fila['IdProducto'];?>" class="boton secundario">Comprar</a>
                    </div>
                </div>
                <?php } ?>
		</section>
	</div>
    <script src="js/bloqueos.js"></script>
</body>
</html>