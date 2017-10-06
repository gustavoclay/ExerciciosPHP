<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 1</title>
</head>
<body>
<!-- 	01.	Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5  -->
	<form action="Exercicio1.php" method="GET">
		A <input type="number" name="a"> +
		B <input type="number" name="b">
		<button type="submit">Enviar</button>
	</form>
	<?php 

		$a = @$_REQUEST["a"];
		$b = @$_REQUEST["b"];
		$res = 0;

		if (($a + $b) > 20) {
			$res = $a + $b + 8;
			print $res;
		} elseif (($a + $b) <= 20) {
			$res = $a + $b - 5;
			print $res;
		}




	 ?>

</body>
</html>