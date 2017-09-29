<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" lang="pt-BR">
	<title>Primeiros Passos no PHP</title>
</head>
<body>
	<h1>Comandos Básicos em PHP</h1>
	<?php
			//Primeiros Passos
		echo "Hello Word echo /PT-BR ÇÃO"; //comentário de uma linha
		/*comentário
		mais de uma linha*/
		echo "<br>";
		print "Hello Word print";
		echo "<br>";
		echo "<br>";

		// Titulo
		echo " <h1> Titulo h1 </h1> ";

		// Declação de Variaveis
		$data = date("d/m/y");

		// Contacatenação
		print "Hoje é " . $data . " entendeu";
		echo "<br>";
		echo "<br>";

		//Calculo com variáveis simples
		$valor1 = 10;
		$valor2 = 50;
		$total = $valor1 + $valor2;
		$total1 = $valor1 - $valor2;
		$total2 = $valor1 * $valor2;
		$total3 = $valor1 / $valor2;
		$total4 = $valor1 % $valor2;

		echo $total."<br>";
		echo $total1."<br>";
		echo $total2."<br>";
		echo $total3."<br>";
		echo $total4."<br>";

		//Variavéis de sistemas
		//$_REQUEST[""] 
		//$_GET[""] manda a informação pela url
		//$_POST[""] oculta informação da url
		
		// Passando parametros pela URL
		// @ = isset
		//if ($_REQUEST["a"] > $_REQUEST["b"]) {
		//	echo $_REQUEST["a"] . " é maior que " . $_REQUEST["b"];
		//} elseif ($_REQUEST["b"] > $_REQUEST["a"]) {
		//	echo $_REQUEST["b"] . " é maior que " . $_REQUEST["a"];



		//Estruturas de controle
		$a = 1;
		$b = 3;
		if ($a > $b) {
			echo $a . " é maior que " . $b;
		} elseif ($b > $a) {
			echo $b . " é maior que " . $a;
		} else {
			echo $a . " é igual a " . $b;
		}
		echo "<br>";

		?>


</body>
</html>