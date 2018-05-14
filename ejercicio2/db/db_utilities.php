<?php 

include_once '../conexion.php';

// Metodo para agregar un nuevo futbolista a la base de datos
function insertFutbolista($futbolista)
{
	$con = getDBConnection();
	$stmt = $con->prepare("INSERT INTO futbolistas (id , nombre, posicion, carrera, email) VALUES (:id, :nombre, :posicion, :carrera, :email)");
	$stmt->bindParam(':id', $futbolista['Id']);
	$stmt->bindParam(':nombre', $futbolista['Nombre']);
	$stmt->bindParam(':posicion', $futbolista['Posicion']);
	$stmt->bindParam(':carrera', $futbolista['Carrera']);
	$stmt->bindParam(':email', $futbolista['Email']);
	$stmt->execute();

	
}

// Metodo para modificar el registro de un futbolista de la base de datos
function modifyFutbolista($futbolista)
{
	if (count($futbolista)==5) {
		$con = getDBConnection();
		$sql = "UPDATE futbolistas SET nombre = :nombre, posicion = :posicion, carrera = :carrera, email = :email WHERE id = :id";
		$stmt = $con->prepare($sql);
		$stmt->bindParam(':id', $futbolista['Id']);
		$stmt->bindParam(':nombre', $futbolista['Nombre']);
		$stmt->bindParam(':posicion', $futbolista['Posicion']);
		$stmt->bindParam(':carrera', $futbolista['Carrera']);
		$stmt->bindParam(':email', $futbolista['Email']);
		$stmt->execute();
	}else{
		// Editamos primero el Id
		$con = getDBConnection();
		$sql = "UPDATE futbolistas SET id = :id WHERE id = :last";
		$stmt = $con->prepare($sql);
		$stmt->bindParam(':id', $futbolista['Id']);
		$stmt->bindParam(':last', $futbolista['Last']);
		$stmt->execute();
		// Despues modificamos los demas valores
		$con = getDBConnection();
		$sql = "UPDATE futbolistas SET nombre = :nombre, posicion = :posicion, carrera = :carrera, email = :email WHERE id = :id";
		$stmt = $con->prepare($sql);
		$stmt->bindParam(':id', $futbolista['Id']);
		$stmt->bindParam(':nombre', $futbolista['Nombre']);
		$stmt->bindParam(':posicion', $futbolista['Posicion']);
		$stmt->bindParam(':carrera', $futbolista['Carrera']);
		$stmt->bindParam(':email', $futbolista['Email']);
		$stmt->execute();
	}
}

// Metodo para eliminar futbolista de la base de datos
// Recibe la id como parametro requerido
function deleteFutbolista($id)
{
	$con = getDBConnection();
	$sql = "DELETE FROM futbolistas WHERE id = :id";
	$stmt = $con->prepare($sql);
	$stmt->bindParam(':id', $id);
	$stmt->execute();
}

// Metodo para agregar un nuevo basquetbolista a la base de datos
function insertBasquetbolista($basquetbolista)
{
	$con = getDBConnection();
	$stmt = $con->prepare("INSERT INTO basquetbolistas (id , nombre, posicion, carrera, email) VALUES (:id, :nombre, :posicion, :carrera, :email)");
	$stmt->bindParam(':id', $basquetbolista['Id']);
	$stmt->bindParam(':nombre', $basquetbolista['Nombre']);
	$stmt->bindParam(':posicion', $basquetbolista['Posicion']);
	$stmt->bindParam(':carrera', $basquetbolista['Carrera']);
	$stmt->bindParam(':email', $basquetbolista['Email']);
	$stmt->execute();
	
}

// Metodo para modificar el registro de un basquetbolista de la base de datos
function modifyBasquetbolista($basquetbolista)
{
	if (count($basquetbolista)==5) {
		$con = getDBConnection();
		$sql = "UPDATE basquetbolistas SET nombre = :nombre, posicion = :posicion, carrera = :carrera, email = :email WHERE id = :id";
		$stmt = $con->prepare($sql);
		$stmt->bindParam(':id', $basquetbolista['Id']);
		$stmt->bindParam(':nombre', $basquetbolista['Nombre']);
		$stmt->bindParam(':posicion', $basquetbolista['Posicion']);
		$stmt->bindParam(':carrera', $basquetbolista['Carrera']);
		$stmt->bindParam(':email', $basquetbolista['Email']);
		$stmt->execute();
	}else{
		// Editamos primero el Id
		$con = getDBConnection();
		$sql = "UPDATE basquetbolistas SET id = :id WHERE id = :last";
		$stmt = $con->prepare($sql);
		$stmt->bindParam(':id', $basquetbolista['Id']);
		$stmt->bindParam(':last', $basquetbolista['Last']);
		$stmt->execute();
		// Despues modificamos los demas valores
		$con = getDBConnection();
		$sql = "UPDATE basquetbolistas SET nombre = :nombre, posicion = :posicion, carrera = :carrera, email = :email WHERE id = :id";
		$stmt = $con->prepare($sql);
		$stmt->bindParam(':id', $basquetbolista['Id']);
		$stmt->bindParam(':nombre', $basquetbolista['Nombre']);
		$stmt->bindParam(':posicion', $basquetbolista['Posicion']);
		$stmt->bindParam(':carrera', $basquetbolista['Carrera']);
		$stmt->bindParam(':email', $basquetbolista['Email']);
		$stmt->execute();
	}
}

// Metodo para eliminar basquetbolista de la base de datos
// Recibe la id como parametro requerido
function deleteBasquetbolista($id)
{
	$con = getDBConnection();
	$sql = "DELETE FROM basquetbolistas WHERE id = :id";
	$stmt = $con->prepare($sql);
	$stmt->bindParam(':id', $id);
	$stmt->execute();
}

// Funcion para devolver todos los basquetbolistas de la base de datos
function getBasquetbolistas()
{
	$con = getDBConnection();
	$sql = "SELECT * FROM basquetbolistas";
	$stmt = $con->prepare($sql);
	$stmt->execute();
	$players = null;
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$players[] = [
	        'Id' => $row['id'],
	        'Nombre' => $row['nombre'],
	        'Posicion' => $row['posicion'],
	        'Carrera' => $row['carrera'],
	        'Email' => $row['email']
	   	];
	}
	return $players;
}

// Funcion para devolver todos los maestros de la base de datos
function getFutbolistas()
{
	$con = getDBConnection();
	$sql = "SELECT * FROM futbolistas";
	$stmt = $con->prepare($sql);
	$stmt->execute();
	$players = null;
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$players[] = [
	        'Id' => $row['id'],
	        'Nombre' => $row['nombre'],
	        'Posicion' => $row['posicion'],
	        'Carrera' => $row['carrera'],
	        'Email' => $row['email']
	   	];
	}
	return $players;
}

 ?>