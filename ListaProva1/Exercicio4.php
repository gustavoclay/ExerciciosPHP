<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 4</title>
	<meta charset="utf-8" lang="pt-BR">
	<!-- 4. Crie um script em PHP que receba pela URL do navegador 3 valores numéricos e os rmazene nas variáveis $a, $b e $c. Em seguida, calcule e escreva o valor da expressão ($a - $b) * $c;
 -->
</head>
<body>
	<h1>(a - b) * C</h1>
	<form action="Exercicio4.php" method="GET">
		A: <input type="number" name="a">
		B: <input type="number" name="b">
		C: <input type="number" name="c">
		<button type="submit">Calcular</button>
	</form>
	<br>
	<?php
	$a = @$_REQUEST["a"];
	$b = @$_REQUEST["b"];
	$c = @$_REQUEST["c"];
	$res = ($a - $b) * $c;

	echo "Resultado: $res";

	 ?>
</body>
</html>