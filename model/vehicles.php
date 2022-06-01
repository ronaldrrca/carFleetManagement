<?php
require 'conexion.php';

//Classe vehicles
class Vehicles{
    private $id;
    private $marca;
    private $tipo;
    private $modelo;
    private $anio;
    private $color;
    private $placa;
    private $serial_motor;

    public function createVehicle($marca, $tipo, $modelo, $anio, $color, $placa, $serial_motor){
        $this->marca = $marca;
        $this->tipo = $tipo;
        $this->modelo = $modelo;
        $this->anio = $anio;
        $this->color = $color;
        $this->placa = $placa;
        $this->serial_motor = $serial_motor;

        $objConexion = new Conexion();
        $conexion = $objConexion->conectarse();
        $create = $conexion->query("call crearVehiculo('$this->marca', '$this->tipo', '$this->modelo', '$this->anio', '$this->color', '$this->placa', '$this->serial_motor')");
        return $create;
    }

    public function listVehicles(){
        $objConexion = new Conexion();
        $conexion = $objConexion->conectarse();
        $list = $conexion->query("call listarVehiculos()");
        return $list;
    }

    public function consultDuplcates($placa, $serial_motor){
        $this->placa = $placa;
        $this->serial_motor = $serial_motor;

        $objConexion = new Conexion();
        $conexion = $objConexion->conectarse();
        $consult = $conexion->query("call validarPlacaYSerialMotor('$this->placa', '$this->serial_motor')");
        return $consult;
    }

    public function editVehicle($id, $marca, $tipo, $modelo, $anio, $color, $placa, $serial_motor){
        $this->id = $id;
        $this->marca = $marca;
        $this->tipo = $tipo;
        $this->modelo = $modelo;
        $this->anio = $anio;
        $this->color = $color;
        $this->placa = $placa;
        $this->serial_motor = $serial_motor;

        $objConexion = new Conexion();
        $conexion = $objConexion->conectarse();
        $edit = $conexion->query("call editarVehiculo('$this->id', '$this->marca', '$this->tipo', '$this->modelo', '$this->anio', '$this->color', '$this->placa', '$this->serial_motor')");
        return $edit;
    }

    public function deleteVehicle($id){
        $this->id = $id;
        $objConexion = new Conexion();
        $conexion = $objConexion->conectarse();
        $delete = $conexion->query("call eliminarVehiculo('$this->id')");
        return $delete;
    }

}