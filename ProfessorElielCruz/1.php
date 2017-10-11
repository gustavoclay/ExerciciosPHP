<!DOCTYPE>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Estrutura de Controle</title>
	</head>
	<body>
		<form action="1.php" method="GET">
			<label>A</label>
			<input type="number" name="num1" >
			<label>B</label>
			<input type="number" name="num2" >
			<button type="submit">Enviar</button>
		</form>
		<?php
			$res = $_REQUEST["num1"] + $_REQUEST["num2"];
			if($res > 20){
				$total = $res + 8;
				print @$total;
			}else{
				$total = $res - 5;
				print @$total;
			}
		?>
	</body>
</html>




