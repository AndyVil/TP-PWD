<?php
    class TP2_Control3{
        public function login($paramDatos){

            $passwordIn = $paramDatos['pss'];
            $userIn = $paramDatos['usr'];

            //El ejercicio no menciona nada de almacenar datos nuevos, sino de revisar un registro anterior de un array
            //Arreglo multidimencional de usuarios
            $arrUsers = [
                "user1" => [
                    "user" => "andromeda67",
                    "password" => "ComeCocos!5564"
                ],
                "user2" => [
                    "user" => "pepePoroto",
                    "password" => "SaludosIntrusoj4j4j4"
                ],
                "user3" => [
                    "user" => "holaJuanCarlos",
                    "password" => "Como_estas_030"
                ]
            ];

            //Foreach para arrelgos asociativos mulstidimencionales , For para los indexados
            //$count = 0;
            $res = null;
            
            //Creamos 2 variables, usruario y contraseña, como este recorrido es secuencial, siempre el primer dato segun lo definí
            //es el usuario[0], luego la contraseña[1]
            $dataUser = '';
            $dataPass = '';
            foreach ($arrUsers as $item => $value){
                //$count por lo que se ve el count se reinicia por cada vez que recorre un elemento en el array padre
                $count= 0;
                foreach($value as $user => $data){
                    //$count aca se convierte en 1 pero luego de que el apdre recorre 2 veces el arreglo, se vuelve a convertir en 0
                    if($count == 0) $dataUser = $data;
                    if($count == 1) $dataPass = $data;
                    //echo "@count " . $count . ' ';
                    $count++;

                }
                //echo "usuario: " . $dataUser . " contraseña: " . $dataPass. "<br><br>";

                //Importante hacer la comprobacion debajo de los arreglos porque sino se va a reiniciar siempre y voy a perder el
                //primer dato
                if($userIn == $dataUser && $passwordIn == $dataPass){
                    $res = "Contraseña y usuario correcta! <br> Bienvenido ". $dataUser."! ";
                    break;
                }else{
                    $res = "Contraseña o usuarios incorrectos... <br>";
                }
            }
            return $res;
        }
    }
?>