<?php
/**
* Objeto / Clase Control
* //Control ejercicio 1 es por la carpeta control, y el ejercicio 1 tp 1
*/
class Control_eje1 {//Nombre de archivos y clases es el mismo
//No necesitamos constructores ni atributos? Los metodos de las clases predefinidas?
//Por que se utilzia un objeto y no funciones?

//Esto solo hace el calculo y se deriva nuevamente a action.php

    public function Ver_Informacion($datos){
        $numero = $datos['Form_eje1'];
        if ($numero > 0) {
            $respuesta = "El numero " . $numero . " es positivo";
        } elseif ($numero == 0) {
            $respuesta = "El numero es cero";
        } elseif ($numero < 0) {
            $respuesta = "El numero ".$numero." es negativo";
        } else {
            $respuesta = "No ingreso numero";
        }


        return $respuesta;
    }
}
?>