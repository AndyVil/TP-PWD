<?php
$title = "TP1_5 action";
echo "<title>" . $title . "</title>";
require_once("../Structure/header.php");
//HEADER============================================================================
?>


<!--BODY============================================================================-->
<div id="contenido" style="height: 82%; 
    min-height:fit-content; 
    width: 89.8%; 
    border: 2px solid red; 
    border-radius: 5px;
    margin-left:10%;">


    <?php
        $datos = data_submited(); //Del archivo funciones   
        $objeto = new TP1_Control5();


        //Obtener la respuesta
        $respuesta = $objeto->Ver_Informacion($datos);
        echo $respuesta;

        //Objeto para ver la edad y enviarla por URL a la siguiente pagina de comprobacion
        $objeto_edad = new TP1_Control5();
        $edad = $objeto->Ver_edad($datos);
        echo "<br><br><a href='action2.php?edad=" . $edad . "'>Verificar si es mayor de edad</a><br><br>";


        //Volver a la pagina anterior
        echo "<br><br><a href='http://localhost/pwd_proyectos/TP-PWD/View/TP1_5/index.php'>
            Volver a la pagina anterior</a>";
    ?>


</div>


<?php
//FOOTER============================================================================
require_once("../Structure/footer.php");
?>