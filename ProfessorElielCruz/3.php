<!DOCTYPE>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Estrutura de Controle</title>
	</head>
	<body>
		<form action="3.php" method="GET">
			<label>Digite a Letra</label>
			<input type="text" name="letra" >			
			<button type="submit">Enviar</button>
		</form>
		<?php
			switch(strtoupper($_REQUEST["letra"])){
				case "A":
				case "E":
				case "I":
				case "O":
				case "U":
					print "É uma vogal";
				break;
				default:
					print "É uma consoante";
			}
		?>
	</body>
</html>




