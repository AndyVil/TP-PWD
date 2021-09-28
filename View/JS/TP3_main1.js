$(document).ready(function () {
	//Esto es cuando carga el documento, entonces ya esta listo para ejecutar script
	console.log('El documento está cargado');

	//Escucha la accion del boton
	$('#btn-form').click(function (a) {
		a.preventDefault(); //Previene que se recargue la pagina
        
        let fileDocPdf = $('#file_doc_pdf').val();
        let fileTxt = $('#file_txt').val();

        console.log(fileTxt);





    });
});