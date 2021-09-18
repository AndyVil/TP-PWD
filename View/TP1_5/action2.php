<?php
require_once("../Structure/header.php");
?>

<div id="contenido" style="height: 82%; min-height:fit-content; width: 89.8%; border: 2px solid red; border-radius: 5px;margin-left:10%;">
    <?php
    //Verificar edad mayor o menor de 18
        $datos = data_submited();
    //Objeto
        $objeto = new Control_eje4();
        $verificacion = $objeto->Verificar_edad($datos);
        echo $verificacion;


    echo "<br><br><a href='http://localhost/pwd_proyectos/TP-PWD/View/TP1_5/index.php'>
            Volver a la pagina anterior </a>"; //NO puede haber echos en las clases
    ?>
</div>

<?php
require_once("../Structure/footer.php");
?>