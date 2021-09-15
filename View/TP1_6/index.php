<?php
echo "<title>Ejercicio_6</title>";
require_once("../Structure/header.php");
?>

<div id="contenido" style="height: 500px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;">
    <h1> Este es el cuerpo </h1>

    <form action="" method="POST" name="Ejer6" id="Ejer6">
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
        <input type="text" name="gender" id="gender" placeholder="Ingrese su sexo">

        <p name="radios" id="radios">Ingrese nivel de estudios que posee:</p>

        <input type="radio" name="estudios" class="estudios" id="no_tiene" value="0">
        <label for="no_tiene">No tiene</label>
        <br>
        <input type="radio" name="estudios" class="estudios" id="primarios" value="1">
        <label for="primarias">Estudios Primarios</label>
        <br>
        <input type="radio" name="estudios" class="estudios" id="secundarios" value="2">
        <label for="secundarios">Estudios secundarios</label>

        <p name='chekboxDep' id='chekboxDep'>Deportes que practica:</p>

        <input type="checkbox" name='deporte[]' class="deporte" id='futbol' value='Futbol'>
        <label for="futbol">Futbol</label>
        <input type="checkbox" name='deporte[]' class="deporte" id='basket' value='Basket'>
        <label for="basket">Basket</label>
        <input type="checkbox" name='deporte[]' class="deporte" id='voley' value='Voley'>
        <label for="voley">Voley</label>
        <input type="checkbox" name='deporte[]' class="deporte" id='tennis' value='Tennis'>
        <label for="tenis">Tenis</label>

        <br>
        <br>
        <input type="submit" value="Enviar" name="btn-form" id="btn-form">
    </form>

</div>

<script src="../JS/TP1_6main.js"></script>

<?php
require_once("../Structure/footer.php");
?>