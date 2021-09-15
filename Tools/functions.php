<?php

/**
 * Funciones para el funcionamiento de GET, POST y las clases.
 * data_submitted, es para que envie lo que envie, no importa porque lo pasa a arreglo
 * spl_autoload_register es para...
 * @author Villarruel Lucas Andres 
 */


function data_submited() {
	$_AAux= array();
    if (!empty($_POST)) 
    	$_AAux =$_POST;
    else 
		if(!empty($_GET)) {
            $_AAux =$_GET;
		}
	if (count($_AAux)){
		foreach ($_AAux as $indice => $valor) {
				if ($valor=="")
                	$_AAux[$indice] = 'null'	;
			}
	}
	return $_AAux;
}

//Busca las clases en los directorios las clases a invocar, tanto en modelo como en control
//Evita hacer un include para cada clase/objeto
spl_autoload_register(function ($clase) {
	echo "Se cargo la clase:  ".$clase." <br><br>" ;
	$directorys = array(
		$GLOBALS['ROOT'].'Model/',
		$GLOBALS['ROOT'].'Controller/',
	);
    //print_r($directorys) ;
	foreach($directorys as $directory){
	  if(file_exists($directory.$clase . '.php')){  
			 //echo "se incluyo".$directory. $class_name . '.php';
			require_once($directory.$clase.'.php');
			return;
		}           
	}
});
?>