$(document).ready(function () {
	//Esto es cuando carga el documento, entonces ya esta listo para ejecutar script
	console.log('El documento está cargado');

	//Escucha la accion del boton
	$('#btn-form').click(function (a) {
		a.preventDefault(); //Previene que se recargue la pagina


		let numero1 = $('#numero1').val();
		let numero2 = $('#numero2').val();
		//console.log(numero1);
		let valido = 1;


		let comp1 = numero1 == '' || isNaN(numero1);
		let comp2 = numero2 == '' || isNaN(numero2);
		//console.log(comp1+" "+comp2);
		if (comp1 || comp2) valido = 0;

        
		//Si la validación es 0 no enviamos el form y mostramos un mensaje
		if (valido == 0) {
			$('p.aviso').remove(); //Evita que se repita el append
			$('form').append(
				'<p class=aviso>Campos incompletos, o caracter incorrecto</p>'
			);
		} else {
			//Si la validación es 1  enviamos el form
			const formulario = $('#Ejer7');
			formulario.attr('action', 'action.php'); //Si es correcto enviar el formulario manipulando el action
			formulario.submit(); //Envia el formulario
		}
		console.log('Final de la comprobacion');
	});
});
