<?php
require 'conexion.php';

//Clase Usuarios
class Users{
    private $id;
    private $cedula;
    private $nombre;
    private $contrasena;
    private $perfil;
    private $hash;
  
    //Constructor
   public function createUser($cedula, $nombre, $perfil, $hash){
     $this -> cedula = $cedula;
     $this -> nombre = $nombre;
     $this -> perfil = $perfil;
     $this -> hash = $hash;
  
     //Se instancia la clase Conexion
     $objConexion = new Conexion();
  
     //Se invoca la función conectarse() de la clase Conexion
     $conexion = $objConexion -> conectarse();
  
        $create = $conexion->query("call crearUsuario('$this->cedula', '$this->nombre', '$this->perfil', '$this->hash')");
  
  
       //Se retorna el resultado de la consulta
     return $create;
   }//Fin función crerUsuario
  
  
   public function validateUser($cedula){
    $this -> cedula = $cedula;
    
    //Se instancia la clase Conexion
    $objConexion = new Conexion();
  
    //Se invoca la función conectarse() de la clase Conexion
    $conexion = $objConexion -> conectarse();
  
       $validar = $conexion->query("call validarUsuario('$this->cedula')");
  
  
      //Se retorna el resultado de la consulta
    return $validar;
  }//Fin función crerUsuario
  
  
  public function listUsers(){
      
    //Se instancia la clase Conexion
    $objConexion = new Conexion();
  
    //Se invoca la función conectarse() de la clase Conexion
    $conexion = $objConexion -> conectarse();
  
       $listar = $conexion->query("call listarUsuarios()");
  
  
      //Se retorna el resultado de la consulta
    return $listar;
  }//Fin función listarUsuarios
  
  
  public function editUser($id, $cedula, $nombre, $perfil){
    $this->id = $id;
    $this->cedula = $cedula;
    $this->nombre = $nombre;
    $this->perfil = $perfil; 
    //Se instancia la clase Conexion
    $objConexion = new Conexion();
  
    //Se invoca la función conectarse() de la clase Conexion
    $conexion = $objConexion -> conectarse();
  
       $editar = $conexion->query("call editarUsuario('$this->id', '$this->cedula', '$this->nombre', '$this->perfil')");
  
  
      //Se retorna el resultado de la consulta
    return $editar;
  }//Fin función editar usuario
  
  
  
  public function deleteUser($id){
    $this->id = $id;
   
    //Se instancia la clase Conexion
    $objConexion = new Conexion();
  
    //Se invoca la función conectarse() de la clase Conexion
    $conexion = $objConexion -> conectarse();
  
       $eliminar = $conexion->query("call eliminarUsuario('$this->id')");
  
  
      //Se retorna el resultado de la consulta
    return $eliminar;
  }//Fin función eliminar usuario
  
  
  
  public function changePass($cedula, $hash){
    $this->cedula = $cedula;
    $this->hash = $hash; 
    //Se instancia la clase Conexion
    $objConexion = new Conexion();
  
    //Se invoca la función conectarse() de la clase Conexion
    $conexion = $objConexion -> conectarse();
  
       $cambiar = $conexion->query("call cambiarContrasena('$this->cedula', '$this->hash')");
  
  
      //Se retorna el resultado de la consulta
    return $cambiar;
  }//Fin función cambiar contraseña
  
  
  public function resetPass($id, $hash){
    $this->id = $id;
    $this->hash = $hash; 
    //Se instancia la clase Conexion
    $objConexion = new Conexion();
  
    //Se invoca la función conectarse() de la clase Conexion
    $conexion = $objConexion -> conectarse();
  
       $reset = $conexion->query("call resetPass('$this->id', '$this->hash')");
  
  
      //Se retorna el resultado de la consulta
    return $reset;
  }//Fin función resetContraseñaa 
  
  
  
  }//Fin de la clase Usuarios