<?php
require_once("../Structure/header.php");
?>

<div id="contenido" style="height: 82%; min-height:fit-content; width: 89.8%; border: 2px solid red; border-radius: 5px;margin-left:10%;">
    <?php
    $datos = data_submited(); //del archivo funciones
    $objeto = new TP1_Control3();
    //La accion lo que hace es llamar al objeto que va 
    //a procesar el ejercicio que estas haiendo
    //El controlador es el que se encarga de los objetos y la parte logica.

    $respuesta = $objeto->Ver_Informacion($datos);

    echo $respuesta;

    echo "<br><br><a href='http://localhost/pwd_proyectos/TP-PWD/View/TP1_3/index.php'>
            Volver a la pagina anterior</a>"; //NO puede haber echos en las clases



    ?>
</div>

<?php
require_once("../Structure/footer.php");
?>