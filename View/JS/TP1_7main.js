//Jquery
//$("selector").accion

//A diferencia de el php, que puede validar formularios luego de enviar, el js puede hacerlo en el momento. manipulando el dom
//El js, se vincula el body, porque es donde tenemos el fomulario
$(document).ready(function(){//Esto es cuando carga el documento, entonces ya esta listo para ejecutar script
console.log ("El documento está cargado");

    //Escucha la accion del boton
    $("#btn-form").click(function () {
        event.preventDefault();//Previene que se recargue la pagina
 
        var numero1 = $("#numero1").val();
        var numero2 = $("#numero2").val();
        //console.log(numero1);
        var valido = 1;

        var comp1 = ((numero1 == "")||isNaN(numero1));
        var comp2 = ((numero2 == "") || isNaN(numero2));
        //console.log(comp1+" "+comp2);
        if(comp1 || comp2) valido = 0;

        
        //Si la validación es 0 no enviamos el form y mostramos un mensaje
        if (valido == 0){
            $("p.aviso").remove();//Evita que se repita el append
            $("form").append("<p class=aviso>Campos incompletos, o caracter incorrecto</p>");
        } else {//Si la validación es 1  enviamos el form
            var formulario = $("#Ejer7");
            formulario.attr("action", 'action.php');//Si es correcto enviar el formulario manipulando el action
            formulario.submit();//Envia el formulario
        }
        console.log("Final de la comprobacion");
    });
});
