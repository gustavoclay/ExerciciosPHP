<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>Operações R/title>
</head>
<body>
	<div>
		<?php
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		/*
		Operador3s
		Maior $a > $b
		Menor $a < $b
		Maior ou igual $a >= $b
		Menor ou igual $a <= $b
		Diferente $a <> $b // $a != $b
		Igual $a == $b
		Identico $a === $b
		
		Operador Ternario - comparador simples
		sintaxe
		Expressão ? verdadeiro : falso;

		*/

		$maior = $a>$b ? $a: $b;
		echo "Maior = $maior";


		?>
	</div>
</body>
</html>