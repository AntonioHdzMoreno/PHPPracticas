<?php 

class persona
{
 public $nombre; //Propiedades 
 private $edad; //Solo se puede acceder desde la clase en donde se definio
 protected $altura; //solo se puede acceder desde la misma clase y clases heredadas

 function __construct ($nuevonombre)//Constructor de la clase que pide un valor al crear la clase
{
    $this->nombre=$nuevonombre;
} 

 public function asignarNombre($nuevonombre) //metodos 
 {
  $this->nombre=$nuevonombre;
 }

public function imprimirNombre()
{

    echo "Hola soy ".$this->nombre;
}

public function mostraredad () //Mostrar una propiedad privada desde la clase
{
$this->edad = 20;
return $this->edad;
}
}

//Crear objeto

$miPersona=new persona("Antonio"); //instancia de objeto
//$miPersona->asignarNombre("Antonio");//lamar el metodo

$miPersona->imprimirNombre();

echo $miPersona->nombre;//Imprimir propiedad
echo $miPersona->mostraredad();//Imprimir propiedad privada

?>