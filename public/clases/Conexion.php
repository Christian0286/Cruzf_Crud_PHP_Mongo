<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/cruzf_Crud_PHP_Mongo/vendor/autoload.php';
class Conexion{
    public function conectar(){
        try {
        $servidor = "127.0.0.1";
        $user = "mongoadminn";
        $pwd = "123456";
        $db = "crud-ckcf";
        $puerto = "27017";
        $cadenaconexion = "mongodb://" .
        $user . ":". 
        $pwd . "@" .
        $servidor . ":" .
        $puerto . "/" .
        $db;
        $cliente = new  MongoDB\Client($cadenaconexion);
        return $cliente->selectDatabase($db);
        } catch (\Throwable $th){
            return $th->getMessage();
        }
    }
}
 $object = new Conexion();
  var_dump($object->conectar());
?>