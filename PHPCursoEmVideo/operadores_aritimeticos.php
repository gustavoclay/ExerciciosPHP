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
		$m = ($n1 + $n2) / 2;
		echo "<h2>Os valores recebidos são $n1 e $n2</h2><br>";
		echo "A soma vale ".($n1+$n2)."<br>";
		echo "A subtração vale ".($n1-$n2)."<br>";
		echo "A multiplicação vale ".($n1*$n2)."<br>";
		echo "A divisão vale ".($n1/$n2)."<br>";
		echo "O modulo vale ".($n1%$n2)."<br>";
		echo "O média vale $m<br>";



		?>
	</div>
</body>
</html>