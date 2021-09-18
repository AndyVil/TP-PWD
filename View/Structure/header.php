<?php
/**
 * Proyecto progresivo de la materia Programacion Web Dinamica
 * @author Villarruel Lucas Andres - FAI1707 - Universidad del Nacional Comahue
 * @AndyVil at Github
 * https://github.com/AndyVil/TP-PWD
 */
?>


<!DOCTYPE html>
<!--HEADER================================================================================-->
<html lang="en">

<!--HEAD-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./../../Tools/jquery-3.6.0.min.js"></script>

    <title></title>
</head>


<!--BODY==================================================================================-->
<body>

    <!--Es el inicio de body y la cabecera-->
    <?php
    //LLAMADO A CONFIG==================================================================
    require_once("../../config.php");
    ?>


    <!--CABECERA DIV-->
    <div style="height: 9%; width: 99.8%; border: 2px solid red; border-radius: 5px;">
        <h1>Este es la cabecera</h1>
    </div>


    <?php
    //LLAMADO A LATERAL(SIDE)===========================================================
    require_once("side.php");
    ?>