<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 7</title>
	<meta charset="utf-8" lang="pt-BR">
	<link rel="stylesheet" type="text/css" href="Exercicio7.css">
	<!--7. Escreva uma função que recebe, por parâmetro, o número de linhas, colunas e um conteúdo (texto) qualquer. Que serão utilizados para criar uma tabela HTML com essas características. -->
</head>
<body>
	<h1>Criador de Tabelas</h1>
	<p></p>
	<br>
	<form action="Exercicio7.php" method="GET">
		Linhas: <input type="number" name="linhas"><br>
		Colunas: <input type="number" name="colunas"><br>
		Conteudo: <input type="string" name="conteudo"><br>
		<button type="submit">Criar</button>
	</form>
	<br>
	<h2>Tabela</h2>

	<?php
	$linhas = @$_REQUEST["linhas"];
	$colunas = @$_REQUEST["colunas"];
	$conteudo = @$_REQUEST["conteudo"];

	function criaTabela($linhas, $colunas, $conteudo){
		echo "<table>\n";
		for ($i=0; $i < $linhas; $i++) {
			echo "<tr>\n";
			for ($j=0; $j < $colunas; $j++) {
				echo "<td>$conteudo</td>\n";
			}
			echo "</tr>\n";
		}

		echo "</table>\n";
	};

	echo criaTabela($linhas, $colunas, $conteudo);

	?>


</body>
</html>