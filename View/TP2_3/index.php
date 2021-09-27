<?php
$title = "TP2_3 index";
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
    <H1>Login</H1>

    
    <div>
        <div class="container">
            <div class="row" name="divTest">
                <div class="row justify-content-center">
                    <div class="p-3 mb-2 bg-secondary">
                        <div class="p-3 mb-2 bg-light rounded">
                            <br>
                            <p class="h5 text-center">Member Login</p>
                            <br>
                            <!-- Formulario -->
                            <form action="action.php" method="POST" name="TP2login" id="TP2login">
                                <!-- <label for="usr">Ingrese su Usuario: </label> -->
                                <input type="text" id="usr" name="usr" placeholder="Ingrese su usuario">
                                <br>
                                <br>
                                <!-- <label for='pss'>Ingrese su contraseña: </label> -->
                                <input type="password" name="pss" id="pss" placeholder="Ingrese su contraseña">
                                <br>
                                <br>
                                <!-- Submit y reset -->
                                <input type="submit" value="Login" name="btn-form" id="btn-form" class="btn btn-success btn-lg btn-block">
                                <!-- <input type="reset" value="Borrar datos" name="reset" id="resetear"> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


<!-- Llamada al script JS -->
<script src="../JS/TP2_3main.js"></script>


<?php
//FOOTER=================================================================================
require_once("../Structure/footer.php");
?>