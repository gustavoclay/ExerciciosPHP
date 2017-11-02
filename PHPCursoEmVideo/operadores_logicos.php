<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>Operações Lógicos</title>
</head>
<body>
	<div>
		<?php
		$i = $_GET["i"];
		$anNasc = $_GET["anNasc"];
		/*
		Operador3s logicos
		and &&      operador E
		or ||       operador OU
		xor         Operador Ou exclusívo
		!           Operador negação

		*/

		if ($i>=18 && $i<=65) {
			echo "Participação em votação obrigatória";
		} else {
			echo "Participação em votação não obrigatória";
		};

		$idade = 2017 - $anNasc;
		echo "<br>Quem nasceu em $anNasc tem idade de $idade anos.";
		$tipo = $idade>18 or $idade <65? $tipo = "obrigatório" : $tipo = "não obrigatório";
		echo " E dessa forma seu voto é $tipo";

		?>
	</div>
</body>
</html>