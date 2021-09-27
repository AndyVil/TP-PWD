<?php
    class TP1_Control1 {
        //Verifica que el numero sea ingresado y que tipo
        public function Ver_Informacion($datos){
            $numero = $datos['numero'];
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