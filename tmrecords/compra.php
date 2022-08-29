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


	<title>TM | Compra</title>

</head>
<body>
<a href="index.php">
	    <img src="img/logo.png" alt="" class = "logo">
    </a>

	<div class="contenedor">
		<nav>
			<a class="logotipo" href="#">TMR</a>
			<div class="enlaces">
				<a href="#">Inicio</a>
				<img src="img/carrito.png" alt="" class="iconos">
				<a href="#">Carrito</a>
				<img src="img/cel.png" alt="" class="iconos">
				<a href="#">Contacto</a>
			
			</div>
		</nav>

		<section class="grid3">
			<div class="card2" >
				<form method="POST" class="InfoVentas" name= "Formulario" action="insercion.php?id=<?php echo $fila['0'];?>"> 
					<h4 >Informacion de Contacto</h4>
					<label for="fname">Producto</label><br>
					<input type="text" readonly="readonly" class="input_no" name="Producto" value="<?php echo $fila['1'];?>" ><br>
					<label for="fname">Precio</label><br>
					<input type="text" readonly="readonly"  class="input_no"  name="Precio" value="<?php echo $fila['4'];?>"><br>
					<label for="fname">Nombre:</label><br>
					<input type="text" name="NombreCliente" class="input_text" id="Nombre"><br>
					<label for="fname">Apellido:</label><br>
					<input type="text" name="Apellido" class="input_text" id="Apellido"><br>
					<label for="fname">Direccion:</label><br>
					<input type="text" name="Direccion" class="input_especial" id="Direccion" ><br>
					<label for="fname">Ciudad:</label><br>
					<input type="text" name="Ciudad" class="input_text" id="Ciudad"><br>
					<label for="fname">Estado:</label><br>
					<input type="text" name="Estado" class="input_text" id="Estado"><br>
					<label for="fname">Codigo Postal:</label><br>
					<input type="tel" name="CodPostal" class="input_tel" id="CodPostal" ><br>
					<label for="fname">Correo:</label><br>
					<input type="text" name="Correo" class="input_especial" id="Correo"><br>
					<label for="fname">Numero Telefonico:</label><br>
					<input type="tel" name="Telefono" class="input_tel" id="Telefono"><br>
					<label for="fname">Edad:</label><br>
					<input type="text" name="Edad" class="input_tel" id="Edad" ><br>
					<br>
					<button type="Submit" id="Mostrar" name="Mostrar" value="Mostrar" class="BotonComprar" disabled>Comprar</button><br>
					
				</form>
				
				<div class="ProductoVenta">
					<img src="img/<?php echo $fila['5'];?>" alt="<?php echo $fila['1'];?>" alt="" class="img">
					<div class = "TextoVenta">
					<p class = "TextoNegrita"> Titulo: <?php echo $fila['1'];?></p>
					<p class = "TextoNegrita"> Precio: <?php echo $fila['4'];?></p>
					<p class = "TextoNegrita"> Contenido: <?php echo $fila['2'];?> Pistas</p>
					<br>
				<br>
				</div>
			</div>
		</section>
	</div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="js/jquery.js"></script>
    <script src="js/bloqueos.js"></script>
	<script src="js/submit.js"></script>
	<script>

	(function()
	{
		$('form > input').keyup(function(){
			var empty = false;
			$('form > input').each(function(){
				if($(this).val() == ''){
					empty = true;
			}
		});

		if(empty){
			$('#Mostrar').attr('disabled', 'disabled');
		} else {
			$('#Mostrar').removeAttr('disabled');
	 }
});
 })()

		 jQuery(document).ready(function() {
    jQuery('.input_tel').keypress(function(tecla) {
        if(tecla.charCode < 48 || tecla.charCode > 57 ) return false;
    		});
		});
		
		jQuery('.input_text').keypress(function(tecla2) {
		if((tecla2.charCode < 97 || tecla2.charCode > 122) && (tecla2.charCode < 65 || tecla2.charCode > 90) && (tecla2.charCode !=32 )) return false;
		});

		jQuery('.input_especial').keypress(function(tecla3) {
		if((tecla3.charCode < 48 || tecla3.charCode > 57) && (tecla3.charCode < 97 || tecla3.charCode > 122) && (tecla3.charCode < 65 || tecla3.charCode > 90) && (tecla3.charCode != 45) && (tecla3.charCode != 46) && (tecla3.charCode != 64) && (tecla3.charCode != 32) && (tecla3.charCode != 95) ) return false;
		});

		jQuery('.input_no').keypress(function(tecla4) {
		if((tecla4.charCode != 32) ) return false;
		});
//VALIDACIONES DE CARACTERES

var input=  document.getElementById('Nombre');
		input.addEventListener('input',function(){
		if (this.value.length > 50) { alert("Solo se permite un máximo de 50 caracteres."); }
			this.value = this.value.slice(0,50); })

		var input=  document.getElementById('Apellido');
		input.addEventListener('input',function(){
		if (this.value.length > 50) { alert("Solo se permite un máximo de 50 caracteres."); }
			this.value = this.value.slice(0,50); })
			
		var input=  document.getElementById('Direccion');
		input.addEventListener('input',function(){
		if (this.value.length > 50) { alert("Solo se permite un máximo de 60 caracteres."); }
			this.value = this.value.slice(0,60); })

		var input=  document.getElementById('Ciudad');
		input.addEventListener('input',function(){
		if (this.value.length > 30) { alert("Solo se permite un máximo de 30 caracteres."); }
			this.value = this.value.slice(0,30); })
		
		var input=  document.getElementById('Estado');
		input.addEventListener('input',function(){
		if (this.value.length > 30) { alert("Solo se permite un máximo de 30 caracteres."); }
			this.value = this.value.slice(0,30); })

		var input=  document.getElementById('CodPostal');
		input.addEventListener('input',function(){
		if (this.value.length > 5) { alert("Solo se permite un máximo de 5 caracteres."); }
			this.value = this.value.slice(0,5); })

		var input=  document.getElementById('Correo');
		input.addEventListener('input',function(){
		if (this.value.length > 50) { alert("Solo se permite un máximo de 50 caracteres."); }
			this.value = this.value.slice(0,50); })
		
		var input=  document.getElementById('Telefono');
		input.addEventListener('input',function(){
		if (this.value.length > 10) { alert("Solo se permite un máximo de 10 caracteres."); }
			this.value = this.value.slice(0,10); })

		var input=  document.getElementById('Edad');
		input.addEventListener('input',function(){
		if (this.value.length > 2) { alert("Solo se permite un máximo de 2 caracteres."); }
			this.value = this.value.slice(0,2); })


	</script>
</body>
</html>