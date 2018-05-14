<?php 

//Incluimos el archivo para la conexion a la base de datos.
include_once '../conexion.php';

// Obtenemos los resultados por medio de funciones y asignamos a un 
// array asociativo 
$DB_DATA['USERS'] = getTotalUsuarios();;
$DB_DATA['USER_TYPES'] = getTiposUsuarios();
$DB_DATA['STATUS'] = getTiposStatus();
$DB_DATA['ACCESS'] = getTotalLoggs();
$DB_DATA['ACTIVES'] = getUsuariosActivos();
$DB_DATA['INACTIVES'] = getUsuariosInactivos();

// Funcion que me permite obtener el total de usuarios registrados en la base de 
// datos.
function getTotalUsuarios()
{
	$db = getDBConnection(); // Obtenemos la conexion
  	$stmt = $db->prepare('SELECT COUNT(*) FROM users'); // Preparamos la consulta
  	$stmt->execute(); // Realizamos el query a la BD
  	$r = $stmt->fetch(PDO::FETCH_ASSOC); // Obtenemos el resultado en un array asociativo.
  	if ($r) {
  		return $r['COUNT(*)']; // Devolvemos el total
  	}
  	closeDBConnection($db); // Cerramos la conexion a la BD.
}

// Funcion que me permite obtener el total de tipos de usuarios en la base de 
// datos.
function getTiposUsuarios()
{
	$db = getDBConnection(); // Obtenemos la conexion
  	$stmt = $db->prepare('SELECT COUNT(*) FROM user_types'); // Preparamos la consulta
  	$stmt->execute(); // Realizamos el query a la BD
  	$r = $stmt->fetch(PDO::FETCH_ASSOC); // Obtenemos el resultado en un array asociativo.
  	if ($r) {
  		return $r['COUNT(*)']; // Devolvemos el total
  	}
  	closeDBConnection($db); // Cerramos la conexion a la BD.
}

// Funcion que me permite obtener el total de accesos de los usuarios en la base de 
// datos.
function getTotalLoggs()
{
	$db = getDBConnection(); // Obtenemos la conexion
  	$stmt = $db->prepare('SELECT COUNT(*) FROM user_logs'); // Preparamos la consulta
  	$stmt->execute(); // Realizamos el query a la BD
  	$r = $stmt->fetch(PDO::FETCH_ASSOC); // Obtenemos el resultado en un array asociativo.
  	if ($r) {
  		return $r['COUNT(*)']; // Devolvemos el total
  	}
  	closeDBConnection($db); // Cerramos la conexion a la BD.
}

// Funcion que me permite obtener el total de usuarios activos en la base de 
// datos.
function getUsuariosActivos() 
{
	$db = getDBConnection(); // Obtenemos la conexion
  	$stmt = $db->prepare('SELECT COUNT(*) FROM users WHERE status_id=2'); // Preparamos la consulta
  	$stmt->execute(); // Realizamos el query a la BD
  	$r = $stmt->fetch(PDO::FETCH_ASSOC); // Obtenemos el resultado en un array asociativo.
  	if ($r) {
  		return $r['COUNT(*)']; // Devolvemos el total
  	}
  	closeDBConnection($db); // Cerramos la conexion a la BD.
}

// Funcion que me permite obtener el total de usuarios inactivos en la base de 
// datos.
function getUsuariosInactivos()
{
	$db = getDBConnection(); // Obtenemos la conexion
  	$stmt = $db->prepare('SELECT COUNT(*) FROM users WHERE status_id=1'); // Preparamos la consulta
  	$stmt->execute(); // Realizamos el query a la BD
  	$r = $stmt->fetch(PDO::FETCH_ASSOC); // Obtenemos el resultado en un array asociativo.
  	if ($r) {
  		return $r['COUNT(*)']; // Devolvemos el total
  	}
  	closeDBConnection($db); // Cerramos la conexion a la BD.
}

function getTiposStatus()
{
	$db = getDBConnection(); // Obtenemos la conexion
  	$stmt = $db->prepare('SELECT COUNT(*) FROM status'); // Preparamos la consulta
  	$stmt->execute(); // Realizamos el query a la BD
  	$r = $stmt->fetch(PDO::FETCH_ASSOC); // Obtenemos el resultado en un array asociativo.
  	if ($r) {
  		return $r['COUNT(*)']; // Devolvemos el total
  	}
  	closeDBConnection($db); // Cerramos la conexion a la BD.
}

?>