<?php 
	// Añadimos el archivo para las utildades de la base de datos
	include_once 'utilities.php';

	// Obtenemos todos los valores de los input
	$id = filter_input(INPUT_POST, 'id');
	$nombre = filter_input(INPUT_POST, 'nombre');
	$posicion = filter_input(INPUT_POST, 'posicion');
	$carrera = filter_input(INPUT_POST, 'carrera');
	$email = filter_input(INPUT_POST, 'email');
	$last_id = filter_input(INPUT_POST, 'last_id');
	

	$futbolista = null;
	if ($last_id == $id) {
		// Asignamos a un arreglo asociado
		$futbolista = [
			'Id'=>$id,
			'Nombre'=>$nombre,
			'Posicion'=>$posicion,
			'Carrera'=>$carrera,
			'Email'=>$email
		];
	}else{
		// Asignamos a un arreglo asociado
		$futbolista = [
			'Id'=>$id,
			'Nombre'=>$nombre,
			'Posicion'=>$posicion,
			'Carrera'=>$carrera,
			'Email'=>$email,
			'Last' => $last_id
		];
	}
	
	// Mandamos modificar registro a la base de datos
	modifyFutbolista($futbolista);
 ?>
 <script type="text/javascript">
 	alert('Se ha modificado correctamente.');
 	window.location.href = 'index.php';
 </script>