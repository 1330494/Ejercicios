<?php 
include_once 'utilities.php';

// Obtenemos el id y el tipo de jugador a eliminar
$id = filter_input(INPUT_POST, 'postId');
$tipo = filter_input(INPUT_POST, 'postType');

// En caso de futbolista 'F'
if ($tipo==='F') {
	deleteFutbolista($id); // Eliminamos
} 
if ($tipo==='B') { // Si es basquetbolista
	deleteBasquetbolista($id); // Eliminamos
}

?>