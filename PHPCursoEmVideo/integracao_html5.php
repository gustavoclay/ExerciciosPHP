<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>Integração com HTML5</title>
</head>
<body>
	<div>
		<form method="get" action="integracao_html5.php">
			Valor: <input type="number" name="n">
			<button type="submit" value="calcular">Enviar</button>
		</form>
		<?php
		// <form method="get"> ---> $variavel = $_GET["n"]; Dados pela URL
		// <form method="post"> ---> $variavel = $_POST["n"]; Dados por Pacote
		$n = $_GET["n"];
		echo "A raiz quadrada de ";

		?>
	</div>
</body>
</html>