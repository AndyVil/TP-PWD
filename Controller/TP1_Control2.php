<?php
    class TP1_Control2 {
        public function Ver_Informacion($datos){
            $arr_horarios = [];
            $arr_horarios = [
                "lunes_entrada" => $datos['lunes'],
                "lunes_salida" => $datos['lunes2'],
                "martes_entrada" => $datos['martes'],
                "martes_salida" => $datos['martes2'],
                "miercoles_entrada" => $datos['miercoles'],
                "miercoles_salida" => $datos['miercoles2'],
                "jueves_entrada" => $datos['jueves'],
                "jueves_salida" => $datos['jueves2'],
                "viernes_entrada" => $datos['viernes'],
                "viernes_salida" => $datos['viernes2'],
                "sabado_entrada" => $datos['sabado'],
                "sabado_salida" => $datos['sabado2'],
                "domingo_entrada" => $datos['domingo'],
                "domingo_salida" => $datos['domingo2'],
            ];

            $horas_totales_suma = 0; //No voy a ser especifico con el tema de horarios luego de las 23 etc...
            $horas_totales_resta = 0;

            $contador = 0; //Bandera
            foreach ($arr_horarios as $horario => $valor) {
                $contador++;
                echo $horario . ": " . $valor . "<br>";
                //print_r($valor."<br>");
                $valor = (int) $valor;
                if ($contador % 2 == 0) {
                    //Es par (la idea es sumar los numeros pares, y restarle los impartes, para obtener el total de hrs)
                    $horas_totales_suma = $horas_totales_suma + $valor;
                } else { //Es impar
                    $horas_totales_resta = $horas_totales_resta + $valor;
                }
            }
            $horas_totales =  $horas_totales_suma - $horas_totales_resta;
            $respuesta = "<br><br>Horas total de cursada: " . $horas_totales . "<br>";
            //print_r $arr_horarios[''];
            return $respuesta;
        }
    }
?>