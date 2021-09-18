//Jquery
//$("selector").accion

//A diferencia de el php, que puede validar formularios luego de enviar, el js puede hacerlo en el momento. manipulando el dom
//El js, se vincula el body, porque es donde tenemos el fomulario
$(document).ready(function(){//Esto es cuando carga el documento, entonces ya esta listo para ejecutar script
console.log ("El documento está cargado");

    function funComprobacion(parComprobacion) {
    //Comprueba que el formulario no este vacios o contenga datos difernetes a numeros    
        if (parComprobacion == "") {
            $("p.aviso").remove();//Evita que se repita el append
            $("form").append("<p class=aviso>El numero no puede ser nulo</p>");
        } 
        if (isNaN(parComprobacion)) {
            $("p.aviso").remove();
            $("form").append("<p class=aviso>No puede ingresar otro caracter que no sea un numero</p>");
        }
        if (parComprobacion !== "" && !isNaN(parComprobacion)){
            const formulario = $('#Ejer1');
            formulario.attr("action", 'action.php');//Si es correcto enviar el formulario manipulando el action
            formulario.submit();//Envia el formulario
        }
    }

    //Escucha la accion del boton
    $("#btn-form").click(function () {
        event.preventDefault();//Previene que se recargue la pagina
        const comprobacion = ($("#numero").val());//Toma el valor del formulario
        
        funComprobacion(comprobacion);
    });


    










});
