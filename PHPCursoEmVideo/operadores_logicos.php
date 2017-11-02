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
		$dtNasc = $_GET["dtNasc"];
		/*
		Operador3s logicos
		and &&      operador E
		or ||       operador OU
		xor         Operador Ou exclusívo
		!           Operador negação

		*/

		if ($dtNasc>18 or $dtNasc<65) {
			echo "Participação em votação obrigatória";
		} else {
			echo "Participação em votação não obrigatória";
		}


		?>
	</div>
</body>
</html>