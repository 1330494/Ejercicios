<?php
// Archivo con las utilidades de la base de datos
include_once 'db/db_utilities.php';
//Arrays que guardaran los futbolistas y basquetbolistas obtenidos de la base de datos.
$futbolistas = getFutbolistas(); // Obtenemos los futbolistas
$basquetbolistas = getBasquetbolistas(); // Obtenemos los basquetbolistas

// Funcion que permite guardar un nuevo registro a la base datos
function guardar($type_player,$datos)
{
	// En caso de que sea tipo basquetbolista
	if ($type_player=='Basquetbolista') {
		insertBasquetbolista($datos);
	}else if ($type_player=='Futbolista') {
		// En caso de que sea tipo futbolista
		insertFutbolista($datos);
	}else{
		echo "<script type='javascript'>alert('Error al selecionar tipo.');<script>";
	}
}

// Metodo para limpiar un string que contenga caracteres especiales
function clean_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
