<?php
echo "<title>Ejercicio_8</title>";
require_once("../Estructura/cabecera.php");
?>

<div id="contenido" style="height: 500px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;">
    <h1> Este es el cuerpo </h1>

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
        <input type="submit" value="Enviar" name="btn-form" id="btn-form">
        <input type="reset" value="Borrar Formulario" name="reset" id="resetear">
    </form>

</div>

<script src="main.js"></script>

<?php
require_once("../Estructura/pie.php");
?>