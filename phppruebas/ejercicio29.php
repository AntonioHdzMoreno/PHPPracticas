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
     $pdo = new \PDO($dsn, $user, $pass, $options);
     echo "Si se pudo";

     //Query para ejecutar
$sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Primera Foto', 'Primera Foto.jpg');";

$pdo->exec($sql);

} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
     echo "No se pudo";
}

?>