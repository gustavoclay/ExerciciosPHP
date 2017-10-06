<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 3</title>
	<meta charset="utf-8" lang="pt-BR">
	<!-- 3. Crie um script php que receba um número, a partir de um formulário e gere a tabuada completa de multiplicação deste número. -->
</head>
<body>
	<h1>Tabuada</h1>
	<form action="Exercicio3.php" method="GET">
		Digite um número:<input type="number" name="num">
		<button type="submit">Gerar Tabuada</button>
	</form>
	<br>
	<?php 
	$num = @$_REQUEST["num"];

	for ($i=0; $i <= 10; $i++) {
		echo "$num X $i = ".$num*$i."<br>";
	}

	?>

</body>
</html>