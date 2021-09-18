//ADICIONAL: Me gustaria hacer una comprobacion de espacios, que no puedas usar espacios en el usuario
$(document).ready(function () {
	//Esto es cuando carga el documento, entonces ya esta listo para ejecutar script
	console.log('El documento está cargado');

	//Escucha la accion del boton
	$('#btn-form').click(function (a) {
		a.preventDefault(); //Previene que se recargue la pagina
		
		//Valores de formulario
		const user = $('#usr').val();
		const pass = $('#pss').val();

		//No estar vacio, 8 caracteres, no igual usr a pss, y tener letras y numeros
		const empyUser = (user == '');
		const empyPass = (pass == '');
		const equal = (user == pass);
		const newEmpy = (!empyPass && !empyUser);
		const reg = (/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/); //Mínimo ocho caracteres, al menos una letra y un número
		const contains = reg.test(pass);
		//console.log (contains);


		let valido = 1;
		let msj = '';
		if (empyPass || empyUser) {
			msj = '<p class=aviso>Campos incompletos</p>';
			valido = 0;
		}
		if (equal && newEmpy) {
			msj = '<p class=aviso>El usuario y contraseña no pueden ser iguales</p>';
			valido = 0;
		}
		if (!contains) {
			msj =
				'<p class=aviso>La contraseña debe contener al menos una letra y un numero, ademas de ser de mas de 8 caracteres</p>';
			valido = 0;
		}


		//Si la validación es 0 no enviamos el form y mostramos un mensaje
		if (valido == 0) {
			$('p.aviso').remove(); //Evita que se repita el append
			$('form').append(msj);
		} else {
			//Si la validación es 1  enviamos el form
			const formulario = $('#TP2login');
			formulario.attr('action', 'action.php'); //Si es correcto enviar el formulario manipulando el action
			formulario.submit(); //Envia el formulario
		}
		console.log('Final de la comprobacion');
	});

    //nuevo evento para cada vez que pulsamos una tecla hasta tener 8 caracteres
	$('#pss').keypress(function(){
		let str = $('#pss').val();
		let msj = '<p class=aviso>La contraseña debe tener mas de 8 caracteres</p>';
		//console.log('Funciona, valor de str: '+str);
		if (str.length < 8) {
			$('p.aviso').remove();
			$('form').append(msj);
		} else {
			$('p.aviso').remove();
		}

	});
});
