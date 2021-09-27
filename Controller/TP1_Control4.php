<?php
    class TP1_Control4{
        
        public function Ver_Informacion($datos){
            $nombre = $datos['nombre'];
            $apellido = $datos['apellido'];
            $edad = $datos['edad'];
            $direccion = $datos['direccion'];

            //Impresion simple de los datos en pantalla
            $respuesta = "Hola, yo soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años " . "y vivo en " . $direccion;
            return $respuesta;
        }

        //Meodo solicitado en el action2.php para calcular si es mayor de edad
        public function Ver_edad($datos){
            $edad = $datos['edad'];
            return $edad;
        }

        //Verificacion de mayoria de edad
        public function Verificar_edad($datos){
            $edad = $datos['edad'];
            $mayor = ($edad >= 18);
            if ($mayor) {
                $respuesta =  'Es mayor de edad';
            } else {
                $respuesta = 'No es mayor de edad';
            }
            return $respuesta;
        }
    }
?>