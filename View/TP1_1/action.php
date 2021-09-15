<?php
require_once("../Structure/header.php");
?>

<div id="contenido" style="height: 400px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;">
    <?php
    $datos = data_submited(); //del archivo funciones
    $objeto = new TP1_Control1();
    //La accion lo que hace es llamar al objeto que va 
    //a procesar el ejercicio que estas haiendo
    //El controlador es el que se encarga de los objetos y la parte logica.

    $respuesta = $objeto->Ver_Informacion($datos);

    echo $respuesta;

    echo "<br><br><a href='http://localhost/pwd_proyectos/TP-PWD/View/TP1_1/index.php'>
            Volver a la pagina anterior</a>"; //NO puede haber echos en las clases



    ?>
</div>

<?php
require_once("../Structure/footer.php");
?>