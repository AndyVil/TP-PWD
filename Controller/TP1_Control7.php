<?php
    class TP1_Control7{
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
?>