<?php 

// Incluimos el archivo de utilidades para la base de datos
include_once 'db_utilities.php';

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Practica 06</title>
 	<!-- Estilo CSS para la pagina -->
 	<style type="text/css">
 		#headTable{
 			background-color: rgba(100,100,100,0.1);
 		}

 		th{
 			text-align: center;
 			border-top: 1px solid rgba(10,10,10,0.2);
 			border-bottom: 1px solid rgba(10,10,10,0.2);
 		}

 		td{
 			height: 25px;
 			text-align: center;
 			border-top: 1px solid rgba(10,10,10,0.2);
 			border-bottom: 1px solid rgba(10,10,10,0.2);
 		}
 	</style>
 </head>
 <body>
 <div id="head"><br>&nbsp;&nbsp;&nbsp;<span id="title"></span></div>
 <br>
 <center><span id="title2"></span></center>
 <hr>
 <div id="component"><br>&nbsp;&nbsp;&nbsp;<span id="title3"></span></div>
 <br>
 <div id="datos">
 	<table id="">
 		<thead>
 			<tr id="headTable">
 				<th id="th1" style="border-left: 1px solid rgba(10,10,10,0.2);">Usuarios</th>
 				<th id="th2">Tipos</th>
 				<th id="th3">Status</th>
 				<th id="th4">Accesos</th>
 				<th id="th5">Usuarios Activos</th>
 				<th id="th6" style="border-right: 1px solid rgba(10,10,10,0.2);">Usuarios Inactivos</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php // Mostramos los datos obtenidos de la base de datos. ?>
 			<tr>
 				<td style="border-left: 1px solid rgba(10,10,10,0.2);"><?php echo $DB_DATA['USERS'] ?></td>
 				<td><?php echo $DB_DATA['USER_TYPES'] ?></td>
 				<td><?php echo $DB_DATA['STATUS'] ?></td>
 				<td><?php echo $DB_DATA['ACCESS'] ?></td>
 				<td><?php echo $DB_DATA['ACTIVES'] ?></td>
 				<td style="border-right: 1px solid rgba(10,10,10,0.2);"><?php echo $DB_DATA['INACTIVES'] ?></td>
 			</tr>
 		</tbody>
 	</table>
 </div>
 <hr><a href="../">Volver</a><hr>
 <!-- JAVASCRIPT: Diseño y estilo de la pagina web-->
 <script type="text/javascript">
 	// Diseño del div 'header'
 	document.getElementById('head').style.backgroundColor = 'rgba(10,10,10,0.2)';
 	document.getElementById('head').style.height = '70px';

 	// Diseño de Textos y titulos
 	document.getElementById('title').innerText = 'Tecnologias y Aplicaciones Web - PHP & SQL';
 	document.getElementById('title').style.fontFamily = 'Arial Black';
 	document.getElementById('title').style.fontSize = '18px';

 	document.getElementById('title2').innerText = 'Contando Datos';
	document.getElementById('title2').style.fontFamily = 'Arial';
	document.getElementById('title2').style.fontSize = '29px';

	document.getElementById('title3').innerText = 'Totales';
	document.getElementById('title3').style.fontFamily = 'Arial';
	document.getElementById('title3').style.fontSize = '26px';

	// Diseño del div 'component'
	document.getElementById('component').style.backgroundColor = 'rgba(10,230,20,0.1)';
 	document.getElementById('component').style.height = '70px';
 	document.getElementById('component').style.border = '1px solid';

 	// Diseño de la tabla
 	var datos = document.getElementById('datos');
 	for (var i = 1; i < 7; i++) {
 		var th = document.getElementById('th'+i);
 		th.style.width = datos.offsetWidth/6+'px';
 		th.style.height = '25px';
 	}
 	
 </script>
 <!--											  -->

 </body>
 </html>