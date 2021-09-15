<title><?= "Ejercicio_2" ?></title>
<?php
require_once("../Estructura/cabecera.php");
?>

<div id="contenido" style="height: 400px; width: 89%; border: 2px solid red; border-radius: 5px;margin-left:10.5%;">
    <h1> Este es el cuerpo </h1>

    <form action='' method='GET' name='Form_eje2' id='Form_eje2'>
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

        <input type='submit' value='Enviar' id="btn-form2" name="btn-form2">

    </form>

</div>

<script src="main.js"></script>

<?php
require_once("../Estructura/pie.php");
?>