$(document).ready(function () {
	//Esto es cuando carga el documento, entonces ya esta listo para ejecutar script
	console.log('El documento está cargado');


	//Escucha la accion del boton
	$('#btn-form').click(function (a) {
		a.preventDefault(); //Previene que se recargue la pagina

		let comprobacion = []; //Serializamos todos los campos del form dinámicamente
		comprobacion = $('#Ejer2').serializeArray(); //Convierte todos los datos del formulario en array
		//Por defecto la validación es 1
		let valido = 1; // Probar o volver a poner var


		//Recorremos todos los campos del formulario
		$.each(comprobacion, function (index, value) {
			//Si uno de los valores no cumple la condicion pasamos la validación a 0
			if (isNaN(value.value) || value.value < 0) valido = 0;
			//console.log(value.value);
			if (value.value > 25) valido = 0;
		});

        
		//Si la validación es 0 no enviamos el form y mostramos un mensaje
		if (valido == 0) {
			$('p.aviso').remove(); //Evita que se repita el append
			$('form').append(
				'<p class=aviso>No puede haber numeros menores a 0, mayores a 24, ni otro tipo de caracter que no sea numerico</p>'
			);
		} else {
			//Si la validación es 1  enviamos el form
			const formulario = $('#Ejer2');
			formulario.attr('action', 'action.php'); //Si es correcto enviar el formulario manipulando el action
			formulario.submit(); //Envia el formulario
		}
		console.log('Final de la comprobacion');
	});
});
