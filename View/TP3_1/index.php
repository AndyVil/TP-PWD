<?php
$title = "TP3_1 index";
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
    <h3> Subir archivos </h3>

    <!-- Formulario -->
    <form action="" method="POST" name="TP3_1" id="TP3_1" enctype="multipart/formdata">

        <!-- Input de archivos -->
        <!-- PDF y Doc -->
        <label for="file_doc_pdf">Ingrese archivo .DOC o .PDF</label>
        <br>
        <input type="file" id="file_doc_pdf" name="file_doc_pdf">
        <br>
        <br>
        <!-- Archivos txt -->
        <label for="file_doc_pdf">Ingrese archivo .TXT</label>
        <br>
        <input type="file" id="file_txt" name="file_txt">

        <!-- Submit y reset -->
        <br>
        <br>
        <input type="submit" value="Cargar" name="btn-form" id="btn-form">

    </form>



</div>


<!-- Llamada al script JS -->
<script src="../JS/TP3_1main.js"></script>


<?php
//FOOTER=================================================================================
require_once("../Structure/footer.php");
?>