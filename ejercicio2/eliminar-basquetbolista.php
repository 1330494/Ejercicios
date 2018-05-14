<?php
// Obtenemos las utilidades de la pagina
include_once('utilities.php');
$id = isset( $_GET['id'] ) ? $_GET['id'] : '';
if( !array_key_exists($id, $basquetbolistas) )
{
  die('No existe dicho jugador.');
}

// Extraemos el numero de empleado para eliminar registro
$id = $basquetbolistas[$id]['Id'];
$tipo = 'B'; // Establecemos que el jugador a eliminar es Basquetbolista: B

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eliminando jugador...</title>
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
</head>
<body>
<form action="" method="POST">
	<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
	<input type="hidden" id="tipo" name="tipo" value="<?php echo $tipo; ?>">
</form>
<script type="text/javascript">
	// JQuery y JavaScript para confirmar eliminacion del jugador
	var id = document.getElementById('id');
	var tipo = document.getElementById('tipo');
	var c = confirm('Deseas eliminar jugador?');
	if (c) {

		deletePlayer(id.value,tipo.value);
		window.location.href = 'index.php';
	}else{
		window.location.href = 'index.php';
	}

	function deletePlayer(id, typo_jugador) {
    	$.post('eliminar.php', {postId:id, postType:typo_jugador},
    		function(data){
        		alert('Se elimino basquetbolista correctamente.');
    		}
    	);
	}
</script>
</body>
</html>