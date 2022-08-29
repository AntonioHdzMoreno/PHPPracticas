<?php
//Clase para conectarse a la bd
class BD {
    //Almacenar la  conexion
    public static $instancia = null;
    //CRear clase para poderse conectar
    public static function crearInstancia()
    {

        //Checar si la conexion existe
        if(!isset(self::$instancia))
        { 

            //Para checar si hay errores.
            $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            //La informacion de nuestra instancia
            self::$instancia = new PDO('mysql:host=localhost;dbname=aplicacion','root','',$opciones);
            echo "Conectado...";
        }

        return self::$instancia;


    }
}

?>
