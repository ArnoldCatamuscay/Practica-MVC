<?php
class clsConexion{
    private $conexion;
    //metodos
    public function __construct(){
        $this->conexion = new mysqli('localhost','root','','bdproductos');

    }

    public function getConexion(){
        return $this->conexion;
    }
}
?>