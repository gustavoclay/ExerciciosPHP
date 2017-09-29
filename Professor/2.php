<!DOCTYPE>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Estrutura de Controle</title>
	</head>
	<body>
		<form action="2.php" method="GET">
			<label>A</label>
			<input type="number" name="num1" >
			<label>B</label>
			<input type="number" name="num2" >
			<label>C</label>
			<input type="number" name="num3" >
			<select name="oper">
				<option value="som"> + </option>
				<option value="sub"> - </option>
				<option value="div"> / </option>
				<option value="mul"> * </option>
			</select>
			<button type="submit">Enviar</button>
		</form>
		<?php
			
			switch($_REQUEST["oper"]){
				case "som":
					print $_REQUEST["num1"] + $_REQUEST["num2"] + $_REQUEST["num3"];
				break;
				case "sub":
					print $_REQUEST["num1"] - $_REQUEST["num2"] - $_REQUEST["num3"];
				break;
				case "div":
					print $_REQUEST["num1"] / $_REQUEST["num2"] / $_REQUEST["num3"];
				break;
				case "mul":
					print $_REQUEST["num1"] * $_REQUEST["num2"] * $_REQUEST["num3"];
				break;
			}
		?>
	</body>
</html>




