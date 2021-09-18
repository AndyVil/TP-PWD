$(document).ready(function () {
	//Esto es cuando carga el documento, entonces ya esta listo para ejecutar script
	console.log('El documento está cargado');

	//Escucha la accion del boton
	$('#btn-form').click(function (a) {
		a.preventDefault(); //Previene que se recargue la pagina


		let comprobacion = []; //Serializamos todos los campos del form dinámicamente
		comprobacion = $('#Ejer6').serializeArray(); //Convierte todos los datos del formulario en array
		//Por defecto la validación es 1
		let valido = 1;
		console.log('Sirve');


		//Recorremos todos los campos del formulario
		$.each(comprobacion, function (index, value) {
			//Si uno de los valores no cumple la condicion pasamos la validación a 0
			if (value.value == '') valido = 0;
			//console.log(value.value);
		});
		let edad = isNaN($('#edad').val());
		let estudios = $('.estudios').is(':checked') == false;
		let deporte = $('.deporte').is(':checked') == false; //El metodo .is es mejor que el attr, o el prop, porque me toma todo el conjunto de
		//Checkboxes o radios, para saber si almenos un esta seleccionado
		//console.log($(".estudios").is(':checked'));
		//console.log("edad :"+edad+ " estudios: "+estudios+ " deporte: "+deporte);


		if (edad || estudios || deporte) {
			valido = 0;
		}
		//console.log(valido)


		//Si la validación es 0 no enviamos el form y mostramos un mensaje
		if (valido == 0) {
			$('p.aviso').remove(); //Evita que se repita el append
			$('form').append('<p class=aviso>Campos incompletos o edad incompatible</p>');
		} else {
			//Si la validación es 1  enviamos el form
			const formulario = $('#Ejer6');
			formulario.attr('action', 'action.php'); //Si es correcto enviar el formulario manipulando el action
			formulario.submit(); //Envia el formulario
		}
		console.log('Final de la comprobacion');
	});
});
