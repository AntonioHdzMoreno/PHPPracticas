<?php
//PDO ES UNA LIBRERIA PARA CONECTARSE MÄS FACILMENTE A UNA BD Y TIENE METODOS QUE NOS SIRVEN PARA VER LOS
//ERRORES MÄS FACILMENTE

//Conectarnos a una base de datos en este caso nuestro servidor


$host = '127.0.0.1';
$db   = 'album';
$user = 'root';
$pass = '';
$port = "3308";

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$db;port=$port";
try {
     $pdo = new \PDO($dsn, $user, $pass, $options); //Conexion a la bd
     echo "Si se pudo";

     //Query para seleccionar
$sql="Select * From fotos";

$sentencia=$pdo->prepare($sql);

$sentencia->execute();

$resultado = $sentencia->fetchAll(); //Metodo para tomar todo lo que reciba

print_r($resultado); //Imprimir todo

foreach($resultado as $foto) // imprimir atributos en especifico
{
print_r("<br>".$foto['nombre']);
}

} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
     echo "No se pudo";
}

?>