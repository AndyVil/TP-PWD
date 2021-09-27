$(document).ready(function () {
	//Esto es cuando carga el documento, entonces ya esta listo para ejecutar script
	console.log('El documento está cargado');

	//Escucha la accion del boton
	$('#btn-form').click(function (a) {
		a.preventDefault(); //Previene que se recargue la pagina

		let comprobacion = []; //Serializamos todos los campos del form dinámicamente
		comprobacion = $('#TP2_4').serializeArray(); //Convierte todos los datos del formulario en array
		//Por defecto la validación es 1
		let valido = 1;
		let msj = '';

		//Recorremos todos los campos del formulario
		$.each(comprobacion, function (index, value) {
			//Si uno de los valores no cumple la condicion pasamos la validación a 0
			if (value.value == '') valido = 0; //"" o vacio
			msj = '<p class=aviso>Campos incompletos</p>';
		});

		//Valores de formulario
		const year = $('#year').val();
		const duration = $('#duration').val();
		const sinopsis = $('#sinopsis').val();

		//Año maximo 4 caracteres, solo numeros, Duracion 3 numeros maximo, todos los campos obligatorios
		const yearValidate = !(year.length < 5 && !isNaN(year));
		const durationValidate = !(duration.length < 4);
		const emptyYear = (year != ''); //Este es distinto de vacio porque sino, cuando no llene el formulario, va a tirar ese error en vez de el de campos incompletos
		const emptyDur = (duration != ''); //Este es distinto de vacio porque sino, cuando no llene el formulario, va a tirar ese error en vez de el de campos incompletos
		const emptySinop = (sinopsis == '');
		let old = $('.old').is(':checked') == false;
		console.log(old);


		if (emptySinop || old) {//Sinopsis vacia y radio sin seleccionar
			msj = '<p class=aviso>Campos incompletos</p>';
			valido = 0;
		}
		if (durationValidate && emptyDur) {//Duracion no vacia pero invalida
			msj =
				'<p class=aviso>Duracion invalida (Solo se permite 3 numeros como maximo)</p>';
			valido = 0;
		}
		if (yearValidate && emptyYear) {//Año no vacio pero invalido
			msj =
				'<p class=aviso>Año invalido (Solo se permite 4 caracteres de tipo numero)</p>';
			valido = 0;
		}

		//Si la validación es 0 no enviamos el form y mostramos un mensaje
		if (valido == 0) {
			$('p.aviso').remove(); //Evita que se repita el append
			$('form').append(msj);
		} else {
			//Si la validación es 1  enviamos el form
			const formulario = $('#TP2_4');
			formulario.attr('action', 'action.php'); //Si es correcto enviar el formulario manipulando el action
			formulario.submit(); //Envia el formulario
		}
		console.log('Final de la comprobacion');
	});

	//El callback es una funcion que puedo reutilziar en dos metodos de manipulacion del DOM para no repetir codigo
	let callback = function () {
		let value = $('#duration').val();
		let msj = '<p class=aviso>La duracion no puede ser menor a 1</p>';
		if (value < 1) {
			$('#duration').val('');
			$('p.aviso').remove();
			$('form').append(msj);
		} else {
			$('p.aviso').remove();
		}
	};

	//Nuevo evento para cada vez que pulsamos una tecla hasta tener 8 caracteres
	$('#duration').keypress(callback);
	$('#duration').click(callback);
});
