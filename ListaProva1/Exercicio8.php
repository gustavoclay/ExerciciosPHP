<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 8- Gustavo Clay</title>
	<meta charset="utf-8" lang="pt-BR">
	<link rel="stylesheet" type="text/css" href="Exercicio7.css">
	<!--Criar uma função para calcular o imposto de renda dos contribuintes, considerando que os dados de cada contribuinte, número de CPF, número de dependentes e renda mensal são valores fornecidos pelo usuário. Para cada contribuinte será feito um desconto de 5% do salário mínimo por dependente. 

Os valores para cálculo do imposto são: 

Renda Líquida
Alíquota
Até 3 salários mínimos
Isento
3 salários mínimos
7%
4 salários mínimos
15%
5 salários mínimos
22%
Acima de 6 salários mínimos
27% -->
</head>
<body>
	<h1>Calcular imposto de Renda</h1>
	<p>Preencha o formulário para calcular o imposto de renda dos contribuintes</p>
	<br>
	<form action="Exercicio8.php" method="GET">
		Nome: <input type="string" name="nome"><br>
		CPF: <input type="string" name="cpf"><br>
		Numero de dependentes: <input type="number" name="qtdDependentes"><br>
		Renda Mensal: <input type="number" step=0.01 name="renda"><br>
		<button type="submit">Calcular Imposto de Renda</button>
	</form>
	<br>
	<h2>Resultado</h2>

	<?php
	$nome = @$_REQUEST["nome"];
	$cpf = @$_REQUEST["cpf"];
	$qtdDependentes = @$_REQUEST["qtdDependentes"];
	$renda = @$_REQUEST["renda"];

	function calculaImpostoRenda($qtdDependentes, $renda){
		$salarioMinimo = 937;
		//dependentes
		if ($qtdDependentes > 0) {
			$salarioMinimo = (937/100) * (100-($qtdDependentes*5));
		}
		//imposto
		if ($renda <= ($salarioMinimo * 3)) {
			$imposto = 0;
		} elseif (($renda > ($salarioMinimo * 3)) and $renda <= (($salarioMinimo * 4))) {
			$imposto = 7;
		} elseif (($renda > ($salarioMinimo * 4)) and $renda <= (($salarioMinimo * 5))) {
			$imposto = 15;
		} elseif (($renda > ($salarioMinimo * 5)) and $renda <= (($salarioMinimo * 6))) {
			$imposto = 22;
		} elseif ($renda > ($salarioMinimo * 6)) {
			$imposto = 27;
		}
		//valor imposto
		$valorImposto = ($renda/100)*$imposto;
		return $valorImposto;
	}

	echo "Valor do imposto: ".calculaImpostoRenda($qtdDependentes, $renda);

	?>


</body>
</html>