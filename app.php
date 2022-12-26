<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Calculadora</title>
</head>
<body>
	<div class="frame">
	<?php
		include_once("Calculadora.class.php");

		$r = new Calculadora();
		echo "<h3>O resultado é: </h3>";

		if ($_POST['operacao'] == "soma") {
			echo $r->soma($_POST['valor1'],$_POST['valor2'])."<br>";
		}
		if ($_POST['operacao'] == "subtrair") {
			echo $r->subtrair($_POST['valor1'],$_POST['valor2'])."<br>";
		}
		if ($_POST['operacao'] == "dividir") {
			echo $r->dividir($_POST['valor1'],$_POST['valor2'])."<br>";
		}

		if ($_POST['operacao'] == "multiplicar") {
			echo $r->multiplicar($_POST['valor1'],$_POST['valor2'])."<br>";
		}
	?>
	</div>

</body>
</html>