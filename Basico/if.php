<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Comando IF</title>
</head>
<body>
	<form action="if.php" method="get">
		A <input type="number" name="a">
		B <input type="number" name="b">
		<button type="submit">Enviar</button>
	</form>
	<?php

	$a = @$REQUEST["a"];
	$b = @$REQUEST["b"];

	if ($a > $b) {
		print "$a é maior que $b";
	} elseif ($a < $b) {
		print "$b é maior que $a";
	} 



	?>

</body>
</html>