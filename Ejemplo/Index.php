<h1>Bienvenido a mi Web</h1>

<?php

require_once 'controllers/UsuarioController.php';

$controlador = new UsuarioController;

$nombre_controlador =$_GET['controller'];

if(isset($nombre_controlador)&&class_exists($nombre_controlador)){

    $nombre_controlador = $_GET['controller'];
    $controlador = new $nombre_controlador;    

    if(isset($_GET['action'])&& method_exists($controlador, $_GET['action'])){

        $accion = $_GET['action'];
        $controlador->$accion();

        }else{
        echo "la pagina que buscas no existe";
    }

}else{

    Echo "la pagina que buscas no existe";

}.

