<?php
$title = "TP1_7 action";
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
        $objeto = new TP1_Control7();

        //Obtenemos la respuesta
        $respuesta = $objeto->Cuenta($datos);
        echo $respuesta;


        //Volver a la pagina anterior
        echo "<br><br><a href='http://localhost/pwd_proyectos/TP-PWD/View/TP1_7/index.php'>
            Volver a la pagina anterior</a>";
    ?>


</div>


<?php
//FOOTER============================================================================
require_once("../Structure/footer.php");
?>