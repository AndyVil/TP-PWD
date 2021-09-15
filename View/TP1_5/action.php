<?php
require_once("../Estructura/cabecera.php");
?>

<div id="contenido" style="height: 400px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;">
    <?php
    //La accion lo que hace es llamar al objeto que va 
    //a procesar el ejercicio que estas haiendo
    //El controlador es el que se encarga de los objetos y la parte logica.
        $datos = data_submited(); //Del archivo funciones

    //Objeto para ver informacion del formulario    
        $objeto = new Control_eje5();
        $respuesta = $objeto->Ver_Informacion($datos);
    echo $respuesta;

    //Objeto para ver la edad y enviarla por URL a la siguiente pagina de comprobacion
        $objeto_edad = new Control_eje4();
        $edad =$objeto->Ver_edad($datos);
    echo "<br><br><a href='action2.php?edad=".$edad. "'>Verificar si es mayor de edad</a><br><br>";


    echo "<br><br><a href='http://localhost/pwd_proyectos/TP1/Vista/Ejercicio_5/index.php'>
            Volver a la pagina anterior</a>"; //NO puede haber echos en las clases
    ?>
</div>

<?php
require_once("../Estructura/pie.php");
//Notese la separacion de bloques de codigo en base a cada accion, o sea, por ejemplo. Linea 13 y 14 son lineas
//que funcionan juntas para dar la respues del la linea 15, entonces las junto pero las sepado con
//tabulaciones (Enter) de los otros bloques que tienen otra funcion.
//A su vez idento cada bloque en base a cada comentario, debajo de este , para que los comentarios se puedan contraer, y separar
//el codigo tambien en comentarios.
//EJEMPLO
/** //Objeto
 *     $ejemplo = new ejemplo();
 *     $returnEjem = $ejemplo->metodo();
*   echo $returnEjem;   

?>