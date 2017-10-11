<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 3</title>
	<meta  charset="utf-8" lang="pt-BR">

	<!--
		Gustavo Clay - rgm 15588921
		3 – Faça um programa que ao receber uma data qualquer exiba por extenso a notação da data ex: Hoje é 06 de outubro de 2017. De acordo com a data escolhida. [Switch/Case] -->

	</head>
	<body>
		<h1>Exercico Data</h1>
		<form action="exercicio3.php" method="GET">
			Nome: <input type="string" name="nome">
			Data de nascimento: <input type="date" name="dt">
			<button type="submit">Enviar</button>
		</form>
		<br>

		<h1>Resultados</h1>

		<?php
		setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
		date_default_timezone_set('America/Sao_Paulo');
		$nome = @$_REQUEST["nome"];
		$dt = strtotime(@$_REQUEST["dt"]);

		echo "$nome nasceu em ".strftime('%d de %B de %Y', $dt);
		?>
	</body>
	</html>