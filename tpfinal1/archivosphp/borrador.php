<?php
	error_reporting(0);
	session_start();
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="utf-8">
	<title>Ejercicio 5.10.5</title>
</head>
<body>
	<?php
		/* inicializo las variable que almacenan errores vacías para que no muestren el código php al usuario */
		$opcionErr = $productosErr = "";
		/* inicializo una variable booleana con valor positivo que usaré para validar el envío del formulario */
		$correcto = true;
		/* inicializo otra variable booleana con valor negativo que usaré para validar el envío del formulario */
		$terminarCompra = false;
		/* comprueba si el envío al servidor se hace con método post */
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			/* comprueba si la opción tiene el valor "seguir", en este caso se seguirá comprando */
			if ($_POST["opcion"] == "seguir") {
				/* comprueba si el valor del desplegable de los productos sea "selecciona", en este caso mostrará un mensaje de error y se da un valor negativo a la variable $correcto por tanto no se podrá enviar el formulario */
				if ($_POST["productos"] == "selecciona") {
					$productosErr = "Debe seleccionar algún producto antes de terminar la compra";
					$correcto = false;
				/* en caso contrario el usuario habrá seleccionado un producto del desplegable, por lo tanto este producto se añade a un array de sesión con nombre carro */
				} else {
					/* variable que retiene el producto seleccionado por el usuario */
					$productoSeleccionado = $_POST["productos"];
					/* variable que retiene un array de sesión para el carro */
					$carro = $_SESSION["carro"];
					/* añado el producto seleccionado al carro (será la clave del array) y le sumo una unidad (cantidad que será el valor asociadoa  la clave) */
					$carro[$productoSeleccionado] = $carro[$productoSeleccionado] + 1;
					/* establezco la sesión para el carro sino no se mostraría nada */
					$_SESSION["carro"] = $carro;
				}
			/* comprueba si se ha seleccionado la opción con valor "terminar", en este caso se da un valor positivo a la variable $terminarCompra pudiendo ser enviado el formulario */
			} elseif ($_POST["opcion"] == "terminar") {
				$terminarCompra = true;
			/* comprueba si esta vacío el campo de las opciones, en este caso mostrará un mensaje de error */
			} elseif (empty($_POST["opcion"])) {
				$opcionErr = "Debe marcar una opción para poder continuar";
				$correcto = false;
			/* en cualquier caso no definido se da un valor negativo a la variable $correcto, haciendo imposible el envío del formulario */
			} else {
				$correcto = false;
			}
		}
		/* mientras alguna de las siguientes condiciones sean falsas se seguirá mostrando el formulario y el usuario seguirá eligiendo productos */
		if(!isset($_POST["botonEnvio"]) || !$correcto || !$terminarCompra) {
	?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="productos">Productos disponibles:</label>
		<select id="productos" name="productos">
			<option value="selecciona">- Selecciona -</option>
			<optgroup label="Lacteos">
				<option value="Leche semidesnatada">Leche semidestanada</option>
				<option value="Yogur natural">Yogur natural</option>
				<option value="Queso fresco">Queso fresco</option>
			</optgroup>
			<optgroup label="Carnes">
				<option value="Solomillo">Solomillo</option>
				<option value="Lomo ibérico">Lomo ibérico</option>
				<option value="Chuleta de cerdo">Chuleta de cerdo</option>
			</optgroup>
			<optgroup label="Pescados">
				<option value="Salmón ahumado">Salmón ahumado</option>
				<option value="Sardina fresca">Sardina fresca</option>
				<option value="Bacalao salado">Bacalao salado</option>
			</optgroup>
			<optgroup label="Limpieza">
				<option value="Jabón de manos">Jabón de manos</option>
				<option value="Detergente">Detergente</option>
				<option value="Gel de baño">Gel de baño</option>
			</optgroup>
			<optgroup label="Verduras">
				<option value="Lechuga">Lechuga</option>
				<option value="Calabacín">Calabacín</option>
				<option value="Cebolla">Cebolla</option>
			</optgroup>
		</select>
		<?php echo "* ". $productosErr; ?>
		<br><br>
		<label>Seguir comprando</label>
		<input type="radio" name="opcion" value="seguir">
		<br>
		<label>Terminar</label>
		<input type="radio" name="opcion" value="terminar">
		<br><br>
		<input type="submit" name="botonEnvio" value="enviar">
		<span class="error"><?php echo $opcionErr; ?></span>
	</form>
	<?php
		/* si no hay error y se envía el formulario correctamente se muestra por pantalla cada valor que ha guardado el array de sesión con nombre carro (los productos elegidos) */
		} else {
			echo "La lista de los productos que están en el carro es la siguiente:<br>";
			print_r($_SESSION["carro"]);
			/* con el siguiente foreach también podría mostrar los pares de productos/cantidad almacenados*/
			/*foreach($_SESSION["carro"] as $producto => $cantidad) {
				if ($cantidad > 0){
					echo $producto ." - ". $cantidad."<br>";
				}
			}*/
			session_unset();
    		session_destroy();
		}
	?>
</body>
</html>