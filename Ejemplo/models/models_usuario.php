<?php

Class Usuario{

    Public $nombre;
    Public $apellidos;
    Public $email;
    Public $password;

    function getNombre(){
        return $this->nombre;
    }

    function getapellidos(){
        return $this->apellidos;
    }

    function getemail(){
        return $this->email;
    }

    function getpassword(){
        return $this->password;
    }



    //setter

    function setnombre($nombre){
        $this->nombre = $nombre;
    }
    
    function setapellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    
    function setemail($email){
        $this->email = $email;
    }

    function setpassword($password){
        $this->password = $password;
    }


        //Metodo para que consulte la base de datos
        public function conseguirTodos(){
            echo "IMPRIMIENDO TODOS LOS USUARIOS...";

        }
}

?>