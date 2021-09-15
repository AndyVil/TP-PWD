<?php
/**
 * Objeto / Clase Control
 * //Control ejercicio 1 es por la carpeta control, y el ejercicio 1 tp 1
 */
class Control_eje6{ //Nombre de archivos y clases es el mismo
//No necesitamos constructores ni atributos? Los metodos de las clases predefinidas?
//Por que se utilzia un objeto y no funciones?

//Esto solo hace el calculo y se deriva nuevamente a action.php

    public function Ver_Informacion($datos){
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];
        $estudios = $datos['estudios'];
        $genero = $datos['gender'];

        $estudiosVerif = $this->Estudios($estudios);
        $deportes = $this->Deportes("");

        $respuesta = "Hola, yo soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años " . "y vivo en " . $direccion. "<br>".
            "Informacion adicional: <br>" . "sexo: " . $genero . "<br>" . "Nivel de estudios: " . $estudiosVerif."<br>".
                " #Realiza los siguientes deportes: ".$deportes."<br><br>";
        return $respuesta;
    }

    public function Ver_edad($datos){
        $edad = $datos['edad'];
        return $edad;
    }

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

    public function Deportes($varDeporte){//Variable vacia
        if (isset($_POST['deporte'])){
            $arregloDeportes = [];
            $arregloDeportes = $_POST['deporte'];
            foreach ($arregloDeportes as $valor){
                $varDeporte = $varDeporte . $valor . ", ";
            }
        } else {
            $varDeporte = 'No realiza deportes';
        };
        return $varDeporte;
    }
}