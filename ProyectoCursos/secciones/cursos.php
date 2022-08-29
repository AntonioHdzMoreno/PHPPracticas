<?php

include_once '../configuraciones/bd.php';

$conexionBD = BD::crearInstancia();

//Revisar si hay uno de estos elementos
$id=isset($_POST['id'])?$_POST['id']:'';
$nombre_curso =isset($_POST['nombre_curso'])?$_POST['nombre_curso']:'';
$accion = isset($_POST['accion'])?$_POST['accion']:'';

if($accion!='')
{
switch($accion)
{
    //Insertar datos
case 'agregar': $sql="INSERT INTO cursos (id, nombre) VALUES (NULL,:nombre_curso)";
//Pasar parametros
$conexionBD = $conexionBD -> prepare($sql);
$consulta->bindParam(':nombre_curso',$nombre_curso);
//EJecutar Consulta
$consulta->execute();
echo $sql;
break;
//Editar DATOS
case 'editar':
    $sql="UPDATE cursos set nombre_curso='$nombre_curso' where id=$id";
    echo $sql;
break;
//BORRAR DATOS
case 'borrar':
    $sql="Delete FROM cursos where id=$id";
    echo $sql;
    break;
}
}


//Consulta
$consulta  =$conexionBD->prepare("Select * From cursos");

//Ejecutar Consulta
$consulta->execute();

//Tomar todos los cursos
$listacursos = $consulta->fetchAll();


//INSERT INTO `cursos` (`id`, `nombre`) VALUES (NULL, 'Curso de Flutter');

//INSERT INTO `alumnos` (`id`, `nombre`, `apellido`) VALUES (NULL, 'Antonio', 'Hernandez');

?>