<?php
    class TP1_Control3 {
        public function Ver_Informacion($datos){
            $nombre = $datos['nombre'];
            $apellido = $datos['apellido'];
            $edad = $datos['edad'];
            $direccion = $datos['direccion'];

            $respuesta = "Hola, yo soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años " . "y vivo en " . $direccion;
            return $respuesta;
        }
    }
?>