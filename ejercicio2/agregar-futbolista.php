<?php  
include_once 'utilities.php';

// Creamos variables temporales
$id = $nombre = $carrera = $email = $posicion = '';
$idErr = $nombreErr = $carreraErr = $emailErr = $posicionErr = '';

// Si se ejecuta el submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Validamos id
	if (empty($_POST["id"])) {// Si esta vacia
        $idErr = "Id es requerida."; // Creamos error
    } else {
    	//De lo contrario se asigna a la variable.
    	$id = clean_input($_POST["id"]);
    }

    // Validamos posicion
	if (empty($_POST["posicion"])) { // Si no existe posicion
        $posicionErr = "posicion es requerido."; // Mandamos error
    } else {
        // Si la posicion no contiene solo letras y espacios
        if (!preg_match("/^[a-zA-Z ]*$/",clean_input($_POST["posicion"]))) {
            // Cremos error de nombre
            $posicionErr = "Solo letras y espacios permitidos.";
        }else{            
            // Sino se asigna a la variable posicion.
            $posicion = $_POST["posicion"];
        }
    }

    // Validamos Nombre
    if (empty($_POST["nombre"])) { //Si no hay nombre
        $nombreErr = "Nombre es requerido."; // Creamos error
    } else {
        // Si el nombre no contiene solo letras y espacios
        if (!preg_match("/^[a-zA-Z ]*$/",clean_input($_POST["nombre"]))) {
        	// Cremos error de nombre
            $nombreErr = "Solo letras y espacios permitidos.";
        }else{
        	// Sino se asigna a la variable nombre.
        	$nombre = clean_input($_POST["nombre"]);
        }
    }

    // Validamos la carrera
    if (empty($_POST["carrera"])) {
        $carreraErr = "Carrera es requerida.";
    } else {
        
        // Si la carrera contiene letras y espacios
        if (!preg_match("/^[a-zA-Z ]*$/",clean_input($_POST["carrera"]))) {
        	// Cremos error de carrera
            $carreraErr = "Solo letras y espacios permitidos.";
        }else{
        	// Sino se asigna a la variable carrera.
        	$carrera = clean_input($_POST["carrera"]);
        }
    }

    // Validamos el correo
    if (empty($_POST["email"])) {
        $emailErr = "Email es requerido.";
    } else {
        // Si el e-mail esta bien no escrito 
        if (!filter_var(clean_input($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
        	// Creamos error de email
            $emailErr = "Invalid email format";
        }else{
        	//Sino se asigna a la variable email.
        	$email = clean_input($_POST["email"]);
        }
    }

    // Comprobamos que todos los campos esten completos
    if ($id!='' && $nombre!='' && $carrera!='' && $email!='' && $posicion!='') 
    {
    	// Se crea una variable llamada jugador con todos los datos
    	$jugador = [
            'Id' => (int)$id,
            'Nombre' => $nombre,
            'Posicion' => $posicion,
            'Carrera' => $carrera,
            'Email' => $email
        ];
        // Se manda guardar alumno a la base de datos
        guardar('Futbolista',$jugador);
        header('Location: index.php'); // Redireccionamos al inicio
    }
}
?>

    <?php require_once('header.php'); ?>
    <div class="row">
        <div class="large-6 columns">
            <h1><img src="./img/f.jpg"/></h1>
        </div>
    	<div class="large-6 columns">
    		<h3>Nuevo Futbolista</h3>
    		<section class="section">
    			<div class="content" data-slug="panel1">
    				<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		                
		                No. Jugador: <input type="number" name="id" value="<?php echo $id;?>">
		                <span class="error">* <?php echo $idErr;?></span>
		                
		                Nombre: <input type="text" name="nombre" value="<?php echo $nombre;?>">
		                <span class="error">* <?php echo $nombreErr;?></span>
		                
		                Carrera: <input type="text" name="carrera" value="<?php echo $carrera;?>">
		                <span class="error">* <?php echo $carreraErr;?></span>	              
		                
		                Posicion: <input type="text" name="posicion" value="<?php echo $posicion;?>">
		                <span class="error">* <?php echo $posicionErr;?></span>
		                
		                E-Mail: <input type="email" name="email" value="<?php echo $email;?>">
		                <span class="error">* <?php echo $emailErr;?></span>
		                
		                <br>
		                <center><input style="border-radius: 15px;" type="submit" class="button" name="submit" value="Guardar"></center>
		            </form>
    			</div>
    		</section>
    	</div>
    </div>
    <?php require_once('footer.php'); ?>