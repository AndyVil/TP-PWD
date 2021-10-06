$(document).ready(function () {
	//Esto es cuando carga el documento, entonces ya esta listo para ejecutar script
	console.log('El documento está cargado');

	//Funcion de validacion
	function validacion(msj, valido) {
		if (valido == 0) {
			//Valido 0 es que no es correcto el archivo
			$('p.aviso').remove(); //Evita que se repita el append
			$('form').append(msj);
		} else if (valido == 1) {
			//Valido 1 es que el archivo puede ser enviado al servidor
			$('p.aviso').remove(); //Evita que se repita el append
			$('form').append(msj);

			//Escucha la accion del boton
			$('#btn-form').click(function (a) {
				a.preventDefault(); //Previene que se recargue la pagina
				//Si la validación es 1  enviamos el form
				const formulario = $('#TP3_1');
				formulario.attr('action', 'action.php'); //Si es correcto enviar el formulario manipulando el action
				formulario.submit(); //Envia el formulario
				console.log('Final de la comprobacion');
			});
		}
	}


	//Escondemos los elementos
	$('#file_doc_pdf, #file_txt, #labelTxt, #labelDocPdf, #RELOAD').hide();


	//Eliminar formulario del elemento que no voy a subir y mostramos el que si vamos a subir
	$('#DOCPDF').on('click', function () {
		$('#file_txt').remove();
		$('#labelTxt').remove();
		$('#file_doc_pdf').show();
		$('#RELOAD').show();
	});

	$('#TXT').on('click', function () {
		$('#file_doc_pdf').remove();
		$('#labelDocPdf').remove();
		$('#file_txt').show();
		$('#RELOAD').show();
	});


	//Recarga la pagina para que vuelvan a cargarse los formularios eliminados
	$('#RELOAD').on('click', function(){
		location.reload();
	});//Podria simplemente esconderlos, pero por si se da la ocacion de que alteran el hide desde el navegador



	//Validar el tamaño de los archivos
	$('#file_doc_pdf').on('change', function () {
		const fileSize = this.files[0].size; //Tamaño del archivo en bytes
		const fileName = this.files[0].name; //Nombre del archivo

		const ext = fileName.split('.').pop().toLowerCase(); //Extrae la extension en un string sin .
		//console.log(ext, fileSize, fileName);

		const notEmptyForm = $('#file_doc_pdf').val() != '';
		const validSize = fileSize <= 2097152;
		const validExt = ext == 'doc' || ext == 'pdf';
		const validForm = validSize && validExt;

		let valido = '';
		let msj = '';

		if (validForm && notEmptyForm) {
			valido = 1;
			msj = '<p class=aviso>Archivo valido</p>';
		} else if (!validSize) {
			valido = 0;
			msj = '<p class=aviso>Archivo invalido: Pesa mas de 2MB</p>';
		} else if (!validExt) {
			msj =
				'<p class=aviso>Archivo invalido: Extensión incompatible, introduzca DOC o PDF</p>';
		}

		validacion(msj, valido);
	});

	$('#file_txt').on('change', function () {
		const fileName = this.files[0].name; //Nombre del archivo

		const ext = fileName.split('.').pop().toLowerCase(); //Extrae la extension en un string sin .

		const notEmptyForm = $('#file_txt').val() != '';
		const validExt = ext == 'txt';

		let valido = '';
		let msj = '';

		if (notEmptyForm && validExt) {
			valido = 1;
			msj = '<p class=aviso>Archivo valido</p>';
		} else if (!validExt) {
			valido = 0;
			msj =
				'<p class=aviso>Archivo invalido: Extensión incompatible, introduzca TXT</p>';
		}

		validacion(msj, valido);
	});
});