	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 2 - Gustavo Clay</title>
</head>
<body>
	<!-- 	02.	Ler três números inteiros, a partir de um formulário, e imprimir na tela qual o maior e menor valor fornecido.   -->
	<h1>Comparador</h1>
	<form action="Exercicio2.php" method="GET">
		A <input type="number" name="a">
		B <input type="number" name="b">
		C <input type="number" name="c">
		<button type="submit">Enviar</button>
	</form>
	<?php

	$a = @$_REQUEST["a"];
	$b = @$_REQUEST["b"];
	$c = @$_REQUEST["b"];

	print "Maior ".max($a, $b, $c)."<br>";
	print "Menor ".min($a, $b, $c);

	?>
	</body>
	</html>