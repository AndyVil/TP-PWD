<?php
echo "<title>Ejercicio_3</title>";
require_once("../Structure/header.php");
?>

<div id="contenido" style="height: 400px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;">
    <h1> Este es el cuerpo </h1>

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
        <input type="submit" value="Enviar" name="btn-form" id="btn-form">
    </form>
</div>

<script src="../JS/TP1_3main.js"></script>

<?php
require_once("../Structure/footer.php");
?>