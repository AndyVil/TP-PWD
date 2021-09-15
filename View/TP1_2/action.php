<?php
require_once("../Estructura/cabecera.php");
?>

<div id="contenido" style="height: 400px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;">
    <?php
    $datos = data_submited(); //del archivo funciones
    $objeto = new Control_eje2();
    //La accion lo que hace es llamar al objeto que va 
    //a procesar el ejercicio que estas haiendo
    //El controlador es el que se encarga de los objetos y la parte logica.

    $respuesta = $objeto->Ver_Informacion($datos);

    echo $respuesta;

    //NO puede haber echos en las clases
    echo "<br><br><a href='http://localhost/pwd_proyectos/TP1/Vista/Ejercicio_2/index.php'>
        Volver a la pagina anterior</a>";


    ?>
</div>

<?php
require_once("../Estructura/pie.php");
?>