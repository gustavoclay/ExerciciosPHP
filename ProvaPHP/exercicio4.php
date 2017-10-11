<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 4</title>
	<meta  charset="utf-8" lang="pt-BR">

	<!--
		Gustavo Clay - rgm 15588921
		2 - Faça um programa que receba dois números. Se o primeiro número for maior que o segundo. Então o resultado será crescente entre um e outro. Se o primeiro número for menor o resultado será decrescente. [While] -->

	</head>
	<body>
		<h1>Exercico Crescente</h1>
		<form action="exercicio4.php" method="GET">
			A <input type="number" name="a">
			B <input type="number" name="b">
			<button type="submit">Enviar</button>
		</form>
		<br>
		<h1>Resultados</h1>

		<?php
		$a = @$_REQUEST["a"];
		$b = @$_REQUEST["b"];
		//imprimi crescente caso o a seja maior que b
		if ($a > $b) {
			while ($b <= $a) {
				echo "$b<br>";
				$b++;
			}
		}
		//imprimi decrescente caso o b seja maior que a
		elseif ($a < $b) {
			while ($b >= $a) {
				echo "$b<br>";
				--$b;
			}
		}

		?>
	</body>
	</html>