<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" lang="pt-BR">
	<title>Calculadora</title>
</head>
<body>
	<h1>Cauculadora</h1>
	<form action="index.php" method="get">
		Soma
		A: <input type="number" name="a">
		B: <input type="number" name="b">
		<br>
		<br>
		Operação:
		+<input type="checkbox" name="soma">
		-<input type="checkbox" name="sub">
		*<input type="checkbox" name="mult">
		/<input type="checkbox" name="div">
		<br>
		<br>
		<button type="submit">Calcular</button>
	</form>

	<?php

	if (@$_REQUEST["soma"]) {
		$soma =  @$_REQUEST["a"] + $_REQUEST["b"];
		echo "Resultado: " . $soma;
	} elseif (@$_REQUEST["sub"]) {
		$sub =  @$_REQUEST["a"] - @$_REQUEST["b"];
		echo "Resultado: " . $sub;
	} elseif (@$_REQUEST["mult"]) {
		$mult =  @$_REQUEST["a"] * @$_REQUEST["b"];
		echo "Resultado: " . $mult;
	} elseif (@$_REQUEST["div"]) {
		$div =  @$_REQUEST["a"] / @$_REQUEST["b"];
		echo "Resultado: " . $div;
	}
	?>

</body>
</html>