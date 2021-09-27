<?php
$title = "TP1_3 index";
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


    <!-- Formulario -->
    <form action="" method="POST" name="Ejer3" id="Ejer3">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <br>
        <br>
        <input type="text" name="apellido" id="apellido" placeholder="Apellido">
        <br>
        <br>
        <input type="text" name="edad" id="edad" placeholder="Edad">
        <br>
        <br>
        <input type="text" name="direccion" id="direccion" placeholder="Direccion">
        <br>
        <br>
        <!-- Submit -->
        <input type="submit" value="Enviar" name="btn-form" id="btn-form">
    </form>


</div>


<!-- Llamada al script JS -->
<script src="../JS/TP1_3main.js"></script>


<?php
//FOOTER============================================================================
require_once("../Structure/footer.php");
?>