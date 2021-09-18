$(document).ready(function () {
	//Esto es cuando carga el documento, entonces ya esta listo para ejecutar script
	console.log('El documento está cargado');

	//Escucha la accion del boton
	$('#btn-form').click(function (a) {
		a.preventDefault(); //Previene que se recargue la pagina


		let edad = $('#edad').val();
		//var estudiante = !($("#estudiante").is(':checked')); Es un ejemplo de como sacar un booleano, no necesito checkearlo
		//console.log(estudiante);
		let valido = 1;


		let edadComp = edad == '' || isNaN(edad);
		if (edadComp) valido = 0;


		//Si la validación es 0 no enviamos el form y mostramos un mensaje
		if (valido == 0) {
			$('p.aviso').remove(); //Evita que se repita el append
			$('form').append(
				'<p class=aviso>Campos incompletos, o caracter incorrecto</p>'
			);
		} else {
			//Si la validación es 1  enviamos el form
			const formulario = $('#Ejer8');
			formulario.attr('action', 'action.php'); //Si es correcto enviar el formulario manipulando el action
			formulario.submit(); //Envia el formulario
		}
		console.log('Final de la comprobacion');
	});
});
