<?php

//Prpgramacion orientada a objetos POO
//clases: se utiliza para crear objetos del mismo tipo

Class Carro{

    //Crear primero atributos o propiedades

    Public $color;
    Public $marca;
    Public $modelo;
    Public $velocidad;
    Public $caballaje;
    Public $puestos;


    // Public function __construct()
    //     {
    //     $this->color = "Rojo";
    //      $this->marca = "ferrari";
    //     $this->modelo = "Aventador";
    //     $this->velocidad = 500 ;
    //     $this->caballaje= 300;
    //     $this->puestos= 2;
            // }


        Public function __construct($color,$marca,$velocidad,$modelo,$caballaje,$puestos)
        {
        $this->color = $color;
         $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje= $caballaje;
        $this->puestos= $puestos;  
        }

    }
?>