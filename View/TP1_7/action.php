<?php
require_once("../Structure/header.php");
?>

<div id="contenido" style="height: 82%; min-height:fit-content; width: 89.8%; border: 2px solid red; border-radius: 5px;margin-left:10%;">
    <?php
    //La accion lo que hace es llamar al objeto que va 
    //a procesar el ejercicio que estas haiendo
    //El controlador es el que se encarga de los objetos y la parte logica.
    $datos = data_submited(); //Del archivo funciones

    //Objeto para ver informacion del formulario    
    $objeto = new TP1_Control7();
    $respuesta = $objeto->Cuenta($datos);
    echo $respuesta;


    echo "<br><br><a href='http://localhost/pwd_proyectos/TP-PWD/View/TP1_7/index.php'>
            Volver a la pagina anterior</a>"; //NO puede haber echos en las clases
    ?>
</div>

<?php
require_once("../Structure/footer.php");
?>
