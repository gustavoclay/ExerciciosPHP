<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>Operações Aritiméticas</title>
</head>
<body>
	<div>
		<?php
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		echo "<h2>Os valores recebidos são $n1 e $n2</h2><br>";
		echo "O valor absoluto de $n2 é ".abs($n2);
		//abs() - valor absoluto, eliminar o sinal negativo e considerar apenas o valor
		echo "<br>O valor de $n1<sup>$n2</sup> é ".pow($n1, $n2);
		//pow() - potência
		echo "<br>A raiz de $n1 é ".sqrt($n1);
		//sqrt() - raiz quadrada

		?>
	</div>
</body>
</html>