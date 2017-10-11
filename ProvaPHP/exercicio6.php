<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 6</title>
	<meta  charset="utf-8" lang="pt-BR">
	<link rel="stylesheet" type="text/css" href="exercicio5.css">

	<!--
		6 – Faça um programa que imprima na tela um dados de uma array de acordo com a digitação do usuário, deverá conter pelo menos 3 campos. (Foreach) -->

	</head>
	<body>
		<h1>Imprimir Array</h1>
		<p></p>
		<br>
		<form action="Exercicio6.php" method="GET">
			campo1: <input type="string" name="a"><br>
			campo2: <input type="string" name="b"><br>
			campo3: <input type="string" name="c"><br>
			<button type="submit">Criar</button>
		</form>
		<br>
		<h2>Array</h2>

		<?php
		$arrayCoisas = [
			"1" => @$_REQUEST["a"],
			"2" => @$_REQUEST["b"],
			"3" => @$_REQUEST["c"],
			];

		foreach ($arrayCoisas as $key => $value) {
			echo "$value<br>";
		}
		?>



</body>
</html>