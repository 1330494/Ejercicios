<!DOCTYPE html>
<html>
<head>
	<title>Practica 06</title>
	<style type="text/css">
		.content{
			width: 400px;
			background-color: rgba(200,200,200,0.2);
			border-radius: 4px;
			margin-right: auto;
			margin-left: auto;
		}

		a{
			font-family: 'Comic Sans MS';
			font-size: 19px;
			color: orange;
		}

		body{
			background-color: rgba(230,220,210,0.3);
		}

		#title{
			font-size: 27px;
		}
	</style>
</head>
<body>
<center><span id="title">PRACTICA 06</span></center>
<div class="content">
	<ul>
		<li><a href="ejercicio1/">Ejercicio 1</a></li>
		<li><a href="ejercicio2/">Ejercicio 2</a></li>
	</ul>
</div>
<script type="text/javascript">
	var colors = ['green','red','blue','gray','black','purple'];
	var span = document.getElementById('title');
	posicion = 0;
	function spanColor(e) {
		span.style.color = colors[posicion];
		posicion++;
		if (posicion>6) {posicion=0;}
	}
	var id = setInterval(spanColor, 500);
</script>
</body>
</html>