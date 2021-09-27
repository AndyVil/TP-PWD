<?php
$title = "TP1_1 index";
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


    <!-- Formualario -->
    <form action="" method="GET" id="Ejer1" class="Ejer1" name="Ejer1">
        <label for="Ejer1">Inserte un numero</label>
        <br>
        <input type="text" id="numero" class="numero" name="numero" placeholder="Inserte un numero">
        <!-- Submit -->
        <input type="submit" id="btn-form" name="btn-form" value="Enviar">
    </form>


</div>


<!-- Llamada al script JS -->
<script src="../JS/TP1_1main.js"></script>


<?php
//FOOTER============================================================================
require_once("../Structure/footer.php");
?>