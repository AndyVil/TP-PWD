<?php
require_once("../Structure/header.php");
?>

<div id="contenido" style="height: 400px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;">
    <?php
    //Verificar edad mayor o menor de 18
        $datos = data_submited();
    //Objeto
        $objeto = new TP1_Control6();
        $verificacion = $objeto->Verificar_edad($datos);
        echo $verificacion;


    echo "<br><br><a href='http://localhost/pwd_proyectos/TP-PWD/View/TP1_6/index.php'>
            Volver a la pagina anterior </a>"; //NO puede haber echos en las clases
    ?>
</div>

<?php
require_once("../Structure/footer.php");
?>