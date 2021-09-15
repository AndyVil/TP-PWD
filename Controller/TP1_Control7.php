<?php

/**
 * Objeto / Clase Control
 * //Control ejercicio 1 es por la carpeta control, y el ejercicio 1 tp 1
 */
class Control_eje7{ //Nombre de archivos y clases es el mismo
    //No necesitamos constructores ni atributos? Los metodos de las clases predefinidas?
    //Por que se utilzia un objeto y no funciones?

    //Esto solo hace el calculo y se deriva nuevamente a action.php

    public function Cuenta($datos){
        $numero1 = $datos['numero1'];
        $numero2 = $datos['numero2'];
        $operacion = $datos['operacion'];

        switch ($operacion){
            case '-':
                $resultado = $numero1 - $numero2;
                break;
            case '+':
                $resultado = $numero1 + $numero2;
                break;
            case '/':
                $resultado = $numero1 / $numero2;
                break;
            case '*':
                $resultado = $numero1 * $numero2;
                break;
        }
        $resultado = $numero1. $operacion. $numero2. " = ". $resultado;

        return $resultado;
    }
}
