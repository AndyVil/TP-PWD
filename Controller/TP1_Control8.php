<?php

/**
 * Objeto / Clase Control
 * //Control ejercicio 1 es por la carpeta control, y el ejercicio 1 tp 1
 */
class TP1_Control8{ //Nombre de archivos y clases es el mismo
    //No necesitamos constructores ni atributos? Los metodos de las clases predefinidas?
    //Por que se utilzia un objeto y no funciones?

    //Esto solo hace el calculo y se deriva nuevamente a action.php

    public function valorEntrada($datos){
        $edad = $datos['edad'];

    //Comprobacion de checkbox    
        $bandera = isset($datos['estudiante']);//Devuelve bool
        if($bandera){
            $estudiante = $datos['estudiante'];
        }else{
            $estudiante = 0;
        }
        
    //Calculo de precio en relacion a los datos
        $precio = '';
        if ($edad < 12 && $estudiante==1){
            $precio=160; 
        } elseif ($edad>= 12 && $estudiante == 1){
            $precio = 180;
        } elseif ($estudiante == 0) {
            $precio = 300;
        }
            $precio = "<p>" . $precio . "</p>";
    return $precio;
    }
} 