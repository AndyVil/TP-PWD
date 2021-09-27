<?php
$title = "TP1_8 index";
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


    <H1> Este es el cuerpo </H1>
    <H1>Cine Cinemas</H1>

    
    <!-- Formulario -->
    <form action="" method="GET" name="Ejer8" id="Ejer8">
        <label for="edad">Ingrese la edad: </label>
        <input type="number" id="edad" name="edad" placeholder="Ingrese la edad">
        <br>
        <br>
        <label for="estudiante">Soy estudiante</label>
        <input type="checkbox" id="estudiante" name="estudiante" value="1">
        <br>
        <br>
        <!-- Submit y reset -->
        <input type="submit" value="Enviar" name="btn-form" id="btn-form">
        <input type="reset" value="Borrar Formulario" name="reset" id="resetear">
    </form>


</div>


<!-- Llamada al script JS -->
<script src="../JS/TP1_8main.js"></script>


<?php
//FOOTER=================================================================================
require_once("../Structure/footer.php");
?>