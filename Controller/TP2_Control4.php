<?php
    class TP2_Control4{
        public function impress($datos){
            //Comprobamos los datos
            $newDatos = $this->comprobation($datos);

            //Depositamos los datos en nuevas variables de un arreglo indexado resultado del metodo anterior
            $title = $newDatos[0];
            $actors = $newDatos[1];  
            $director = $newDatos[2];
            $script = $newDatos[3];
            $production = $newDatos[4];
            $year = $newDatos[5];
            $nationality = $newDatos[6];
            $genre = $newDatos[7];
            $duration = $newDatos[8];
            $restriction = $newDatos[9];
            $sinop = $newDatos[10];

            $respuesta = 
                '<strong>La pelicula introducida es:</strong> <br> <br>'.

                '<strong>Título:</strong>'.' ' . $title . '<br>' .
                '<strong>Actores:</strong>'. ' ' . $actors . '<br>' .
                '<strong>Director:</strong>'. ' ' . $director . '<br>' .
                '<strong>Guión:</strong>'. ' ' . $script . '<br>' .
                '<strong>Producción:</strong>'. ' ' . $production . '<br>' .
                '<strong>Año:</strong>'. ' ' . $year . '<br>' .
                '<strong>Nacionalidad:</strong>'. ' ' . $nationality . '<br>' .
                '<strong>Género:</strong>'. ' ' . $genre . '<br>' .
                '<strong>Duración:</strong>'. ' ' . $duration . 'min'.'<br>' .
                '<strong>Restricción de edad:</strong>'. ' ' . $restriction . '<br>' .
                '<strong>Sinopsis:</strong>'. ' ' . $sinop . '<br>';
            

            return $respuesta;
        }


        public function comprobation($datos){
            //Volvemos a verificar que los datos no esten varios    
            $data=[];
            array_push(
                $data,
                $datos['title'],
                $datos['actors'],  
                $datos['director'],
                $datos['script'],
                $datos['production'],
                $datos['year'],
                $datos['nationality'],
                $datos['genres'],
                $datos['duration'],
                $datos['old'],
                $datos['sinopsis']
            );

            //Si la variable esta vacia entonces no hay datos, muestra por pantalla eso, 
            //en caso de que las verificaciones fallen
            for ($i=0; $i < count($data); $i++) { 
                if($data[$i] == ''){
                    $data[$i] = '<strong>Datos incompletos</strong>';
                }
            }
            return $data;//Retorta un arreglo indexado
        }
    }
?>