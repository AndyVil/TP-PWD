<?php
$title = "TP1_5 action 2";
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
        //Verificar edad mayor o menor de 18
        $datos = data_submited();
        $objeto = new TP1_Control5();


        //Obtener la respuesta
        $verificacion = $objeto->Verificar_edad($datos);
        echo $verificacion;

        //Volver a la pagina anterior
        echo "<br><br><a href='http://localhost/pwd_proyectos/TP-PWD/View/TP1_5/index.php'>
            Volver a la pagina anterior </a>"; 
    ?>


</div>


<?php
//FOOTER============================================================================
require_once("../Structure/footer.php");
?>