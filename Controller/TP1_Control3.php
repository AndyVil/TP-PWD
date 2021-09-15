<?php
/**
* Objeto / Clase Control
* //Control ejercicio 1 es por la carpeta control, y el ejercicio 1 tp 1
*/
class Control_eje3 {//Nombre de archivos y clases es el mismo
//No necesitamos constructores ni atributos? Los metodos de las clases predefinidas?
//Por que se utilzia un objeto y no funciones?

//Esto solo hace el calculo y se deriva nuevamente a action.php

    public function Ver_Informacion($datos){
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];

        $respuesta = "Hola, yo soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años " . "y vivo en " . $direccion;
        return $respuesta;
    }
}
