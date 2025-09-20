<?php

require_once 'config/database.php';

class Usuario {
    public $Id_usuario;
    public $nombre;
    public $apellido;
    public $correo;
    public $password;


    private $db;

    public function __construct(){
        $this->db = database::conectar();
    }


    //Geters

    function getId_usuario(){
        return $this->getId_usuario;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getApellido(){
        return $this->apellido;
    }

    function getcorreo(){
        return $this->correo;
    }

    function getPassword(){
        return $this->password;
    }


    //Seters

     function setId_usuario($Id_usuario){
        $this->Id_usuario = $Id_usuario;
    }


    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setApellido($apellido){
        $this->apellido = $apellido;
    }

    function setcorreo($correo){
        $this->correo = $correo;
    }

    function setPassword($password){
        $this->password = $password;
    }


    // metodos que consulten cosas a la bdatos
    public function conseguirTodos(){
       //var_dump($this->db);

        $query =$this->db->query("SELECT * FROM t_usuario");
        return $query;
        
        echo "IMPRIMIENDO TODOS LOS USUARIOS...";
    }


    Public function crear(){
     $sql = "INSERT INTO t_usuario (id_usuario, nombre, apellido, correo,password,id_rol) VALUES({$this->Id_usuario}, '{$this->nombre}','{$this->apellido}','{$this->correo}','{$this->password}',1);";
       $guardar= $this ->db->query ($sql);
        return $guardar;
    }

}