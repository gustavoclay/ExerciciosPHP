<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 2</title>
	<meta  charset="utf-8" lang="pt-BR">

	<!--
		2 – Faça um programa que receba um número e apresente a tabuada das 4 operações básicas (adição, subtração, multiplicação, divisão) na tela. [FOR] -->

	</head>
	<body>
		<h1>Tabuada</h1>
		<form action="Exercicio2.php" method="GET">
			Digite um número:<input type="number" name="num">
			<button type="submit">Gerar Tabuada</button>
		</form>
		<br>
		<?php
		$num = @$_REQUEST["num"];
		echo "<h1>Adição</h1>";
		for ($i=0; $i <= 10; $i++) {
			echo "$num + $i = ". ($num+$i) . "<br>";
		}
		echo "<h1>subtração</h1>";
		for ($i=0; $i <= 10; $i++) {
			echo "$num - $i = ".($num-$i)."<br>";
		}
		echo "<h1>Multiplicação</h1>";
		for ($i=0; $i <= 10; $i++) {
			echo "$num X $i = ".$num*$i."<br>";
		}
		echo "<h1>Divisão</h1>";
		for ($i=1; $i <= 10; $i++) {
			echo "$num / $i = ".$num/$i."<br>";
		}
		
		?>

	</body>
	</html>