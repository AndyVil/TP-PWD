<?php
    class TP1_Control5{ 
        public function Ver_Informacion($datos){
            $nombre = $datos['nombre'];
            $apellido = $datos['apellido'];
            $edad = $datos['edad'];
            $direccion = $datos['direccion'];
            $estudios = $datos['estudios'];
            $genero = $datos['gender'];

            //Llamamos al metodo de verificacion de estudios
            $estudiosVerif = $this->Estudios($estudios);

            //Impresion simple de los datos en pantalla
            $respuesta = "Hola, yo soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años " . "y vivo en " . $direccion. "<br>".
                "Informacion adicional: <br>" . "sexo: " . $genero . "<br>" . "Nivel de estudios: " . $estudiosVerif."<br><br>";
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

        //Verifica si tiene estudios
        public function Estudios($valor){
            if($valor == 1){
                $nuevoValor = 'No tiene estudios';
            }elseif($valor == 2){
                $nuevoValor = 'Tiene estudios primarios completos';
            }elseif ($valor == 3){ 
                $nuevoValor = 'Tiene estudios secundarios completos';
            }
            return $nuevoValor;
        }
    }
?>