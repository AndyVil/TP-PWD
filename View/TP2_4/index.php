<?php
$title = "TP2_4 index";
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
    <h1>Cinem@s</h1>

    <!-- Formulario -->
    <form action="" method="GET" name="TP2_4" id="TP2_4">

        <label for="title">Título</label>
        <input type="text" name="title" id="title" placeholder="Título de pelicula">

        <label for="actors">Actores</label>
        <input type="text" name="actors" id="actors" placeholder="Actores">

        <br>

        <label for="director">Director</label>
        <input type="text" name="director" id="director" placeholder="Director">

        <label for="script">Guión</label>
        <input type="text" name="script" id="script" placeholder="Guión">

        <br>

        <label for="production">Produccion</label>
        <input type="text" name="production" id="production" placeholder="Producción">

        <label for="year">Año</label>
        <input type="text" name="year" id="year" placeholder="Año">

        <br>

        <label for="nationality">Nacionalidad</label>
        <input type="text" name="nationality" id="nationality" placeholder="Nacionalidad">

        <!-- Selector de generos -->
        <label for="genres">Género</label>
        <select name="genres">
            <option value="Comedia">Comedia</option>
            <option value="Drama">Drama</option>
            <option value="Terror">Terror</option>
            <option value="Romantica">Romántica</option>
            <option value="Suspenso">Suspenso</option>
            <option value="Otra" selected>Otras</option>
        </select>

        <br>

        <label for="duration">Duración</label>
        <input type="number" name="duration" id="duration" placeholder="Duración">(Numero)

        <br>

        <!-- Radio Button para seleccionar la restriccion de edad -->
        <label for=".radio"><strong>Restricción de edad:</Strong></label>
        <!---->
        <input type="radio" name="old" id="atp" class="old" value="Apta para todo publico">
        <label for="atp">Todos los publicos</label>
        <input type="radio" name="old" id="older7" class="old" value="Mayores de 7">
        <label for="older7">Mayores de 7 años</label>
        <input type="radio" name="old" id="older18" class="old" value="Mayores de 18">
        <label for="older18">Mayores de 18 años</label>

        <br>

        <label for="sinopsis"></label>
        <textarea name="sinopsis" id="sinopsis" cols="80" rows="7" placeholder="Sinopsis"></textarea>

        <!-- Submit y reset -->
        <br>
        <input type="submit" value="Cargar" name="btn-form" id="btn-form">
        <input type="reset" value="Borrar" name="btn-del" id="btn-del">

    </form>



</div>


<!-- Llamada al script JS -->
<script src="../JS/TP2_4main.js"></script>


<?php
//FOOTER=================================================================================
require_once("../Structure/footer.php");
?>