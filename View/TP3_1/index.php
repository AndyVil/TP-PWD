<?php
$title = "TP3_1 index";
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


    <h1> Este es el cuerpo </h1>
    <h1> Subir archivos </h1>

    <!-- Formulario -->
    <form action="" method="GET" name="TP3_1" id="TP3_1">


        <!-- Submit y reset -->
        <br>
        <input type="submit" value="Cargar" name="btn-form" id="btn-form">
        <input type="reset" value="Borrar" name="btn-del" id="btn-del">

    </form>



</div>


<!-- Llamada al script JS -->
<script src="../JS/TP3_1main.js"></script>


<?php
//FOOTER=================================================================================
require_once("../Structure/footer.php");
?>