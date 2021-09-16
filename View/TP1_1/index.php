<?php
echo "<title>Ejercicio_1</title>";
require_once("../Structure/header.php");
?>

<div id="contenido" style="height: 400px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;">
    <h1> Este es el cuerpo </h1>

    <form action="" method="GET" id="Ejer1" class="Ejer1" name="Ejer1">
        <label for="Ejer1">Inserte un numero</label>
        <br>
        <input type="text" id="numero" class="numero" name="numero" placeholder="Inserte un numero">
        <!-- <button type="submit" id="btn-form1" name="btn-form1">Enviar</button> -->
        <input type="submit" id="btn-form" name="btn-form" value="Enviar">
    </form>

</div>

<script src="../JS/TP1_1main.js"></script>

<?php
require_once("../Structure/footer.php");
?>