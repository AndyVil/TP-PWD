<?php
/**
* Objeto / Clase Control
* //Control ejercicio 1 es por la carpeta control, y el ejercicio 1 tp 1
*/
class TP1_Control2 {//Nombre de archivos y clases es el mismo
//No necesitamos constructores ni atributos? Los metodos de las clases predefinidas?
//Por que se utilzia un objeto y no funciones?

//Esto solo hace el calculo y se deriva nuevamente a action.php

    public function Ver_Informacion($datos){
        $arr_horarios = [];
        $arr_horarios = [
            "lunes_entrada" => $_GET['lunes'],
            "lunes_salida" => $_GET['lunes2'],
            "martes_entrada" => $_GET['martes'],
            "martes_salida" => $_GET['martes2'],
            "miercoles_entrada" => $_GET['miercoles'],
            "miercoles_salida" => $_GET['miercoles2'],
            "jueves_entrada" => $_GET['jueves'],
            "jueves_salida" => $_GET['jueves2'],
            "viernes_entrada" => $_GET['viernes'],
            "viernes_salida" => $_GET['viernes2'],
            "sabado_entrada" => $_GET['sabado'],
            "sabado_salida" => $_GET['sabado2'],
            "domingo_entrada" => $_GET['domingo'],
            "domingo_salida" => $_GET['domingo2'],
        ];

        $horas_totales_suma = 0; //No voy a ser especifico con el tema de horarios luego de las 23 etc...
        $horas_totales_resta = 0;

        $contador = 0; //bandera
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
