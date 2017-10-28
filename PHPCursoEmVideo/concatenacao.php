<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>Concatenação</title>
</head>
<body>
	<div>
		<?php
		$nome = "Gustavo";
		$idade = 24;
		echo $nome." tem ".$idade." anos de idade<br>";
		echo "$nome tem $idade anos de idade<br>";
		//com aspas simples no echo, o php não faz interpretação de variáveis
		echo '$nome tem $idade anos de idade';

		?>
	</div>
</body>
</html>