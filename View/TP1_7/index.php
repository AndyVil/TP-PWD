<?php
echo "<title>Ejercicio_7</title>";
require_once("../Estructura/cabecera.php");
?>

<div id="contenido" style="height: 500px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;">
    <h1> Este es el cuerpo </h1>

    <form action="" method="POST" name="Ejer7" id="Ejer7">

        <input type='text' id='numero1' name='numero1' placeholder='EJ: 2'>
        <label for='numero1'></label>
        <br>
        <select name='operacion' id='select' class="select">
            <option value='+'>SUMAR</option>
            <option value='-'>RESTAR</option>
            <option value='*'>MULTIPLICAR</option>
            <option value='/'>DIVIDIR</option>
        </select>
        <br>
        <input type='text' id='numero2' name='numero2' placeholder='EJ: 6'>
        <label for='numero2'></label>
        <br>
        <br>
        <input type="submit" name="btn-form" id="btn-form" value="resultado">
    </form>

</div>

<script src="main.js"></script>

<?php
require_once("../Estructura/pie.php");
?>