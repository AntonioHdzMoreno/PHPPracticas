<?php 

class persona
{
 public $nombre; //Propiedades 
 private $edad; //Solo se puede acceder desde la clase en donde se definio
 protected $altura; //solo se puede acceder desde la misma clase y clases heredadas


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

class trabajador extends persona //Heredar clase o extender de una 
{
 public $puesto;
 public function presentarse()
 {
  echo "Hola soy ".$this->nombre. " y soy un ".$this->puesto;  //Nombre heredado de Persona
 }

}

//Crear objeto

$miPersona=new persona(); //instancia de objeto
$miPersona->asignarNombre("Antonio");//lamar el metodo
$miPersona->imprimirNombre();
echo $miPersona->mostraredad();//Imprimir propiedad privada

$miTrabajador=new trabajador(); //Crear objeto de clase heredada
$miTrabajador->puesto ="Ingeniero";
$miTrabajador->asignarNombre("Jose");
$miTrabajador->presentarse();

?>