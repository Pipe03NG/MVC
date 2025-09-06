<?php


//ACA MOSTRAMOS LAS ACCIONES QUE PUEDE HACER EL CONTROLADR

class UsuarioController{
    public function mostrarTodos(){
        require_once 'models/models_usuario.php';

        $usuario = new Usuario();

        $todos_los_usuarios = $usuario->conseguirTodos();

        require_once 'Views/Usuarios/Mostrar_todos.php';

    }

    public function crear(){
        require_once 'Views/Usuarios/Crear.php';


    }

}