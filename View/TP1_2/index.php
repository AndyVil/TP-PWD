<?php
echo "<title>Ejercicio_2</title>";
require_once("../Structure/header.php");
?>

<div id="contenido" style="height: 82%; min-height:fit-content; width: 89.8%; border: 2px solid red; border-radius: 5px;margin-left:10%;">
    <h1> Este es el cuerpo </h1>

    <form action='' method='GET' name='Ejer2' id='Ejer2'>
        <p>Formulario de horarios de clase</p>
        <input class='dias' name='lunes' type='number' id='id_lunes' placeholder='Lunes entrada' />
        <input class='dias' name='lunes2' type='number' id='id_lunes2' placeholder='Lunes salida' />

        <input class='dias' name='martes' type='number' id='id_martes' placeholder='Martes entrada' />
        <input class='dias' name='martes2' type='number' id='id_martes2' placeholder='Martes salida' /> <br> <br>

        <input class='dias' name='miercoles' type='number' id='id_miercoles' placeholder='Miercoles entrada' />
        <input class='dias' name='miercoles2' type='number' id='id_miercoles2' placeholder='Miercoles salida' />

        <input class='dias' name='jueves' type='number' id='id_jueves' placeholder='Jueves entrada' />
        <input class='dias' name='jueves2' type='number' id='id_jueves2' placeholder='Jueves salida' /> <br> <br>

        <input class='dias' name='viernes' type='number' id='id_viernes' placeholder='Viernes entrada' />
        <input class='dias' name='viernes2' type='number' id='id_viernes2' placeholder='Viernes salida' />

        <input class='dias' name='sabado' type='number' id='id_sabado' placeholder='Sabado entrada' />
        <input class='dias' name='sabado2' type='number' id='id_sabado2' placeholder='Sabado salida' /> <br> <br>

        <input class='dias' name='domingo' type='number' id='id_domingo' placeholder='Domingo entrada' />
        <input class='dias' name='domingo2' type='number' id='id_domingo2' placeholder='Domingo salida' />

        <input type='submit' value='Enviar' id="btn-form" name="btn-form">

    </form>

</div>

<script src="../JS/TP1_2main.js"></script>

<?php
require_once("../Structure/footer.php");
?>