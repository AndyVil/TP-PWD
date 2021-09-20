<?php
    class TP1_Control8{ 
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
?>