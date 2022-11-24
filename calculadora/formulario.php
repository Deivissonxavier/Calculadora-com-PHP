<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>
	<form method="POST" action="interface.php">
		<fieldset>
			<legend>Calculadora</legend>
			<label>Valor 1</label>
			<input type="number" name="valor1">
			<br/>
			<label>Valor 2</label>
			<input type="number" name="valor2">
			<br/>
			<label>Operação</label>
			<select name="operacao">
				<option value="Soma">Soma</option>
				<option value="Subtraçao">Subtraçao</option>
				<option value="Multiplicação">Multiplicação</option>
				<option value="Divisão">Divisão</option>
			</select>
			<br/>
			<input type="submit" value="Calcular">
		</fieldset>
	</form>
</body>
</html>