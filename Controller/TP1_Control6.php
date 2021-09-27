<?php
    class TP1_Control6{
        public function Ver_Informacion($datos){
            $nombre = $datos['nombre'];
            $apellido = $datos['apellido'];
            $edad = $datos['edad'];
            $direccion = $datos['direccion'];
            $estudios = $datos['estudios'];
            $genero = $datos['gender'];

            //Llamamos al metodo de verificacion de estudios
            //Llamamos al metodo que verifica si hace deportes
            $estudiosVerif = $this->Estudios($estudios);
            $deportes = $this->Deportes($datos);

            //Imprimir datos en pantalla
            $respuesta = "Hola, yo soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años " . "y vivo en " . $direccion. "<br>".
                "Informacion adicional: <br>" . "sexo: " . $genero . "<br>" . "Nivel de estudios: " . $estudiosVerif."<br>".
                    " #Realiza los siguientes deportes: ".$deportes."<br><br>";
            return $respuesta;
        }

        //Meodo solicitado en el action2.php para calcular si es mayor de edad
        public function Ver_edad($datos){
            $edad = $datos['edad'];
            return $edad;
        }

        //Verifica la edad, metodo llamado en el archivo action2.php
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

        //Comprueba que tenga estudios
        public function Estudios($valor){
            if($valor == 0){
                $nuevoValor = 'No tiene estudios';
            }elseif($valor == 1){
                $nuevoValor = 'Tiene estudios primarios completos';
            }else{ 
                $nuevoValor = 'Tiene estudios secundarios completos';
            }
            return $nuevoValor;
        }

        //Verifica que la persona hace deportes
        public function Deportes($datos){//Variable vacia
           $varDeporte = '';
            if (isset($datos['deporte'])){//Si el indice asociativo esta definido sigue adelante
                $arregloDeportes = [];
                $arregloDeportes = $datos['deporte'];//$_POST
                foreach ($arregloDeportes as $valor){//Recorre cada valor del arreglo, para agregarlo en la impresion
                    $varDeporte = $varDeporte . $valor . ", ";
                }
            } else {
                $varDeporte = 'No realiza deportes';//Si no esta seteado entonces no realiza deportes
            };
            return $varDeporte;
        }
    }
?>